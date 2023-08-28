<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'views/contenido2.view.php';
} else{
    header('Location: login.php');
}


?>