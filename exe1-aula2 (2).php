<?php

$vetor = array('X'=>'2', 'Y'=>'3');

$aux = $vetor['X'];

echo "X = ".$vetor['X']."<br>";
echo "Y = ".$vetor['Y']."<br><br>";

echo "Invertendo X e Y<br><br>";

$vetor['X'] = $vetor['Y'];
$vetor['Y'] = $aux;

echo "X = ".$vetor['X']."<br>";
echo "Y = ".$vetor['Y']."<br>";

?>