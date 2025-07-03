<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verissimo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <a href="logout.php">Sair</a>  <div class="sair">
        <h1>𝑽𝒆𝒓𝒊𝒔𝒔𝒊𝒎𝒐</h1>
        <p> 𝖠𝗋𝗍𝖾𝗌𝖺𝗇𝖺𝗍𝗈𝗌 𝗊𝗎𝖾 𝖾𝗇𝖼𝖺𝗇𝗍𝖺𝗆</p>
    </header>
    <div class="card" style="width: 18rem;">
        <img src="caneca2.jpg" class="card-img-top" alt="c:\Users\Win\Documents\projeto-pizzaria3\tyste\caneca2.jpg">
        <div class="card-body">
            <h5 class="card-title">𝘊𝘢𝘯𝘦𝘤𝘢𝘴</h5>
            <p class="card-text">Pra começar o dia com uma dose extra de fofura!</p>
            <a href="#" class="minha-cor-btn">Encomende agora!</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="caixinha.jpg" class="card-img-top" alt="caixinha.jpg">
        <div class="card-body">
            <h5 class="card-title">𝘊𝘢𝘪𝘹𝘪𝘯𝘩𝘢𝘴</h5>
            <p class="card-text">Um presente delicado e cheio de amor!</p>
            <a href="#" class="minha-cor-btn">Encomende agora!</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="caixinha.jpg" class="card-img-top" alt="caixinha.jpg">
        <div class="card-body">
            <h5 class="card-title">𝘊𝘩𝘢𝘷𝘦𝘪𝘳𝘰𝘴</h5>
            <p class="card-text">Um mimo pra carregar por aí com estilo e carinho!</p>
            <a href="#" class="minha-cor-btn">Encomende agora!</a>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Verissimo - Artesanatos Personalizados | Todos os direitos reservados.</p>
    </footer>
</body>
</html>