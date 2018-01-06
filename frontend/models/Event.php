<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $event_id
 * @property string $event_title
 * @property string $photo
 * @property string $event_des
 * @property string $event_date
 * @property integer $active
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
        public function rules()
    {
        return [
            [['event_date'], 'required'],
            [['event_des'], 'string'],
            [['event_date','event_time'], 'safe'],
            [['active'], 'integer'],
            [['event_title'], 'string', 'max' => 255],
            [['event_predes'], 'string', 'max' => 50],
            [['event_address'], 'string', 'max' => 150],
            [['photo'], 'file',
                'skipOnEmpty' => true,
                'on'=>'update',
                'extensions' => 'png,jpg,gif',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'ID',
            'event_title' => 'ชื่อกิจกรรม',
            'photo' => 'Photo',
            'event_des' => 'คำอธิบาย',
            'event_predes'=>'คำอธิบายย่อ',
            'event_date' => 'วันที่จัดกิจกรรม',
            'event_time' => 'เวลาที่จัดกิจกรรม',
            'event_address' => 'สถานที่จัดกิจกรรม',
            'active' => 'Active',
        ];
    }
}
