<?php
require_once("config/func.php");

session_start();

session_unset();
session_destroy();

newLocation("login.php");
exit;
?>