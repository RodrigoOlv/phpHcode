<?php

interface Veiculo{
	
	public function acelerar($velocidde);
	public function frenar($velocidde);
	public function trocarMarcha($marcha);
	
}

class Civic implements Veiculo{
	
	public function acelerar($velocidade){
		
		echo "O veículo acelerou até ". $velocidade ." km/h";
		
	}
	
	public function frenar($velocidade){
		
		echo "O veículo frenou até ". $velocidade. "km/h";
				
	}
	
	public function trocarMarcha($marcha){
		
		echo "O veículo engatou a marcha ". $marcha. "km/h";
		
	}
}

$carro = new Civic();

$carro->trocarMarcha(1);

?>