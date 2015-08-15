
<h1>While com echo</h1>

<?php
$i = 0;
while ($i <= 10) {
    echo $i . '<br/>';
    $i++;
}

?>


<h2>Whille com html e endwhile</h2>

<?php $i = 0;
    while ($i <= 10): ?>
    Esse é o valor de $i: <?=$i; ?> <br/>
<?php $i++;
endwhile; ?>
