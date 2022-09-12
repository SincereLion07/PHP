<?php

$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$y = $data[2];

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{

	$pos = strpos($data[2], "X");

	if ($pos === FALSE)
	{
	 'Строка "X" не найдена в строке "$data[2]"';

	}
	else 
	{
		$y = $y + 1;
	}	

} 

fclose($file);

print_r($y);

/* version2:
$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$y = $data[2];

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{

	$pos = strpos($data[2], "X");

	if ($pos !== FALSE) 
	{
		$y = $y + 1;
	}	

} 

fclose($file);

print_r($y);
*/

?>
