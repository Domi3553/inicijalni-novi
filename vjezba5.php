<?php
header('Content-Type: text/plain; charset=utf-8');

$cijena = 450;
echo $cijena;
var_dump($cijena);
var_dump("450");

var_dump(7 / 2);
var_dump(8 / 2);
var_dump("5" + 3);
var_dump("5" . 3);
var_dump(17 % 5);

$trajanje = 135;

$sati = intdiv($trajanje, 60);
$minute = $trajanje %60;

echo $sati . "h " . $minute . "min\n";
?>