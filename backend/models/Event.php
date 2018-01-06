<?php

namespace backend\models;

use Yii;
use \yii\web\UploadedFile;

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
    public $upload_foler ='uploads/event';
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
            'event_title' => 'Event name',
            'photo' => 'Photo',
            'event_des' => 'Detail',
            'event_predes'=>'pre detail',
            'event_date' => 'event date',
            'event_time' => 'event time',
            'event_address' => 'event address',
            'active' => 'Active',
        ];
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
          return empty($this->photo) ? Yii::getAlias('@web').'/uploads/event/none.png' : $this->getUploadUrl().$this->photo;
    }

}
