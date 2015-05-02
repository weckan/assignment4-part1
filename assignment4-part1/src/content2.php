<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>content2</title>
    <link rel="stylesheet" href="style.css">
</header>
<body>
<?php
#if($_SERVER['REQUEST_METHOD'] == 'GET') {
#    $_SESSION = array();
#    session_destroy();
#    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
#    $filePath = implode('/',$filePath);
#    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
#    header("Location: {$redirect}/login.php", true);
#    die();
#}
if (isset($_SESSION['name'])) {
#    $_SESSION['name'] = $_POST['Username'];
#    if (!isset($_SESSION['visits'])) {
#        $_SESSION['visits'] = 0;
#    }
#    echo "Hi $_SESSION[name], you have
#        visited this page $_SESSION[visits] times. <br>";
#    $_SESSION['visits']++;
    echo '<p>Click <a href="content1.php">here</a> to see content1.php</p>';
}

else {
    echo '<p>A username must be entered. Click
        <a href="login.php?logout=true">here</a> to return to the login screen
        </p>';
}

?>
</body>
</html>
