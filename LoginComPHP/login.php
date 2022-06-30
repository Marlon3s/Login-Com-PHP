<?php
session_start();
include('conect.php');

//Validação para que o usuário não tente acessar outra pagina pela URL.
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
$password = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$user}' and senha = md5('{$password}')";
$result = mysqli_query($conexao, $query);

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
