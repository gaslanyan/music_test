<?php
/* @var $this yii\web\View */
?>
<h1>List of singers</h1>


<?php if (!empty($singers)): ?>
    <table>
        <?php foreach ($singers as $s):  ?>
            <tr>
                <td><a href="<?= Yii::$app->homeUrl.'singers/bio/'.$s['name']?>"><?= $s['name'] ?></a></td>
                <td><?= $s['type']['name'] ?></td>
                <td><?= $s['country']['name']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

