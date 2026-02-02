<?php

session_start();
$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error']?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error) ? "<p class='error-menssage'>$error</p>" : '';
}

function isActiveForm($forName, $activeForm) {
    return $forName === $activeForm ? 'active' : '';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Stack Login e Registrar Como Usuario e Admin</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?=  showError($errors['login']) ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" name="login">Login </button>
                <p>Não tem uma conta <a href="#" onclick="showForm('register-form')">Criar conta</a> </p>
            </form>
        </div> 
            <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Registrar</h2>
                <?=  showError($errors['register']) ?>
                <input type="name" name="name" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <select name="role" required>
                    <option value="">--Selecione uma opção--</option>
                    <option value="user">Usuário</option>
                    <option value="Admin">Admin</option>
                </select>
                <button type="submit" name="register">Registrar</button>
               <p>Já tem uma conta <a href="#" onclick="showForm('login-form')">Entrar</a> </p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>