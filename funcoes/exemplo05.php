<?php

$a = 10;

function trocaValor(&$b){//& signifca passagem de parâmetro por referência
	$b += 50;
	
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;
?>