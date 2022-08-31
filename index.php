<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>::JazzToday::</title>
        <link rel="stylesheet" href="assets/reset.css">
        <link rel="stylesheet" href="assets/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>    
    <body>
        <header>
            <div class="caixa">
                <img src="assets/imagens/logo.png" alt="Logo do site">
                <h1>TODAY</h1>
                <nav>   
                    <ul>
                        <li><a href="views/sobre.php">Sobre</a></li>
                        <li><a href="views/noticias.php">Notícias</a></li>
                        <li><a href="views/festivais.php">Festivais</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>  
            <div class="painel-imagens">
                    <img src="assets/imagens/john.jpg" 
                    alt="John Coltrane" 
                    title="John Coltrane" width="30%" height="600">
                    
                    <img src="assets/imagens/duke.jpg" alt="Duke Ellington"  
                    width="30%" height="600" 
                    title="Duke Ellington">
                    
                    <img src="assets/imagens/mingus.jpg" alt="Charles Mingus" 
                    width="30%" height="600"
                    title="Charles Mingus">
            </div>
            <div class="artigos">
                <article>
                    <h2>Um pouco de história</h2>
                        Jazz é uma manifestação artístico-musical 
                        originária de comunidades de Nova Orleães, 
                        nos Estados Unidos. Tal manifestação teria surgido 
                        por volta do final do século XIX na região
                        de Nova Orleães, tendo origem na cultura popular 
                        e na criatividade das comunidades negras que ali viviam, 
                        um de seus espaços de desenvolvimento mais importantes. 
                </article>
                <article>
                    <h2>Alguns dos principais nomes do Jazz</h2>
                        Durante alguns anos o jazz se tornou a música 
                        popular. Esse período é compreendido entre o fim
                        dos anos 30's até o início dos anos 70's. Alguns
                        dos grandes nomes do Jazz como <a href="https://pt.wikipedia.org/wiki/John_Coltrane">
                        John Coltrane</a>, <a href="https://pt.wikipedia.org/wiki/Duke_Ellington">
                        Duke Ellington</a> e <a href="https://pt.wikipedia.org/wiki/Charles_Mingus">
                        Charles Mingus</a>. Cada um representa um período e um jeito
                        de se tocar Jazz.
                </article>
            </div>
            <div class="caixa-mensagem">
                <form>
                    <h3>Estamos ansiosos para saber sua opinião:</h3>
                    <textarea name="comentario" cols="60" rows="10">Deixe aqui sua opinião...</textarea><br />
                    <input type="submit" id="mensagem" value="Enviar" class="botao">
                </form>
            </div>
        </main>
        <footer>
            <div class="caixa-footer">
                <img src="assets/imagens/footer-logo.png" alt="Logo do rodapé">
                <p>JazzToday&reg; - Todos os direitos reservados &copy; </p>
            </div>
        </footer>
    </body>
</html>