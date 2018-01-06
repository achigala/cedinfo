<?php

namespace frontend\models;

use Yii;

class Day extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'day';
    }

    public function rules()
    {
        return [
            [['day_name'], 'string', 'max' => 45],
        ];
    }

    public function attributeLabels()
    {
        return [
            'day_id' => 'Day ID',
            'day_name' => 'Day Name',
        ];
    }
}
