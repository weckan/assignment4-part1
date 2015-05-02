<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-type: text/plain');

function foo($a, $b){
	echo "**In foo**\n";
	echo '$a is ' . $a . "\n";
	echo '$b is ' . $b . "\n";
	$b = 10;
	echo '$b is now ' . $b . "\n";
	echo "**Exiting foo**\n";
}

function fooRef(&$a, &$b){
	echo "**In fooRef**\n";
	echo '$a is ' . $a . "\n";
	echo '$b is ' . $b . "\n";
	$b = 10;
	echo '$b is now ' . $b . "\n";
	echo "**Exiting fooRef**\n";
}

$fizz = 42;
$buzz = 'Some string';

foo($fizz, $buzz);
echo 'After the first call $buzz is ' . $buzz . "\n";

fooRef($fizz, $buzz);
echo 'After the second call $buzz is ' . $buzz . "\n";
?>
