<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
if(isset($_GET['logout'])) {
   if($_GET['logout'] == 'true') {
    $_SESSION = array();
    session_destroy();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/',$filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/login.php", true);
    die();
   }
}
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>content1</title>
    <link rel="stylesheet" href="style.css">
</header>
<body>
<?php
#if ($_POST['validLogin'] == 'true/') {
#if(null !== ($_GET['logout'] && $_GET['logout'] == 'true')) {
#if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['logout'] == 'true') {
if(isset($_GET['logout'])) {
   if($_GET['logout'] == 'true') {
    $_SESSION = array();
    session_destroy();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/',$filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/login.php", true);
    die();
   }
}
#if(session_status() == PHP_SESSION_ACTIVE) {
#if (isset($_POST['Username']) || isset($_SESSION['name'])) {
if (!empty($_POST['Username']) || isset($_SESSION['name'])) {
    if (isset($_POST['Username']))
        $_SESSION['name'] = $_POST['Username'];
    if (!isset($_SESSION['visits'])) {
        $_SESSION['visits'] = 0;
    }
    echo "Hi $_SESSION[name], you have
        visited this page $_SESSION[visits] times. <br>";
    $_SESSION['visits']++;
echo '<p>Click <a href="content1.php?logout=true">here</a> to logout</p>';
echo '<p>Click <a href="content2.php">here</a> to see content2.php</p>';
}
else {
    echo '<p>A username must be entered. Click
    <a href="content1.php?logout=true">here</a> to return to the login screen
    </p>';
}

?>
</body>
</html>
