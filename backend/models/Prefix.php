<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prefix".
 *
 * @property integer $prefix_id
 * @property string $prefix_name
 */
class Prefix extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prefix';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prefix_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prefix_id' => 'Prefix ID',
            'prefix_name' => 'คำนำหน้าชื่อ',
        ];
    }
}
