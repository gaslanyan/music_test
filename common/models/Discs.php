<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "discs".
 *
 * @property int $id
 * @property string $name
 * @property int $singers_id
 *
 * @property Singers $singers
 */
class Discs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'singers_id'], 'required'],
            [['singers_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['singers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Singers::className(), 'targetAttribute' => ['singers_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'singers_id' => 'Singers',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSingers()
    {
        return $this->hasOne(Singers::className(), ['id' => 'singers_id']);
    }
}
