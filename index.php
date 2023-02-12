<!DOCTYPE php>
<?php

    $title = "Sonic - O Filme";



?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/responsivo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="fundo-video">
        <video class="video" autoplay loop muted>
            <source src="./src/video/video-sonic.mp4" type="video/mp4">
        </video>
    </div>
    <header class="cabecalho">
        <a><img class="logo" src="./src/imagens/Sonic-Logo.png" alt="Imagem do titulo"></a>
        <nav>
            <ul class="menu">
                <li><a href="./index.html">Home</a></li>
                <li><a href="#">Detalhes</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="informacoes">
            <img class="imagem-titulo" src="./src/imagens/titulo.png" alt="Imagem do titulo">
            <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error id obcaecati, assumenda deleniti, beatae at, minus ipsa aliquam soluta aperiam quam nulla? Nemo ex fugit ab illum id quae placeat?</p>
            <button class="botao-trailer">Veja o trailer</button>
        </div>
        <img class="sonic" src="./src/imagens/sonic.png" alt="Imagem do Sonic">
    </main>
</body>
</html>