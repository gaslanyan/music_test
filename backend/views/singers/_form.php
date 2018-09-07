<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\TypeLcp;
use common\models\Country;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Singers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="singers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(TypeLcp::find()->all(), 'id', 'name'), ['prompt' => 'select type']) ?>

    <?= $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(Country::find()->all(), 'id', 'name'), ['prompt' => 'select country'])  ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
