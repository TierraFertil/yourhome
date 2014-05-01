<?php
session_start(); //se inicia la sesion
@define(ADMIN,$_SESSION['name']); //Obtiene el nombre de usuario de la variable global registrada
if(isset($_SESSION['admin'])){ //Si la sesion no se registra
header("location:login.php"); // Redirije a login.php
}
else //continua a la -> pagina
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p><a href="logout.php">Logout</a></p> 
    </body>
</html>

