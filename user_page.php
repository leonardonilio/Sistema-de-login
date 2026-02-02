<?php
session_start();
if (!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Usuario</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: linear-gradient(135deg, #0f0f1e 0%, #1f1f3a 100%);">
         <main class="container">        
    <div class="box">
        <h1>Bem-vindo, <span><?= $_SESSION['name']; ?></span></h1>
        <p>Essa é a pagina de <span>Usuário</span></p>
        <button onclick="window.location.href='logout.php'">Sair</button>
        <div class="tech-circle">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    
    </div>
        </main>
</body>
</html>