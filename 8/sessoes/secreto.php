<?php
session_start();
?>

<?php if (isset($_SESSION['logado'])): ?>
    <h1>Você esta vendo uma pagina secreta</h1>
    <p>O resultado da megasena é: 123456</p>
    
    <a href="logout.php">Logout(sair)</a>
<?php else: ?>
    <h1>Meu amigo,você tem que estar logado para ver essa pagina.</h1>
<?php endif;?>

    

