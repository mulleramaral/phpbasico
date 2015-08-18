<?php

//gerando alunos
for ($i = 0; $i < 20; $i++) {
    $alunos[$i] = array(
        "nome" => "Aluno" . $i,
        "nota" => mt_rand(0, 10)
    );
}

//exibe Aprovados
function aprovados($alunos) {
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["nota"] >= 5) {
            echo "<li>O aluno " . $alunos[$i]["nome"] . " foi aprovado, nota: " . $alunos[$i]["nota"] ."</li>";
        }
    }
}

//Exibe Reprovados
function reprovados($alunos) {
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["nota"] < 5) {
            echo "<li>O aluno " . $alunos[$i]["nome"] . " foi reprovado, nota: " . $alunos[$i]["nota"] ."</li>";
        }
    }
}
?>

<h1>Aprovados - Notas maior ou igual a 5</h1>

<ul>
    <?php
    aprovados($alunos);
    ?>
</ul>
<hr/>


<h1>Reprovados - Notas menor que 5</h1>
<ul>
<?php
    reprovados($alunos);
?>
</ul>

