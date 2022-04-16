<?php
session_start();
// $servername = "194.163.35.151";
// $server_user = "u708245423_5Wpp4";
// $server_pass = "Kootty123#";
// $dbname = "u708245423_eNgPt";
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>