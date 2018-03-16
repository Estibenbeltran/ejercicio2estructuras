@extends('master')

@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  	<center>
			  	<blockquote>
			    <div class="col"><h1>Buscar implemento</h1>
			    </blockquote>
				</center>
				<center>
			    	
					  <form action="{{url('Informacion')}}" method="POST">
					  	{{csrf_field()}}
					  	
					  	<label for="buscador">Selecionar: </label><br>
					  	<label for="hola" name="hola" value="2">
					    <select class="custom-select my-1 mr-sm-2" class="border border-dark" name="buscador">
					      <option>Codigo</option>
					      <option>Nombre</option>
					      <option>Valor</option>
					      <option>Clase</option>}
					      <option>Tipo</option>
					    </select>	
					  	<br><br>
					  	<input type="text" name="datoBusqueda" class="border border-dark" class="rounded">
					  	<br><br><button type="submit" class="btn btn-dark">Buscar</button>
					  </form>
					  </center>
			</div>
			</font>

@stop