<?php

function fibo($numero){
    if($numero < 2){
        return $numero;
    }else{
        return fibo($numero -1) + fibo($numero - 2);
    }
}
?>

<h1>Fibonacci ate 100</h1>
<ul>
    <?php for($i = 0;$i< 100;$i++): ?>
    <li>Número: <?=$i; echo " - " . fibo($i) ;?> </li>
    <?php endfor; ?>
</ul>
