<?php $pagina = "Estrutura" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>p1_exercicio3</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="empresa.php">Empresa</a></li>
                    <li><a href="localizacao.php">Localiza��o</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="faleconosco.php">Fale Conosco</a></li>
                </ul>
            </nav>
        </header>

        <hr/>


        <div>
            Aqui sera o conte�do da p�gina <?= $pagina ?>
        </div>

        <hr/>

        <footer>
            Usu�rio acessou a p�gina <?= $pagina ?>
        </footer>
    </body>
</html>