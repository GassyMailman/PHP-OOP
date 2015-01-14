<?php

class Team {
	public $Name;
	public $area;
	public $mascot;
	public $place;
	public $points;
	public $bad;
	public $good;

	function __construct($Name, $area, $mascot, $place, $points, $bad, $good) {
			$this->Name   = $Name;
			$this->area   = $area;
			$this->mascot = $mascot;
			$this->place  = $place;
			$this->points = $points;
			$this->bad    = $bad;
			$this->good   = $good;
	}

	function getName() {
	return "the " . $this->Name .
			"and there from".$this->area
	}
}
class Ducks extends Team {
	function are() {
	return $this->good;
	}	

}

class Kings extends Team {
	function what() {
	return $this->bad;
	}
}

$Ducks = new Ducks("Ducks", "Anahiem", "Duck", "First", 38);
print "This team is " . $cat->getName();