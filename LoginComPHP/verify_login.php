<?php
session_start();

//Validando se o usuário realmente está logado
if(!$_SESSION['usuario']){
    header('Location: index.php');
    exit();
}
