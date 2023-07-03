<?php

$vetor = array('X'=>'10', 'Y'=>'20');

$aux = $vetor['X'];

echo "X = ".$vetor['X']."<br>";
echo "Y = ".$vetor['Y']."<br>";

echo "<br><b>Invertendo X e Y<br><br></b>";

$vetor['X'] = $vetor['Y'];
$vetor['Y'] = $aux;

echo "X = ".$vetor['X']." ";
echo "Y = ".$vetor['Y']."<br><br>";

echo "<b>print_r</b>: ";
print_r($vetor); //imprime a estrutura do vetor e dados inseridos
echo "<br>";
echo "<b>var_dump</b>: ";
var_dump($vetor); //exibe informações sobre o vetor como o print_r, mas com mais informações, como nº de elementos, tipo, etc;

?>