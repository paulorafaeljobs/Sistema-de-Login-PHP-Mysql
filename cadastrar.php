<?php session_start();if (isset($_SESSION['id'])) {header("location:./");die(); };?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Montserrat:wght@300&family=Open+Sans:ital,wght@1,300&family=Outfit:wght@100&family=Pacifico&family=Poppins:wght@300&family=Raleway:wght@200;400&family=Reem+Kufi&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="src/style.css">
    <title>Cadastrar</title>
</head>
<body>
    <div class="conteiner" style="margin-top:200px;">
        <h1>Cadastrar</h1>
        <form action="App/ControllerApp.php" method="post">
            <div class="user">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="pass">
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div class="pass">
                <input type="password" name="senha" placeholder="Senha">
            </div>
            <div>
                <button class="btn" name="cadastrar" type="submit">Cadastrar</button>
            </div>
            <div style="text-align:center;margin-top:10px;">
                <a style="text-decoration:none;color:black;" href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>