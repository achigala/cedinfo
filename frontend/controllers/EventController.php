<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Event;
use frontend\models\EventSecrch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventController implements the CRUD actions for Event model.
 */
class EventController extends Controller
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

    /**
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Event();
        $jan = Event::find()->where(['MONTH(event_date)'=>'01','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $feb = Event::find()->where(['MONTH(event_date)'=>'02','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $mar = Event::find()->where(['MONTH(event_date)'=>'03','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $apr = Event::find()->where(['MONTH(event_date)'=>'04','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $may = Event::find()->where(['MONTH(event_date)'=>'05','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $jun = Event::find()->where(['MONTH(event_date)'=>'06','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $jul = Event::find()->where(['MONTH(event_date)'=>'07','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $aug = Event::find()->where(['MONTH(event_date)'=>'08','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $sep = Event::find()->where(['MONTH(event_date)'=>'09','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $oct = Event::find()->where(['MONTH(event_date)'=>'10','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $nov = Event::find()->where(['MONTH(event_date)'=>'11','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();
        $dec = Event::find()->where(['MONTH(event_date)'=>'12','active' => 1])
        ->orderBy(['event_date' => SORT_ASC])->all();

         return $this->render('index',[
            'model' => $model,
            'jan'=>$jan,
            'feb'=>$feb,
            'mar'=>$mar,
            'apr'=>$apr,
            'may'=>$may,
            'jun'=>$jun,
            'jul'=>$jul,
            'aug'=>$aug,
            'sep'=>$sep,
            'oct'=>$oct,
            'nov'=>$nov,
            'dec'=>$dec,
        ]);
    }

    public function actionPage($event_id)
    {
        
        $event = Event::find()->where(['event_id' => $event_id])->one();

        return $this->render('page',[
            //'model' => $model,
            'event' => $event,

        ]);
    }

}
