<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property integer $email_id
 * @property integer $teacher_id
 * @property string $std_name
 * @property string $std_lastname
 * @property integer $std_id
 * @property string $email_subject
 * @property string $email_detail
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id', 'std_name', 'std_lastname', 'std_id'], 'required'],
            [['teacher_id', 'std_id'], 'integer'],
            [['std_name', 'std_lastname', 'email_subject'], 'string', 'max' => 45],
            [['email_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_id' => 'ID',
            'teacher_id' => 'ผู้รับ',
            'std_name' => 'ชื่อผู้ส่ง',
            'std_lastname' => 'นามสกุลผู้ส่ง',
            'std_id' => 'รหัสนักศึกษา',
            'email_subject' => 'เรื่อง',
            'email_detail' => 'รายละเอียด',
        ];
    }
}
