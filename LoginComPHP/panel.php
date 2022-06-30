<?php
    include('verify_login.php');
?>
<link rel="stylesheet" type="text/css" href="css/panel.css">
<div class= 'container-model'>
    <div class= 'container'>
        <h1>
            Olá, <?php echo $_SESSION['usuario'];?>
        </h1>
        <h2>
            Deseja se desconectar?
        </h2>
        <h3 class = 'botton'>
            <a href="logout.php">Desconectar</a>
        </h3>
    </div>
</div>