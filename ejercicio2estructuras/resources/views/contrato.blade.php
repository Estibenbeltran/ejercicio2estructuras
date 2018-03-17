@extends('master')
@section('contenido')
   <font color="black" face="Lithos Pro">
			<br><br>
			<div class="container">
			  	<center>
			  	<blockquote>
			    <div class="col"><h1>Datos del contrato</h1>
                    <?php foreach ($datos as $dato): ?>
                        <ul>
                        <?php foreach ($dato as $indice => $valor): ?>
                                <li>{{$indice}} - {{$valor}}</li>       
                        <?php endforeach ?>
                        </ul>
                        <br><br>
                    <?php endforeach ?>
                </div>
			    </blockquote>
				</center>
			</font>
@stop