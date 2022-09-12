<?php

$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$x = array();

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{
	$x[$data[1]] = 1;

}
fclose($file);

print_r($x);

?>
