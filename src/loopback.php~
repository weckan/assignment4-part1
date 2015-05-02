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

#initialize first section of output string
$base = array();
$base["Type"] = null;
$base["parameters"] = null;

#test server method, and initialize input as null if either GET or POST
if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $base["Type"] = "GET"; 
    $base["parameters"] = null;
    $input = null;

    # cycle through input and encode values into an array
    foreach($_REQUEST as $key => $value) {

        $input[$key] = $value;
    }
}
else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $base["Type"] = "POST";
    $base["parameters"] = null;
    $input = null;

    # cycle through input and encode values into an array
    foreach($_REQUEST as $key => $value) {

        $input[$key] = $value;
    }
}

# no handling for input other than for GET or POST
else {
    $input = null;
}

# the entire input, stored as an array, is the value for the 'parameters' key
$base['parameters'] = $input;
# displays as expected when encoded as string
$base_string = json_encode($base);

#print out the string
echo $base_string;
?>
</body>
</html>
