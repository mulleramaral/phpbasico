<?php
session_start();

$login = "schoolofnet";
$senha = "123";

if ($login == "schoolofnet" and $senha = "123") {
    $_SESSION["logado"] = true;
    header("location: secreto.php");
} else {
    echo "Não logou";
}
?>