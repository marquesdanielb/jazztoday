<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>::JazzToday::</title>
        <link rel="stylesheet" href="../assets/reset.css">
        <link rel="stylesheet" href="../assets/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="caixa">
                <img src="assets/imagens/logo.png" alt="Logo do site">
                <h1>TODAY</h1>
                <nav>   
                    <ul>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="template_noticias.php">Notícias</a></li>
                        <li><a href="festivais.php">Festivais</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="container">
            <h1>Os dez melhores albuns de Jazz</h1>
            <?php foreach($artigos as $artigo) : ?>
            <h2>
                <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                    <?php echo $artigo['titulo']; ?>
                </a>
            </h2>
            <p>
                <?php echo nl2br($artigo['conteudo']); ?>
            </p>
            <?php endforeach; ?>
        </div>
        <footer>
            <div class="caixa-footer">
                <img src="assets/imagens/footer-logo.png" alt="Logo do rodapé">
                <p>JazzToday&reg; - Todos os direitos reservados &copy; </p>
            </div>
        </footer>
    </body>
</html>