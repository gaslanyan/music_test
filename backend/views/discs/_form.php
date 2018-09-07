<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Singers;

/* @var $this yii\web\View */
/* @var $model common\models\Discs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'singers_id')->dropDownList(ArrayHelper::map(Singers::find()->all(), 'id', 'name'), ['prompt' => 'select singers']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
