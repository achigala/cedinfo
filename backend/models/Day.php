<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "day".
 *
 * @property integer $day_id
 * @property string $day_name
 */
class Day extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'day';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'day_id' => 'Day ID',
            'day_name' => 'Day Name',
        ];
    }
}
