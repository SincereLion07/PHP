<?php

$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$x = array();

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{
	$x[$data[1]] = $x[$data[1]] + 1;
	
	/* Numbers and quantity of containers 
	$x[$data[1]][$data[2]] = $x[$data[1]][$data[2]] + 1;
	version2:
	$x[$data[2]] = $x[$data[2]] + 1;
	*/

} 

fclose($file);

print_r($x);

/* Quantity of containers and orders
$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$x = array();

$y = array();

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{
	$x[$data[1]] = $x[$data[1]] + 1;

	$y[$data[2]] = $y[$data[2]] + 1;

} 

fclose($file);

print_r($x);

echo "<br>";

print_r($y);
*/

?>
