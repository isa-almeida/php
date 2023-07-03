<?php

$x = 10;
$txt = "";
$y = 5.2;
$verifica = true;
$z = 0x1A;

echo gettype($x)."<br>";
echo gettype($txt)."<br>";
echo gettype($y)."<br>";
echo gettype($verifica)."<br>";
echo gettype($z)."<br><br>";

echo "<b>Convertendo:<br></b>";

$num = (float) $z;

echo gettype($num);
?>