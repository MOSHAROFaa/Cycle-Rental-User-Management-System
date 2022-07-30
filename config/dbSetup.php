<?php
require_once('setting.php');
require_once("func.php");
$conn = mysqli_connect($serverName, $userName, $password);

if (!$conn) {
    die("Connection failed. Error Message: " . mysqli_connect_error());
}

if (!mysqli_select_db($conn, $dbName)) {
    createDatabase($conn, $dbName);
    createTables($conn, $dbName);
}
?>