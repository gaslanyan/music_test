<?php

namespace frontend\controllers;

use common\models\Discs;

class DiscsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $discs = Discs::find()->joinWith('singers')->asArray()->all();

        return $this->render('index', ['discs' => $discs]);
    }

}
