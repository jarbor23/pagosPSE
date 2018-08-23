<?php
namespace App\Http\Controllers;

use App\Custom\Authentication;
use App\Custom\Bank;
use App\Custom\Person;
use App\Custom\PSETransactionRequest;
use App\Custom\Attribute;
use App\Http\Requests\PersonForm;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Transaccion;

use env;
class SoapController extends BaseSoapController
{
    private $service;
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bankList( Request $request){
        try {
            
                //validamos si la lista de bancos no ha sido cachada 
            if (!\Cache::has('listBank')) {
                //creamos una conexion al web service atraves del metodo setWsdl de clase BaseSoapController
                self::setWsdl('https://test.placetopay.com/soap/pse/?wsdl');
                //iniciamos la instancia 
                $this->service = InstanceSoapClient::init();
                //se crea un objeto de tipo Authentication para realizar cosultas
                $authentication = new Authentication();
                $hoy = date("Y-m-d");
                //se establece que la cache expire todos los dias a las 23:59:59, asi no se consume el servicio mas de una vez por dia; 
                $expira = DateTime::createFromFormat('Y-m-d H:i:s', $hoy.'23:59:59');
                $bancos = $this->service->getBankList(['auth'=>$authentication]);

                //se crea la cache de los bancos
                \Cache::put('listBank', $bancos, $expira);

            }
            $mostrarBancos=\Cache::get('listBank');
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }

        return view('listBank')->with('listBank',$mostrarBancos->getBankListResult->item);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function transaction(Request $request, PersonForm $personForm){
        
        try {

            self::setWsdl('https://test.placetopay.com/soap/pse/?wsdl');
            $this->service = InstanceSoapClient::init();

            $authentication = new Authentication();
            
            $ipAddress=$request->ip();
            $userAgent=$request->header('User-Agent');
            $returnURL=route('estadoTransaccion');
            $bankCode=$request->input('bankCode');
            $bankInterface=$request->input('bankInterface');
            $reference=md5(date('c'));

            //datos de el formulario
            $dataCliente = array(
                'document'  => $request->input('personCliente_document'),
                'documentType' => $request->input('personCliente_documentType'),
                'firstName'  => $request->input('personCliente_firstName'),
                'lastName'  => $request->input('personCliente_lastName'),
                'emailAddress' => $request->input('personCliente_emailAddress'),
                'address'  => $request->input('personCliente_address'),
                'city'  => $request->input('personCliente_city'),
                'province' => $request->input('personCliente_province'),
                'country'  => $request->input('personCliente_country'),
                'city'  => $request->input('personCliente_city'),
                'phone' => $request->input('personCliente_phone'),
                'mobile'  => $request->input('personCliente_mobile')
            );

            $dataPagador = array(
                'document'  => $request->input('personPagador_document'),
                'documentType' => $request->input('personPagador_documentType'),
                'firstName'  => $request->input('personPagador_firstName'),
                'lastName'  => $request->input('personPagador_lastName'),
                'emailAddress' => $request->input('personPagador_emailAddress'),
                'address'  => $request->input('personPagador_address'),
                'city'  => $request->input('personPagador_city'),
                'province' => $request->input('personPagador_province'),
                'country'  => $request->input('personPagador_country'),
                'city'  => $request->input('personPagador_city'),
                'phone' => $request->input('personPagador_phone'),
                'mobile'  => $request->input('personPagador_mobile')
            );
            $personVaidarArray=[$dataPagador['document'],$dataPagador['documentType'],$dataPagador['firstName'],$dataPagador['lastName'],$dataPagador['emailAddress']];

            $buyer = new Person($dataCliente);

            //como no se puede poner como requerido los campos del pagador
            //validaremos manuelmente la informacion minima, de no estar completa se pasara como pagador el cliente comprador
            if (!in_array("", $personVaidarArray)) {
                $payer = new Person($dataPagador);
            }else{
                $payer = new Person($dataCliente);
            }
            //como no se especifico se creara la misma persona como cliente y vendedor como prueba
            $shipping=new Person($dataCliente);
            $additionalData= new Attribute();

            //se crea el objeto de tipo pseTransaction, necesarios para consumir el servicio de create transaction
            $objPSETransactionRequest= new PSETransactionRequest($bankCode,$bankInterface,$returnURL,$reference,$payer,$buyer,$shipping,$ipAddress,$userAgent,$additionalData);
            
            $transaccion = $this->service-> createTransaction(['auth'=>$authentication,'transaction'=>$objPSETransactionRequest]);

            $arrayTransaccion = array('sessionID' => $transaccion->createTransactionResult->sessionID,'transactionID' => $transaccion->createTransactionResult->transactionID, 'trazabilityCode' => $transaccion->createTransactionResult->trazabilityCode,'estado'=>$transaccion->createTransactionResult->responseCode,'confirmed'=>0);
            //validamos que return code sea satisfactorio y guardamos en una varible de sesion  el id de transaccion
            if ($transaccion->createTransactionResult->returnCode == "SUCCESS") {
                $guardarTransaccion = Transaccion::create($arrayTransaccion);
                $url=$transaccion->createTransactionResult->bankURL;

                //guardamos en varible de sesion el id de transaccion
                $request->session()->put('idTransaccion',$transaccion->createTransactionResult->transactionID ); 
                return redirect()->away($url); 
                
            }else{
                //mostramos en pantalla el error por el cual no se pudo hacer la transaccion
                dd($transaccion->createTransactionResult->returnCode);
            }
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function estadoTransaction(/*PersonForm $personForm,*/ Request $request){
        
        try {
            
            self::setWsdl('https://test.placetopay.com/soap/pse/?wsdl');
            $this->service = InstanceSoapClient::init();
            $authentication = new Authentication();
            
            //retomamos el valor en la varible de sesion y acontinuacion la eliminamos
            $idTransaccion = $request->session()->get('idTransaccion');
            $request->session()->forget('idTransaccion');
            
            //respuesta para la vista
            //pasamos error por defecto, para validar cuando se reintente usar el servicio
            $respuesta = array('transactionState' => "error" , 'responseReasonText'=>'error' );
            
            $validadorTransaccion=Transaccion::where('transactionID','=',$idTransaccion)
                ->first();

            if(isset($validadorTransaccion->confirmed) and !$validadorTransaccion->confirmed){

                $respuestaTransaccion = $this->service-> getTransactionInformation(['auth'=>$authentication,'transactionID'=>$idTransaccion]);

                //cambiando el estado y la validacion al registro en la base de datos
                $trans = Transaccion::find($validadorTransaccion->id);
                $trans->confirmed = 1;
                $trans->estado = $respuestaTransaccion->getTransactionInformationResult->transactionState;
                $trans->save();

                $respuesta['transactionState']   = $respuestaTransaccion->getTransactionInformationResult->transactionState;
                $respuesta['responseReasonText'] = $respuestaTransaccion->getTransactionInformationResult->responseReasonText;

            }
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
            
        return view('respTransaccion')->with('respuesta',$respuesta);

    }
}
