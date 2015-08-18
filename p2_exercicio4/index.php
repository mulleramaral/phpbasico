<h1>Par ou impar</h1>

<?php

function mostraPareImpar() {
    $numeros = array(1, 7, 20, 34, 98, 56, 12, 67);
    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] % 2 == 0) {
            echo "O número " . $numeros[$i] . " é par. <br/>";
        } else {
            echo "O número " . $numeros[$i] . " é impar. <br/>";
        }
    }
}

mostraPareImpar();
?>
