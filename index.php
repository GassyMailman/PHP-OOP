<?php

class Team {

//class body
//class body
//class body

}

$team1 = new Team();
$team2 = new Team();

class Team {
public $name    = "Ducks";
public $rank    = "1st";
public $area    = "Anaheim";
public $colors  = "Gold,black,Orange";
}

////////////////////////////////////////

class Team {

//class body
//class body
//class body

}

$team1 = new Team();
$team2 = new Team();

class Team {
protected $name    = "Kings";
protected $rank    = "4th";
protected $area    = "LA";
protected $colors  = "Black,White";
}

///////////////////////////////////////

class Team {

//class body
//class body
//class body

}

$team1 = new Team();
$team2 = new Team();

class Team {
private $name    = "Sharks";
private $rank    = "3d";
private $area    = "San Jose";
private $colors  = "Blue";
}

///////////////////////////////////////////////////////////////Lecture__2////////////////////////////////////////////////////////////////////////////////////////

class Team {
public $teamname;
public $area;
public $colors;

		function __construct($title, $teamname, $area, $colors) {
		$this­>teamname = $teamname;
		$this­>area = $area;
		$this­>colors = $colors;
		}

		function getInfo() {
		return “{$this­>teamname}” .
		“{$this­>area}”;
		}

}

class Car {
public $name;
public $manufactur;
public $year;

		function __construct($title, $name, $lastName, $year) {
		$this­>name = $name;
		$this­>manufactur = $manufactur;
		$this­>year = $year;
		}

		function getCarinfo() {
		return “{$this­>name}” .
		“{$this­>manufactur}”;
		}

}

class Book {
public $title;
public $author;
public $publisher;

		function __construct($title, $title, $author, $publisher) {
		$this­>title = $title;
		$this­>author = $author;
		$this­>publisher = $publisher;
		}

		function getBook() {
		return “{$this­>title}” .
		“{$this­>author}”;
		}

}

///////////////////////////////////////////////////////////////Lecture__3////////////////////////////////////////////////////////////////////////////////////////

if (is_object(‘hello’))
echo “It is an object”;
else
echo ‘It is not an object’;
var_dump(is_object(‘XYZ’));
var_dump(is_object(‘8008’));
var_dump(is_object(123));
var_dump(is_object(false));

if (is_null(‘hello’))
echo “It is null”;
else
echo ‘It is not null’;
var_dump(is_null(‘XYZ’));
var_dump(is_null(‘8008’));
var_dump(is_null(123));
var_dump(is_null(false));


if (is_double(‘hello’))
echo “It is a double”;
else
echo ‘It is not a double’;
var_dump(is_double(‘XYZ’));
var_dump(is_double(‘8008’));
var_dump(is_double(123));
var_dump(is_double(false));

///////////////////////////////////////////////////////////////Lecture__4////////////////////////////////////////////////////////////////////////////////////////

class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
			$this­>scientificName = $scientificName;
			$this­>firstName = $firstName;
			$this­>lastName = $lastName;
			$this­>gender = $gender;
			$this­>weight = $weight;
			$this­>bark = $bark;
			$this­>meow = $meow;
	}

	function getName() {
	return "This is my" . $this->firstName .
			"and last".$this->lastName
	}
}
class Cat extends Animal {
	function greet() {
	return $this­>meow;
	}	

}

class Dog extends Animal {
	function hello() {
	return $this­>bark;
	}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15);
print "Animal 1 is a " . $cat­>getName();