<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>multtable</title>
    <link rel="stylesheet" href="style.css">
</header>
<body>
<?php
$error_check = 0;
$arg_check = 0;

#function isfloat($f) return ($f == (string)(float)$f);



foreach($_GET as $key => $value) {
    if(!is_numeric($value)) {
        echo "$key must be an integer <br>";
        $error_check = 1;
    }
    # Credit to user 'Mitch' for regular expression search, given on
    # http://php.net/manual/en/function.is-float.php
    $regex = "/^[+-]?(\d*\.\d+([eE]?[+-]?\d+)?|\d+[eE][+-]?\d+)$/";
    if (preg_match ($regex, $value)) {
        echo "$key must be an integer <br>";
        $error_check = 1;
    }
    if($key == "min-multiplicand" && $value >= 0)
        $arg_check++;
    if($key == "max-multiplicand" && $value >= 0)
        $arg_check++;
    if($key == "min-multiplier" && $value >= 0)
        $arg_check++;
    if($key == "max-multiplier" && $value >= 0)
        $arg_check++;
}

if ($arg_check != 4) {
    echo 'Please provide positive arguments for min-multiplicand, 
        max-multiplicand, min-multiplier, and max-multiplier.';
    $error_check = 1;
}
if ($arg_check == 4) {
    if($_GET['min-multiplicand'] > $_GET['max-multiplicand']) {
        echo "Minimum multiplicand larger than maximum<br>";
        $error_check = 1;
    }

    if($_GET['min-multiplier'] > $_GET['max-multiplier']) {
        echo "Minimum multiplier larger than maximum<br>";
        $error_check = 1;
    }
}

if($error_check == 0) {
    $tblHeight = ($_GET['max-multiplicand'] - $_GET['min-multiplicand']) + 2;
    #echo $tblHeight;
    $tblWidth = ($_GET['max-multiplier'] - $_GET['min-multiplier']) + 2;
    #echo $tblWidth;
    echo "<table>";
    for ($i = $_GET['min-multiplicand']-1; $i <= $_GET['max-multiplicand']; $i++) {
        echo "<tr>";
        for ($j = $_GET['min-multiplier']-1; $j <= $_GET['max-multiplier']; $j++) {
            $multiple = $i * $j;
            if ($i == $_GET['min-multiplicand']-1 && $j == $_GET['min-multiplier']-1)
                echo "<td>  </td>";
            else if ($i == $_GET['min-multiplicand']-1)
                echo "<td>$j</td>";
            else if ($j == $_GET['min-multiplier']-1)
                echo "<td>$i</td>";
            else 
                echo "<td> $multiple </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
