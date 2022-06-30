<?php 
session_start();
include("conect.php");

$name = mysqli_real_escape_string($conect, trim($_POST['nome']));
$user = mysqli_real_escape_string($conect, trim($_POST['usuario']));
$password = mysqli_real_escape_string($conect, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '{$user}'";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "insert into usuario(usuario, senha, data_cadastro, nome) values ('{$user}', md5('{$password}'), now(), '{$name}')";

if($conect->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conect->close();
header('Location: cadastro.php');
exit;

?>