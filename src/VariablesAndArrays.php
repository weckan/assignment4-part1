 //This empty space will output to the page and count as content before the PHP code
<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';

//Variables and strings
$foo = 5;
echo $foo + 15 + ' is the initial value of foo summed with 15.';
echo "<p>If we use double quotes \$foo will be evaulated. \$foo = $foo";
$foo = '<p>$foo is now a string!';
echo "<p>If we use double quotes we can make newlines with \\n \n like this. But because it is HTML only " . htmlspecialchars('<br>') . " makes a newline.<br>";
echo "<p>So to break in the middle of a line<br>like this, we need to use html line break rather than a newline.";
echo '<p>String conatination is done using the . operator. \'string1\' . \'string2\' joins them into a single string';
echo '<p>Like ' . 'this.';

//Arrays

$myArr = array(); //Do make arrays like this.

$anotherArray[] = 'Some string'; //Don't make arrays like this.

$aPopulatedArray = array(
	'foo' => 'THIS',
	'baz' => 5,
	6 => 'I am index 6'
);

$aPopulatedArray[] = 'Last pushed';

echo "<p><b>$aPopulatedArray[foo]</b> is assoicated to the key 'foo'. <b>$aPopulatedArray[6]</b> is at index 6. <b>$aPopulatedArray[7]</b> is at index 7.";

$aPopulatedArray['baz'] += 10;
echo '<p><b>' . $aPopulatedArray['baz'] .'</b> is now at "baz"';

//$_GET is an array containing variables passed in the URL

echo '<p><h3>GET Variables</h3>
<p>
<table border="1">
<tr>
<td>Key
<td>value';

foreach($_GET as $key => $value){
	echo '<tr><td>' . $key . '<td>' . $value;
}
echo '<table>';

//$_POST works exactly the same way except for variables sent in via a POST request

echo '</body>
</html>';
?>