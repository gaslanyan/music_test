<?php if (!empty($bio)): ?>

    <h2><?= $bio['name'] ?></h2>
    <h4><?= $bio['type']['name'] ?></h4>
    <h4>from: <?= $bio['country']['name'] ?></h4>
    <?php if (!empty($discs)): ?>
    <h3>Discs:</h3>
    <ul>
    <?php foreach ( $discs as  $index) :?>
            <li><?= $index['name'];?></li>
    <?php endforeach;?>
    </ul>
    <?php endif; ?>
<?php else: ?>
<?php endif; ?>


