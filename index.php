<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Stack Login e Registrar Como Usuario e Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" name="login">Login </button>
                <p>Não tem uma conta <a href="#" onclick="showForm('register-form')">Criar conta</a> </p>
            </form>
        </div> 
            <div class="form-box" id="register-form">
            <form action="">
                <h2>Registrar</h2>
                <input type="name" name="name" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <select name="role" required>
                    <option value="">--Selecione uma opção--</option>
                    <option value="user">Usuario</option>
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