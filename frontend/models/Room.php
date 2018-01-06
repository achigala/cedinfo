<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $room_id
 * @property string $room_name
 * @property string $room_photo
 * @property integer $active
 * @property integer $roomtype_id
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active', 'roomtype_id'], 'integer'],
            [['roomtype_id'], 'required'],
            [['room_name'], 'string', 'max' => 45],
            [['room_photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'ID',
            'room_name' => 'ชื่อห้อง',
            'room_photo' => 'รูปภาพ',
            'active' => 'Active',
            'roomtype_id' => 'ประเภทห้อง',
        ];
    }

    public function getRoomtype(){
        return $this->hasOne(Roomtype::className(), ['roomtype_id' => 'roomtype_id']);
    }
}
