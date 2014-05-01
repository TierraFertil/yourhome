<?php
@define(DOC_ROOT,dirname(__FILE__)); // Obtiene de forma correcta el archivo config.php
$username = $_POST['username']; //configura usuario
$password = $_POST['password']; //configura password
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include(DOC_ROOT.'/config.php'); //inicia la conexion sql
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM t_teams WHERE correo='$myusername' and key_secret='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        if(isset($_SESSION['admin']));
        if(isset($_SESSIOM['password']));
        $_SESSION['name']= $myusername;
        header("location:user.php");
    }
    else {
        $msg = "Usuario y/o contraseña incorrectos. Intenta de nuevo";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Ingresa tu usuario y contraseña");
}
?>
