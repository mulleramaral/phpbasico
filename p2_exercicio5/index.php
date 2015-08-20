<?php
//gerando alunos
for ($i = 0; $i < 20; $i++) {
    $alunos[$i] = array(
        "nome" => "Aluno" . $i,
        "nota" => mt_rand(0, 10)
    );
}

//exibe Aprovados/Reprovados, tinha implementado em duas funções 
//pois pensei que era pra imprimir em duas listas
function verificaAlunos($alunos) {
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["nota"] >= 5) {
            echo "<li>O aluno " . $alunos[$i]["nome"] . " foi aprovado, nota: " . $alunos[$i]["nota"] . "</li>";
        } else {
            echo "<li>O aluno " . $alunos[$i]["nome"] . " foi reprovado,nota: " . $alunos[$i]["nota"] . "</li>";
        }
    }
}
?>

<h1>Alunos</h1>

<ul>
    <?php
    verificaAlunos($alunos);
    ?>
</ul>
<hr/>

