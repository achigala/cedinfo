<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "roomtype".
 *
 * @property integer $roomtype_id
 * @property string $roomtype_name
 */
class Roomtype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomtype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomtype_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roomtype_id' => 'ID',
            'roomtype_name' => 'ชื่อห้อง',
        ];
    }
}
