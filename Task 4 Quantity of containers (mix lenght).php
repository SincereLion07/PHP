<?php

$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$y = $data[2];

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{

	$len = strlen($data[2]);

	if ($len != 11) 
	{
		$y = $y + 1;
	}	

} 

fclose($file);

print_r($y);

/* Search for invalid data
$file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

$y = 0;

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{
	$x = preg_match('/^[A-Z]{4}[0-9]{7}$/', $data[2]);

	if($x == 1) 
	{
		$y++;
	}	

} 

fclose($file);

print_r($y);

  Version2:
  $file = fopen('file.csv', 'r');
fgetcsv($file, 1000, ';');

while(($data = fgetcsv($file, 1000, ';')) !== FALSE)
{

	$y = preg_match('/^[а-яА-ЯЁёa-zA-Z]{4}[0-9]{7}$/u', $data[2]);

	if($y == 1) 
	{
		$y = $y + 1;
	}	

} 

fclose($file);

print_r($y);
*/

?>
