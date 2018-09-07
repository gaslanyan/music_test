<?php

namespace frontend\controllers;

use common\models\Discs;
use common\models\Singers;

class SingersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $singers = Singers::find()
            ->joinWith('country')
            ->joinWith('type')
            ->asArray()
            ->all();

        return $this->render('index', ['singers' => $singers]);
    }

    public function actionBio()
    {
        $name = \Yii::$app->request->get('name');
        $bio = Singers::find()->where(['singers.name' => $name])
            ->joinWith('country as c')
            ->joinWith('type as t')
            ->asArray()
            ->one();
        $id = $bio['id'];
        $discs = Discs::find()->where(['singers_id' => $id])
            ->asArray()
            ->all();
        var_dump($discs);
        return $this->render('bio', ['bio' => $bio,
            'discs' => $discs]);

    }

}
