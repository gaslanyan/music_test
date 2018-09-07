<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "singers".
 *
 * @property string $id
 * @property string $name
 * @property int $type_id
 * @property int $country_id
 *
 * @property Country $country
 * @property TypeLcp $type
 */
class Singers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'singers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type_id', 'country_id'], 'required'],
            [['type_id', 'country_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeLcp::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'type_id' => 'Type ID',
            'country_id' => 'Country ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(TypeLcp::className(), ['id' => 'type_id']);
    }
}
