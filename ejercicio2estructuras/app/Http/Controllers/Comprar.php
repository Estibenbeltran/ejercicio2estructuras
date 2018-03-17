<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comprar extends Controller
{
    public function Formulario(Request $request){
    	$nombre = $request->input('Nombre');
    	$cedula = $request->input('Cedula');
    	$numero = $request->input('Numero');
    	$descripcion = $request->input('Descripcion');
    	$valor = $request->input('Valor');
    	$reg1 = $request->input('RegistroC1');
    	$reg2 = $request->input('RegistroC2');
    	$reg3 = $request->input('RegistroC3');
    	$reg4 = $request->input('RegistroC4');
    	$reg5 = $request->input('RegistroC5');
    	$reg6 = $request->input('RegistroC6');
    	$reg7 = $request->input('RegistroC7');
    	$reg8 = $request->input('RegistroC8');
    	$reg9 = $request->input('RegistroC9');
    	$reg10 = $request->input('RegistroC10');
    	$datos=[];
    	$datos[]=[
    		'nombre'=>$nombre,
    		'cedula'=>$cedula,
    		'numero'=>$numero,
    		'descripcion'=>$descripcion,
    		'valor'=>$valor,
    		'RegistroC1'=>$reg1,
    		'RegistroC2'=>$reg2,
    		'RegistroC3'=>$reg3,
    		'RegistroC4'=>$reg4,
    		'RegistroC5'=>$reg5,
    		'RegistroC6'=>$reg6,
    		'RegistroC7'=>$reg7,
    		'RegistroC8'=>$reg8,
    		'RegistroC9'=>$reg9,
    		'RegistroC10'=>$reg10,
    	];
    	$contrato=[
    		'datos'=>$datos
    	];
    	return view('contrato',$contrato);
    }
}