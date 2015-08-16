<html>
    <head><title>School of Net - Formulários</title></head>
    <body>
        
        <h1><?= $_POST["nome"];?></h1>
        
        <form action="index.php" method="post">
            <fieldset>
                <legend>Exemplo de formulário</legend>
                
                <label>Nome:<input type="text" name="nome" value="<?=$_POST["nome"]?>"></label>
            </fieldset>
            
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>