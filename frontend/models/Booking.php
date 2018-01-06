<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property integer $booking_id
 * @property integer $room_id
 * @property integer $day_id
 * @property string $booking_date
 * @property string $time_start
 * @property string $time_end
 * @property integer $stu_id
 * @property string $stu_name
 * @property string $stu_lastname
 * @property string $booking_detail
 * @property integer $booking_count
 * @property integer $status
 * @property integer $active
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['room_id', 'day_id'], 'required'],
            [['room_id', 'day_id', 'stu_id', 'booking_count', 'status', 'active'], 'integer'],
            [['booking_date', 'time_start', 'time_end'], 'safe'],
            [['stu_name', 'stu_lastname'], 'string', 'max' => 45],
            [['booking_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'booking_id' => 'ID',
            'room_id' => 'ห้องเรียนที่เลือก',
            'day_id' => 'วัน',
            'booking_date' => 'วันที่',
            'time_start' => 'เวลาเริ่มใช้ห้อง',
            'time_end' => 'เวลาที่สิ้นสุดใช้ห้อง',
            'stu_id' => 'รหัสนักศึกษา',
            'stu_name' => 'ชื่อนักศึกษา',
            'stu_lastname' => 'นามสกุลนักศึกษา',
            'booking_detail' => 'รายละเอียดการจอง',
            'booking_count' => 'จำนวนผู้เข้าใช้',
            'status' => 'สถานะ',
            'active' => 'Active',
        ];
    }


    public function getRoom(){
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);
    }

    public function getDay(){
        return $this->hasOne(Day::className(), ['day_id' => 'day_id']);
    }

    public function getStatus_text(){
        if($this->status==1)
            $status_text = "รออนุมัติ";
            else if($this->status==2)
            $status_text = "อนุมัติ";
            else if($this->status==3)
            $status_text = "ไม่อนุมัติ";
        return $status_text;
    }
}
