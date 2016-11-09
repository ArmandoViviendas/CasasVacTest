<?php
/**
* 
*/
include('src\Models\promociones.php');

class PromocionesController 
{
	
	public static function promociones(){
		
		$promociones = new promociones();
		$listaPromos = $promociones->obtenerListado();
		echo $listaPromos;
	}
}