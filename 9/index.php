<html>
    <head><title>School of Net - Formulários</title></head>
    <body>

        <?php if (!isset($_REQUEST['submit'])): ?>
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Exemplo de formulário</legend>

                    <label>Nome:<input type="text" name="nome"></label>
                    <label>Email:<input type="text" name="email"></label>
                    <label>Assunto:<input type="text" name="assunto"></label>
                    <label>Mensagem:<textarea name="mensagem"></textarea></label>
                </fieldset>

                <input type="submit" name="submit" value="Enviar">
            </form>
        <?php else: ?>
            <h1>Dados enviados com sucesso</h1>

            <?php
            $mensagem = "Dados enviados via formulário:\n\n";
            $mensagem.= "Nome" . $_REQUEST["nome"] . "\n";
            $mensagem.= "Email" . $_REQUEST["email"] . "\n";
            $mensagem.= "Assunto" . $_REQUEST["assunto"] . "\n";
            $mensagem.= "Mensagem" . $_REQUEST["mensagem"] . "\n";

            $para = "miilleramaral@gmail.com";
            $assunto = "Dados enviados via formulário";
            $header = "header: from:miilleramaral@gmail.com";

            @mail($to, $assunto, $mensagem, $header);
            ?>



            <!--            <h1>Dados enviados pelo formulário</h1>
                        <b>Nome:</b><?= $_REQUEST["nome"]; ?> <br/>
                        <b>Email:</b><?= $_REQUEST["email"]; ?> <br/>
                        <b>Assunto:</b><?= $_REQUEST["assunto"]; ?> <br/>
                        <b>Mensagem:</b><?= $_REQUEST["mensagem"]; ?> <br/>
                        <a href="index.php">Voltar</a>-->
        <?php endif; ?>
    </body>
</html>