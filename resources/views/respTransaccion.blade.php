<!DOCTYPE html>
<html>
    @include('head')
    <body>
        @include('nav')
        <div class="container">
            <div class="row"><br><br><br>

            	@if($respuesta['transactionState'] == "OK" )

            	  <div class='alert alert-success'>
	                <p>La transacción fue aprobada por su entidad bancaria</p>
	               
	            </div>

            	@else

            	   <div class='alert alert-danger'>
            	   	    @if($respuesta['transactionState'] == "error" )

            	   	    	<p>Error si desea conocer el estado de sus transacciones, debe dirigirse al apartado "Lista Transacciones"</p>

            	   	    @else
            	   	    	<p>Error: transaccion {{$respuesta['transactionState']}}</p>
            	   	    	<p>{{$respuesta['responseReasonText']}}</p>
            	   	    @endif
            	   	               
            	   	</div>
            	@endif
            
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
	</body>