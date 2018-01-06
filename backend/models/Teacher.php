<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $teacher_id
 * @property integer $prefix_id
 * @property string $teacher_name
 * @property string $teacher_lastname
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
    public $upload_foler ='uploads';
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
            [['prefix_id', 'room_id', 'position_id'], 'required'],
            [['prefix_id', 'room_id', 'active', 'position_id'], 'integer'],
            [['teacher_name', 'teacher_lastname', 'teacher_email', 'teacher_line', 'teacher_tel'], 'string', 'max' => 45],
            [['teacher_education','teacher_color'], 'string', 'max' => 255],
            [['teacher_name_en','teacher_lastname_en'], 'string', 'max' => 100],
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
            'teacher_id' => 'ID',
            'prefix_id' => 'คำนำหน้าชื่อ',
            'teacher_name' => 'ชื่อ',
            'teacher_lastname' => 'นามสกุล',
            'teacher_name_en' => 'Name',
            'teacher_lastname_en' => 'Lastname',
            'photo' => 'รูป',
            'teacher_email' => 'E-mail',
            'teacher_line' => 'line',
            'teacher_tel' => 'tel',
            'room_id' => 'ห้อง',
            'teacher_education' => 'การศึกษาสูงสุด',
            'active' => 'Active',
            'teacher_color'=>'ธีมสี',
            'position_id' => 'ตำแหน่ง',
            'fullname'=>'ชื่อ-สกุล',
        ];
    }

    public function getPrefix()
    {
        return $this->hasOne(Prefix::className(), ['prefix_id' => 'prefix_id']);
    }

    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);
    }

    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['position_id' => 'position_id']);
    }
    
     public function getLab()
    {
        return $this->hasMany(Position::className(), ['lab_id' => 'lab_id']);
    }

    public function getFullname(){

        return $this->prefix->prefix_name ." ".$this->teacher_name. " " .$this->teacher_lastname;
    }



    public function upload($model,$attribute)
    {
    $photo  = UploadedFile::getInstance($model, $attribute);
      $path = $this->getUploadPath();
    if ($this->validate() && $photo !== null) 
        {

            $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            //$fileName = $photo->baseName . '.' . $photo->extension;
            if($photo->saveAs($path.$fileName))
            {
              return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadPath()
    {
        return Yii::getAlias('@webroot').'/'.$this->upload_foler.'/';
    }

    public function getUploadUrl()
    {
        return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
    }

    public function getPhotoViewer()
    {
          return empty($this->photo) ? Yii::getAlias('@web').'/uploads/none.png' : $this->getUploadUrl().$this->photo;
    }
}
