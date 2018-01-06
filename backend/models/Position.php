<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $position_id
 * @property string $position_name
 * @property integer $active
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_name'], 'required'],
            [['active'], 'integer'],
            [['position_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
            'active' => 'Active',
        ];
    }
}
