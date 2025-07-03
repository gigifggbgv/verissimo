<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verissimo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <h1>𝑽𝒆𝒓𝒊𝒔𝒔𝒊𝒎𝒐</h1>
        <p>𝖠𝗋𝗍𝖾𝗌𝖺𝗇𝖺𝗍𝗈𝗌 𝗊𝗎𝖾 𝖾𝗇𝖼𝖺𝗇𝗍𝖺𝗆</p>
        <a href="logout.html" class="botao">Sair</a>
    </header>

    <div class="container d-flex justify-content-center flex-wrap gap-4 my-4">
        <?php
        class Produto {
            public $nome;
            public $descricao;
            public $imagem;

            public function __construct($nome, $descricao, $imagem) {
                $this->nome = $nome;
                $this->descricao = $descricao;
                $this->imagem = $imagem;
            }

            public function exibirCard() {
                echo "
                <div class='card' style='width: 18rem;'>
                    <img src='{$this->imagem}' class='card-img-top' alt='{$this->nome}'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$this->nome}</h5>
                        <p class='card-text'>{$this->descricao}</p>
                        <a href='#' class='minha-cor-btn'>Encomende agora!</a>
                    </div>
                </div>";
            }
        }

        $produtos = [
            new Produto("𝘊𝘢𝘯𝘦𝘤𝘢𝘴", "Pra começar o dia com uma dose extra de fofura!", "caneca2.jpg"),
            new Produto("𝘊𝘢𝘪𝘹𝘪𝘯𝘩𝘢𝘴", "Um presente delicado e cheio de amor!", "caixinha.jpg"),
            new Produto("𝘊𝘩𝘢𝘷𝘦𝘪𝘳𝘰𝘴", "Um mimo pra carregar por aí com estilo e carinho!", "caixinha.jpg")
        ];

        foreach ($produtos as $produto) {
            $produto->exibirCard();
        }
        ?>
    </div>

    <footer class="text-center py-3 bg-light">
        <p>&copy; <?php echo date("Y"); ?> Verissimo - Artesanatos Personalizados | Todos os direitos reservados.</p>
    </footer>
</body>
</html>