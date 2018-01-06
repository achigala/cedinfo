<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $subject_id
 * @property string $subject_code
 * @property string $subject_name
 * @property integer $active
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['subject_code'], 'string', 'max' => 50],
            [['subject_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'รหัส',
            'subject_code' => 'รหัสวิชา',
            'subject_name' => 'รายชื่อวิชา',
            'active' => 'Active',
        ];
    }

     public function getFullname(){

        return "(".$this->subject_code .") ".$this->subject_name;
    }
}
