<?php
error_reporting(E_STRICT);

class Car{
	function kmToMile($km) 
	//static function kmToMile($km) 
	{
		return $km/1.5; 
	}	
}
echo "<hr>";
echo Car::kmToMile(150);
echo "<hr>Further execution cntd..</hr>";
