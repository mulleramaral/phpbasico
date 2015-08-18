<?php
session_start();
include_once './header.php';

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

$_SESSION["logado"] = true;
//unset($_SESSION["logado"]);
?>

<section class="conteudo">
    
    <h1>Área Restrita</h1>
    
    <?php if (isset($_SESSION["logado"])): ?>
    
    <ul>
        <li><a href="inserir.php">Inserir</a></li>
        <li><a href="listar.php">Listar Clientes</a></li>
    </ul>    
    
    <?php else: ?>  
    <ul>
        <li><a href="listar.php">Listar Clientes</a></li>
    </ul>
    <?php endif; ?>

</section>

<?php
include_once './footer.php';
?>