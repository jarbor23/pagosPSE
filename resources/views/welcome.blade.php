<!DOCTYPE html>
<html>
    @include('head')
    <body>
        @include('nav')
        <div class="container">
                <div class="row"><br><br><br>
                    <!--si el formulario contiene errores de validación-->
                    @if($errors->has())
                        <div class='alert alert-danger'>
                            <!--recorremos los errores en un loop y los mostramos-->
                            @foreach ($errors->all('<p>:message</p>') as $message)
                                {{ $message }}
                            @endforeach
                        </div>
                    @endif

                    <h1> Prueba Pago PSE</h1>
                        

                    </div>
                    <div class="col-sm-3">
                        <a href="{{ url('bank_list') }}" ><div class="card card-5-7 card-default">
                            <div class="card-body">
                                <img src="{{ asset('asset/img/pse.png') }}" class="im-responsive">
                                <h4>Pagos PSE</h4>
                            </div>
                        </div></a>
                        
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ url('transaction-list') }}" ><div class="card card-5-7 card-default">
                            <div class="card-body">
                                <img src="{{ asset('asset/img/pse.png') }}" class="im-responsive">
                                <h4>Historial de transacciones</h4>
                            </div>
                        </div></a>
                        
                    </div>
                </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    </body>
</html>
