<?php
session_start();
include_once './header.php';

if(!isset($_COOKIE["clientes"])){
    $clientes = [];
    setcookie("clientes",  serialize($clientes));
}

echo "<br/>";
?>

<section class="conteudo">
    Seja bem vindo
</section>

<?php
include_once './footer.php';
?>