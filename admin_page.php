<?php
session_start();
if (!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Administrador</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: #fff;">
    <div class="box">
        <h1>Bem-vindo, <span><?= $_SESSION['name']; ?></span></h1>
        <p>Essa é a pagina de <span>adiministrador</span></p>
        <button onclick="window.location.href='logout.php'">Sair</button>
    </div>
</body>
</html>