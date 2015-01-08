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