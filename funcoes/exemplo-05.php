<?php 

$a = 10;

function troValor(&$b){

	$b += 50;

	return $b;

}

echo troValor($a);
echo "<br>";
echo troValor($a);
echo "<br>";
echo $a;


 ?>