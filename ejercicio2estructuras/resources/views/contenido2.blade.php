@extends('master')

@section('contenido')
	<table class="table table-dark">
	  <thead>
	    <tr>
	      
	      <th scope="col">Codigo</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Valor</th>
	      <th scope="col">Clase</th>
	      <th scope="col">Tipo</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($datos as $key => $dato) {
   			echo "<tr>";
	    		$bandera=0;
	    		foreach ($dato as $key => $value) {
	    			switch ($buscador) {
	    				case 'Codigo':
	    					if($key=="Codigo"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'Nombre':
	    					if($key=="Nombre"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'valor':
	    					if($key=="valor"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'clase':
	    					if($key=="clase"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;
	    				case 'clase':
	    					if($key=="clase"){
		    					if($value==$datoBusqueda){
		    						foreach ($dato as $key => $value) {
						    			echo "<th>",$value,"</th>";
						    		}
		    					}
		    				}
	    					break;	    				
	    				default:
	    					echo "No existe.";
	    					break;
	    			}
	    			
	    		}
		    	echo "</tr>";
	    }
	    ?>
	  </tbody>
	</table>

@stop