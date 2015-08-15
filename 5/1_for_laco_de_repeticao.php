<?php
//
//for($i = 0;$i<100;$i++){
//    echo $i ."<br/>";
//}
?>

<h1>For usando echo </h1>
<ul>
    <?php
    for ($i = 0; $i < 5; $i++)
        echo '<li><a href="#' . $i . '">Home</a>';
    ?>
</ul>


<hr/>

<h2>For usando endfor e html</h2>
<ul>
    <?php for ($i = 0; $i < 5; $i++): ?>
        <li><a href="#<?= $i; ?>">Home</a></li>
    <?php endfor; ?>
</ul>