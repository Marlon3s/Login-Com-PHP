<?php
session_start();
include('conect.php');

//Validação para que o usuário não tente acessar outra pagina pela URL.
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

//Variáveis de controle contra SQLInjection
$user = mysqli_real_escape_string($conect, $_POST['usuario']);
$password = mysqli_real_escape_string($conect, md5($_POST['senha']));

$query = "select usuario from usuario where usuario = '$user' and senha = '$password'";

//Executando query de SELECT
$result = mysqli_query($conect, $query);

//Validando se o usuário existe na base de dados
$row = mysqli_num_rows($result);
if($row == 1) {
    $_SESSION['usuario'] = $user;
    header('Location: panel.php');
    exit();
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>
