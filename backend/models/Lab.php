<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property integer $lab_id
 * @property integer $teacher_id
 * @property integer $day_id
 * @property string $subject_id
 * @property string $time_start
 * @property string $time_end
 * @property integer $room_id
 * @property integer $active
 */
class Lab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id', 'day_id', 'room_id', 'active'], 'integer'],
            [['time_start', 'time_end'], 'safe'],
            [['subject_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lab_id' => 'Lab ID',
            'teacher_id' => 'Teacher',
            'day_id' => 'Day',
            'subject_id' => 'Subject',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'room_id' => 'Room',
            'active' => 'Active',
        ];
    }

    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['teacher_id' => 'teacher_id']);
    }

    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['subject_id' => 'subject_id']);
    }

     public function getDay()
    {
        return $this->hasOne(Day::className(), ['day_id' => 'day_id']);
    }

    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);
    }
}
