<?php
session_start();
$clientes = isset($_COOKIE["clientes"]) ? unserialize($_COOKIE["clientes"]) : "";

$usuarios = array(
    array(
        "usuario" => "miiller",
        "senha" => "miiller"
    ),
    array(
        "usuario" => "wesley",
        "senha" => "school"
    )
);

// Validação de Usuario
function validaUsuario($usuarios) {
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["usuario"] == $_POST["usuario"] && $usuario["senha"] == $_POST["senha"]) {
            $_SESSION["logado"] = true;
            $_SESSION["usuario"] = $_POST["usuario"];
            header("location: inserir.php");
        } else {
            $usuario = False;
        }
    }
    if ($usuario == false) {
        echo "<p>Usuario ou senha inválidos</p>";
    } else {
        echo "usuario logado";
    }
}

//Sair
if (isset($_GET["sair"])) {
    unset($_SESSION["logado"]);
    header("location:index.php");
}

//Gravando
if (isset($_POST['codigo']) && isset($_POST['nome'])) {

    $clientes[] = array(
        "codigo" => $_POST['codigo'],
        "nome" => $_POST['nome'],
        "email" => $_POST['email']
    );

    setcookie("clientes",serialize($clientes));
}
?>

<?php include_once 'header.php';?>

<?php if (!isset($_SESSION["logado"])): ?>
    <form action="inserir.php" method="POST">
        <h2>Efetuar Login</h2>
        <fieldset>
            <legend>
                Efetuar login
            </legend>
            <label>Usuario: <input type="text" name="usuario"></label>
            <label>Senha: <input type="password" name="senha"></label>
        </fieldset>

        <br/>
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php else: ?>

     <p>Seja bem Vindo <?= $_SESSION["usuario"] ?></p>
    <h1>Inserindo clientes</h1>

    
    <form action="inserir.php" method="post">
        <fieldset>
            <legend>Inserir Cliente</legend>
            <label>Código: <input type="text" name="codigo"></label>
            <label>Nome: <input type="text" name="nome"></label>
            <label>Email: <input type="email" name="email"></label>
        </fieldset>
        <br/>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <a href="?sair=''">Sair</a>
<?php
endif;

//Chamando Validação do usuario
if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
    validaUsuario($usuarios);
}


include_once 'footer.php';

    
