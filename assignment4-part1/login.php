<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</header>
<body>
<?php

#start or resume session
#session_start();
#if visiting for the first time, or revisiting after logout
#if ($_GET['logout'] == "true" || session_status !== PHP_SESSION_ACTIVE) {
#
#if (isset($_GET['logout']) && $_GET['logout'] == "true") {
#    $loggedOut = 'true';
#    echo "<form action='content1.php' method='post'>
#    <input type='hidden' name='validLogin' value=$loggedOut/>
#    <label>Username<input type='text' name='Username'></label> 
#    <input type='submit' value='Login'>";
#}
#else {
#   #repeatLogin
#    $loggedOut = 'false';
#    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
#    $filePath = implode('/',$filePath);
#    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
#    #header("Location: {$redirect}/Logout.html", true);
#
#    echo "<form action='content1.php' method='post'>
#    <input type='hidden' name='validLogin' value=$loggedOut/>
?>   
    <form action='content1.php' method='post'>
    <input type='hidden' name='validLogin' value=true/>
    <label>Username<input type='text' name='Username'></label> 
    <input type='submit' value='Login'>
</body>
</html>

