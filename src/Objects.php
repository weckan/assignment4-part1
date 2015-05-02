<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-type: text/plain');

class duck {
	function __construct($name){
		$this->name = $name;
	}
	public static $migration;
	public $name;

	public function quack() {
		echo 'Quack.';
	}

	public function sayName() {
		echo 'I am a duck, thus inferior to beavers. My name is ' . $this->name . ".\n";
	}

	public function migrationLocation() {
		echo 'We are ' . self::$migration . ".\n";
	}
}

$d1 = new duck('Donald');
$d2 = new duck('Daffy');
$d1->sayName();
$d2->sayName();
$d2->name = 'Daisy';
$d2->sayName();
//$d2->migration = 'North';
duck::$migration = 'North';
///echo "\n d2's migration is $d2->migration.";
//echo "\n d1's migration is $d1->migration.";
$d1->migrationLocation();
?>