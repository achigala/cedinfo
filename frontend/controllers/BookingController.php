<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Booking;
use frontend\models\Room;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class BookingController extends Controller
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

    public function actionIndex($room_id)
    {
        $model = Booking::find()->where(['room_id' => $room_id, 'active' => 1])->orderBy(['booking_date' => 'SORT_ASC'])->all();

        $room = Room::find()->where(['room_id' => $room_id])->one();

        return $this->render('index',[
            'model' => $model,
            'room' => $room,
        ]);
    }

    public function actionBookroom($room_id)
    {

        $model = new Booking();
        $room = Room::find()->where(['room_id' => $room_id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index','room_id' => $room->room_id]);
        } else {
            return $this->render('bookroom',[
                'model' => $model,
                'room' => $room,
                //'status_text'=>$status_text,
            ]);
        }
    }
}
