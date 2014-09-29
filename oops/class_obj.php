<?php
class Car
{
	private $gear = 0;
	private $color = 'white';
	
	function car($color=''){		
		if($color != '') $this->color = $color;
	}
	
	public function setGear($gear){		
		$this->gear = $gear;	
	}	
	
	public function getGear(){
		if($this->gear == 0){
			return 'Neutral';
		} else {
			return $this->gear;	
		}
	}	
	
	public function setColor($color){
		$this->color = $color;
	}	
	public function getColor(){
		return $this->color;
	}		
}

$swift = new Car;
echo 'Gear : '.$swift->getGear(),"\n"; # Getter
$swift->setGear(5);# Setter
echo 'Gear : '.$swift->getGear(),"\n"; # Getter
echo 'Color : '.$swift->getColor(),"\n"; # Getter

###############################################
echo "\n---------- AUDI --------------------\n";
$audi = new Car('red');
echo 'Get Color : '.$audi->getColor(),"\n"; # Getter
echo 'Set Color :'.$audi->setColor('yellow'),"\n"; # Setter
echo 'Get Color : '.$audi->getColor(),"\n"; # Getter

