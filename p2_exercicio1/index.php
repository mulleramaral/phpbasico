<?php
$numeros = array(1, 7, 20, 34, 98, 56, 12, 67);

function parOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}
?>

<h1>Par ou impar</h1>

<?php for ($i = 0; $i < count($numeros); $i++): ?>
    O número <?= $numeros[$i] ?> é <?= parOuImpar($numeros[$i]) ?> <br/>
<?php endfor; ?>
