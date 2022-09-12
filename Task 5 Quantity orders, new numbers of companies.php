<?php

$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$x = array();

$namecom = array('без названия','Афродита','Гера', 'Зевс', 'Афина');

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{
	
	$x[$namecom[$data[1]]] = $x[$namecom[$data[1]]] + 1;


} 

fclose($file);

print_r($x);


?>
