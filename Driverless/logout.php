<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["usname"]);
header("Location:main.php");
?>
