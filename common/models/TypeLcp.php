<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_lcp".
 *
 * @property int $id
 * @property string $name
 *
 * @property Singers[] $singers
 */
class TypeLcp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_lcp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 30],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSingers()
    {
        return $this->hasMany(Singers::className(), ['type_id' => 'id']);
    }
}
