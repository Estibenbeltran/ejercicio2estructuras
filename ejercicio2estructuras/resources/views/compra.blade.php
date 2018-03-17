@extends('master')
@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  	<center>
			  	<blockquote>
			    <div class="col"><h1>Comprar Productos</h1>
			    </blockquote>
				</center>
				<center>
					<form action="{{url('Comprar')}}" method="POST">
						{{csrf_field()}}
						<label for="formGroupExampleInput">Nombres y Apellidos</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  	<input type="text" name="Nombre" class="border border-dark" class="rounded" placeholder="Nombres y Apellidos">
					  	<br>
					  	<label for="formGroupExampleInput">Cedula</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  	<input type="text" name="Cedula" class="border border-dark" class="rounded" placeholder="Cedula">
					  	<br>
					  	<label for="formGroupExampleInput">Numero de contrato</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
					  	<input type="text" name="Numero" class="border border-dark" class="rounded" placeholder="Numero de Contrato">
					  	<br>
					  	<label for="formGroupExampleInput">Descripcion de contrato</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  	<input type="text" name="Descripcion" class="border border-dark" class="rounded" placeholder="Descripcion">
					  	<br>
					  	<label for="formGroupExampleInput">Valor de contrato</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  	<input type="text" name="Valor" class="border border-dark" class="rounded" placeholder="Valor">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 1 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC1" class="border border-dark" class="rounded" placeholder="Codigo P1">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 2 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC2" class="border border-dark" class="rounded" placeholder="Codigo P2">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 3 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC3" class="border border-dark" class="rounded" placeholder="Codigo P3">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 4 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC4" class="border border-dark" class="rounded" placeholder="Codigo P4">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 5 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC5" class="border border-dark" class="rounded" placeholder="Codigo P5">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 6 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC6" class="border border-dark" class="rounded" placeholder="Codigo P6">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 7 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC7" class="border border-dark" class="rounded" placeholder="Codigo P7">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 8 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC8" class="border border-dark" class="rounded" placeholder="Codigo P8">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 9 (opcional)</label>&nbsp;&nbsp;
					  	<input type="text" name="RegistroC9" class="border border-dark" class="rounded" placeholder="Codigo P9">
					  	<br>
					  	<label for="formGroupExampleInput">Registro de Producto 10 (opcional)</label>
					  	<input type="text" name="RegistroC10" class="border border-dark" class="rounded" placeholder="Codigo P10">
					  	<br><br><button type="submit" class="btn btn-dark">Comprar</button>
					</form>
				</center>
			</div>
			</font>
@stop