<?php
/* @var $this yii\web\View */
?>
<h1>Singers discs</h1>

<?php if (!empty($discs)): ?>
    <table>
        <?php foreach ($discs as $index) : ?>
<!--        --><?php //echo "<pre>"?>
<!--        --><?php //var_dump($index);?>
            <tr>
                <td><?= $index['name'] ?></td>
                <td><a href="<?= Yii::$app->homeUrl.'singers/bio/'.$index['singers']['name']?>"><?= $index['singers']['name'] ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
