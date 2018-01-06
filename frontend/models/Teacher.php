<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $teacher_id
 * @property integer $prefix_id
 * @property integer $lab_id
 * @property string $teacher_name
 * @property string $teacher_lastname
 * @property integer $position_id
 * @property string $photo
 * @property string $teacher_email
 * @property string $teacher_line
 * @property string $teacher_tel
 * @property integer $room_id
 * @property string $teacher_education
 * @property integer $active
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prefix_id', 'position_id', 'room_id'], 'required'],
            [['prefix_id', 'position_id', 'room_id', 'active'], 'integer'],
            [['teacher_name', 'teacher_lastname', 'teacher_email', 'teacher_line', 'teacher_tel'], 'string', 'max' => 45],
            [['teacher_education','teacher_color'], 'string', 'max' => 255],
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
            'teacher_id' => 'Teacher ID',
            'prefix_id' => 'Prefix ID',
            'teacher_name' => 'Teacher Name',
            'teacher_lastname' => 'Teacher Lastname',
            'position_id' => 'Position ID',
            'photo' => 'Photo',
            'teacher_email' => 'Teacher Email',
            'teacher_line' => 'Teacher Line',
            'teacher_tel' => 'Teacher Tel',
            'room_id' => 'Room ID',
            'teacher_color'=>'Color theme',
            'teacher_education' => 'Teacher Education',
            'active' => 'Active',
        ];
    }

    public function getColorname_custom()
    {
        $colortheme ="";
        if ($this->teacher_color == "#f44336")
            $colortheme="Red";
        else if ($this->teacher_color == "#e91e63")
            $colortheme="Pink";
        else if ($this->teacher_color == "#9c27b0")
            $colortheme="Purple";
        else if ($this->teacher_color == "#673ab7")
             $colortheme="Deep-Purple";
        else if ($this->teacher_color == "#3f51b5")
             $colortheme="Indigo";
        else if ($this->teacher_color == "#2196f3")
            $colortheme="Blue";
        else if ($this->teacher_color == "#03a9f4")
            $colortheme="Light-Blue";
        else if ($this->teacher_color == "#00bcd4")
            $colortheme="Cyan";
        else if ($this->teacher_color == "#009688")
            $colortheme="Teal";
        else if ($this->teacher_color == "#4caf50")
            $colortheme="Green";
        else if ($this->teacher_color == "#8bc34a")
            $colortheme="Light-Green";
        else if ($this->teacher_color == "#cddc39")
            $colortheme="Lime";
        else if ($this->teacher_color == "#ffbb3b")
            $colortheme="Yellow";
        else if ($this->teacher_color == "#ffc107")
            $colortheme="Amber";
        else if ($this->teacher_color == "#ff9800")
            $colortheme="Orange";
        else if ($this->teacher_color == "#ff5722")
            $colortheme="Deep-Orange";
        else if ($this->teacher_color == "#795548")
            $colortheme="Brown";
        else if ($this->teacher_color == "#9e9e9e")
            $colortheme="Grey";
        else if ($this->teacher_color == "#607d8b")
            $colortheme="Blue-Grey";


        return $colortheme;
    }

    public function getPrefix()
    {
        return $this->hasOne(Prefix::className(), ['prefix_id' => 'prefix_id']);
    }

     public function getLab()
    {
        return $this->hasMany(Lab::className(), ['teacher_id' => 'teacher_id']);
    }

    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);
    }

    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['position_id' => 'position_id']);
    }


    public function getFullname(){

        return $this->prefix->prefix_name ." ".$this->teacher_name. " " .$this->teacher_lastname;
    }
}
