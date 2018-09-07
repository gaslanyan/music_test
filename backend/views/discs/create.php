<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Discs */

$this->title = Yii::t('app', 'Create Discs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Discs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
