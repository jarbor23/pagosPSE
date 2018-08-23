<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('bank_list' ,['as' =>'listaBancos', 'uses' => 'SoapController@bankList'] );

Route::get('transaction-list' ,['as' =>'listaTransaccion', 'uses' => 'TransaccionController@index'] );

//Route::get('transaction' , 'SoapController@transaction' );
Route::post('transaction' , 'SoapController@transaction' );

Route::get('estado_transaction' , ['as' =>'estadoTransaccion', 'uses' => 'SoapController@estadoTransaction'] );

//Route::post('estado_transaction' , 'SoapController@estadoTransaction' );