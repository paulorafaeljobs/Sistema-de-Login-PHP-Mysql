<?php session_start();if (!isset($_SESSION['id'])) {header("location:login.php");die(); };?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{padding: 0;margin:0;font-family:arial;}
        header{display:flex;align-items: center;justify-content: space-evenly;background-color:black;width:100%;height:50px;}
        header > a {text-decoration:none;color:white;}
        header > ul > li > a {text-decoration:none;color:white;}
        header > ul {display:flex;}
        header > ul > li {list-style:none;margin:5px;color:white;}
    </style>
</head>
<body>
    <header>
        <a href="./">Dashboard</a>        
        <ul>
            <li><a href="App/ControllerApp.php?&sair">Sair</a></li>
        </ul>
    </header>
        <p>ID: <?= $_SESSION['id'];?></p>
        <p>Nome: <?= $_SESSION['nome'];?></p>
        <p>Email: <?= $_SESSION['email'];?></p>


</body>
</html>