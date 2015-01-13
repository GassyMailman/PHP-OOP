<?php
class Bear {

public $breed    = "default breed";
public $name 	 = "default name";
public $gender   = "femal";
public $price    = 100000;

	function getName() {
	return "{$this­>breed}" .
	"{$this­>name}";
	}

}

	$bear1 = new Bear();
	$bear1­>breed = "Black";
	$bear1­>name  = "bear";

print "The Bear’s name is {$bear1­>getName()}.";
