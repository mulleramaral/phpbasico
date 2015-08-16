<?php

//gerando alunos

$alunos [] = null;

for ($i = 0; $i < 20; $i++) {
    $alunos[$i] = array(
        "nome" => "Aluno" . $i,
        "nota" => mt_rand(0, 10)
    );
}

function aprovados($alunos) {
    $aprovados[] = null;
    $a = 0;
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["nota"] >= 5) {
            $aprovados[$a] = $alunos[$i];
            $a++;
        }
    }
    return $aprovados;
}

function reprovados($alunos) {
    $reprovados[] = null;
    $a = 0;
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["nota"] < 5) {
            $reprovados[$a] = $alunos[$i];
            $a++;
        }
    }
    return $reprovados;
}
?>

<h1>Aprovados - Notas maior ou igual a 5</h1>

<ul>
    <?php
    $aprovados = aprovados($alunos);
    for ($i = 0; $i < count($aprovados); $i++):
        ?>
        <li><?= $aprovados[$i]["nome"] . " - " . $aprovados[$i]["nota"] ?></li>
    <?php endfor; ?>
</ul>

<hr/>


<h1>Reprovados - Notas menor que 5</h1>

<ul>
    <?php
    $reprovados = reprovados($alunos);
    for ($i = 0; $i < count($reprovados); $i++):
        ?>
        <li><?= $reprovados[$i]["nome"] . " - " . $reprovados[$i]["nota"] ?></li>
    <?php endfor; ?>
</ul>

