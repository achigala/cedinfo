<?php

namespace frontend\controllers;

use Yii;
use frontend\models\RoomType;
use frontend\models\Room;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class RoomController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex($roomtype_id)
    {
        $model = Room::find()->where(['roomtype_id' => $roomtype_id, 'active' => 1])->all();

        return $this->render('index',[
            'model' => $model
        ]);
    }
}
