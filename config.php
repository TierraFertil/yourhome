<?php
// Contiene la configuracion basica para la conexion a la DB.
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'luxiaoyu1987';
$dbName = 'yourhome';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>