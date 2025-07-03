<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <div class="container">
        <h1 class="corpo">Logout realizado com sucesso!</h1>
        <a href="index.php" class="botao">Voltar</a>
    </div>
</body>
</html>