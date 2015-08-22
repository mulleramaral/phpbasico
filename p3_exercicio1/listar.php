<?php
include_once './header.php';

$clientes = isset($_COOKIE['clientes']) ? unserialize($_COOKIE['clientes']) : "";
?>

<section class="conteudo">
    <?php if (count($clientes) == 0): ?>
        <p>Nenhum cliente cadastrado</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($clientes); $i++): ?>
                    <tr>
                        <td><?= $clientes[$i]['codigo']; ?></td>
                        <td><?= $clientes[$i]['nome']; ?></td>
                        <td><?= $clientes[$i]['email'];?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>

<?php
include_once './footer.php';
?>