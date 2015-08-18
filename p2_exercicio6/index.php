<?php

//random
function randomFloat($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

$alunos = [];

//gerando alunos
for ($i = 0; $i < 20; $i++) {
    $altura = 0;
    $alunos[$i] = array(
        "matricula" => $i + 1000,
        "nome" => "Aluno" . $i,
        "altura" => randomFloat(0, 2)
    );
}

function mostra5AlunosAltos($alunos) {
    foreach ($alunos as $indice => $aluno) {
        $altura[$indice] = $aluno["altura"];
    }

    array_multisort($altura, SORT_DESC, $alunos);
    for ($i = 0; $i < 5; $i++) {
        echo "<li>Matricula: " . $alunos[$i]["matricula"] . " - Altura: " . $alunos[$i]["altura"] . " </li>";
    }
}

//Comparação
//function cmp($a, $b) {
//    if ($a == $b) {
//        return 0;
//    }
//    return $a["altura"] < $b["altura"];
//}
//Ordenação
//usort($alunos, 'cmp');
?>

<h1>5 Alunos mais altos da turma</h1>

<ul>
    <?php mostra5AlunosAltos($alunos); ?>
</ul>
