<?php
	function formataValor( $valor ) {
		//receber 5.000,00 -> 5000,00
		$valor = str_replace(".", "", $valor);
		//5000,00 -> 5000.00
		$valor = str_replace(",", ".", $valor);
		return $valor;
	}