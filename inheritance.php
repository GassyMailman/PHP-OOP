<?php

class Team {
		public $color;
		public $name;
		public $area;
		public $mascot;
		public $mascotName;
	
		function __construct($color, $name, $area, $mascot, $mascotName) {
			$this->color = $color;
			$this->name = $name;
			$this->area = $area;
			$this->mascot = $mascot;
			$this->mascotName = $mascotName;
		}
		function getName() {
			return "The " . $this->name . 
			" are from " . $this->area .
			" cool. ";
		}
	}

	class Ducks extends Team {
		function __construct($color, $name, $area, $mascot, $mascotName, $good) {
			parent::__construct($color, $name, $area, $mascot, $mascotName);
			$this->good = $good;
		}
		function Badorgood() {
			return $this->good;
		}
	}    

	class Kings extends Team {
		function __construct($color, $name, $area, $mascot, $mascotName, $bad) {
			parent::__construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities);
			$this->bad = $bad;
		}
		function Goodorbad() {
			return $this->bad;
		}
	}

	$Ducks = new Ducks("GoldOrangeBlack", "Ducks", "Anahiem", "ducks", "Wildwing", "Good");
	print "The " . $Ducks->getName();
	print "The team is " . $Ducks->Badorgood();

	class Plant {
		public $flowers;
		public $species;
		public $scientificName;
		public $gender;
		public $height;
		function __construct($flowers, $species, $scientificName, $gender, $height) {
			$this->flowers = $flowers;
			$this->species = $species;
			$this->scientificName = $scientificName;
			$this->gender = $gender;
			$this->height = $height;
		}
		function getPlant() {
			return "is an " . $this->species . 
			" and " . $this->flowers . ". ";
		}
	}
	class Oak extends Plant {
		function __construct($benefits, $species, $scientificName, $gender, $height, $shade) {
			parent::__construct($benefits, $species, $scientificName, $gender, $height);
			$this->shade = $shade;
		}
		function Shade() {
			return $this->shade;
		}
	}
	class Rose extends Plant {
		function __construct($benefits, $species, $scientificName, $gender, $height, $cuts) {
			parent::__construct($benefits, $species, $scientificName, $gender, $height);
			$this->cuts = $cuts;
		}
		function Cut() {
			return $this->cuts;
		}
	}
	$oak = new Oak("doesn't have flowers", "Oak", "oakus treeus", "male", "50ft", "provides shade", "cuts and scrapes");
	print "<br>" . "This plant " . $oak->getPlant();
	print "It " . $oak->Shade();

	class Sport {
		public $category;
		public $name;
		public $levelOfFun;
		public $timeNecessary;
		public $playersNecessary;
		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary) {
			$this->category = $category;
			$this->name = $name;
			$this->levelOfFun = $levelOfFun;
			$this->timeNecessary = $timeNecessary;
			$this->playersNecessary = $playersNecessary;
		}
		function getSport() {
			return " is a " . $this->category . 
			". It's called " . $this->name;
		}
	}
	class Soccer extends Sport {
		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary, $muscles) {
			parent::__construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary);
			$this->muscles = $muscles;
		}
		function needed() {
			return $this->muscles;
		}
	}
	class Chess extends Sport {
		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary, $brain) {
			parent::__construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary);
			$this->brain = $brain;
		}
		function Needed() {
			return $this->brain;
		}
	}
	$soccer = new Soccer("sport", "soccer", "very fun", "any amount of time", "at least two players", "skill", "brain");
	print "<br>" . "This game" . $soccer->getSport();
	print ". It requires " . $soccer->needed();
?>



























