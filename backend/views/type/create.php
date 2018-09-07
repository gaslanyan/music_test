<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TypeLcp */

$this->title = Yii::t('app', 'Create Type Lcp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Lcps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-lcp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
