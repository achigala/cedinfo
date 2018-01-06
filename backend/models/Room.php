<?php

namespace backend\models;

use Yii;
use \yii\web\UploadedFile;

/**
 * This is the model class for table "room".
 *
 * @property integer $room_id
 * @property string $room_name
 * @property string photo
 * @property integer $active
 * @property integer $roomtype_id
 */
class Room extends \yii\db\ActiveRecord
{
    public $upload_foler ='uploads';
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
            'room_id' => 'ID',
            'room_name' => 'ชื่อห้อง',
            'photo' => 'รูปภาพ',
            'active' => 'Active',
            'roomtype_id' => 'ประเภทห้อง',
        ];
    }

    public function getRoomtype(){
        return $this->hasOne(Roomtype::className(), ['roomtype_id' => 'roomtype_id']);
    }

    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['room_id' => 'room_id']);
    }


    public function upload($model,$attribute)
    {
    $photo  = UploadedFile::getInstance($model, $attribute);
      $path = $this->getUploadPath();
    if ($this->validate() && $photo !== null) 
        {

            $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            //$fileName = photo->baseName . '.' . photo->extension;
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
