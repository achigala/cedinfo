<?php

namespace frontend\models;

use Yii;
use \yii\web\UploadedFile;

/**
 * This is the model class for table "room".
 *
 * @property integer $news_id
 * @property string $news_img
 * @property string $news_des
 */
class News extends \yii\db\ActiveRecord
{
    public $upload_foler ='uploads/news_upload';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_des'], 'string', 'max' => 45],
            [['news_img'], 'file',
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
            'news_id' => 'ID',
            'news_img' => 'img',
            'news_des' => 'des',
        ];
    }
    public function upload($model,$attribute)
    {
    $news_img  = UploadedFile::getInstance($model, $attribute);
      $path = $this->getUploadPath();
    if ($this->validate() && $news_img !== null) 
        {

            $fileName = md5($news_img->baseName.time()) . '.' . $news_img->extension;
            //$fileName = $news_img->baseName . '.' . $news_img->extension;
            if($news_img->saveAs($path.$fileName))
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
          return empty($this->news_img) ? Yii::getAlias('@web').'/uploads/news_upload/none.PNG' : $this->getUploadUrl().$this->news_img;
    }
}
