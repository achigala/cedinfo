<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Lab;
use frontend\models\LabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Day;
use frontend\models\Teacher;
use yii\helpers\ArrayHelper;
/**
 * LabController implements the CRUD actions for Lab model.
 */
class LabController extends Controller
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
     * Lists all Lab models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Lab();
        $teacher = $_GET['teacher'];
        
        $day = Day::find()->orderBy(['day_id' => SORT_ASC])->all();

        $lab = Lab::find()->where(['teacher_id' => $teacher, 'active' => 1])->orderBy(['day_id' => SORT_ASC, 'time_start' => SORT_ASC])->all();

        $items = ArrayHelper::map(Lab::find()->all(), 'teacher_id', 'teacher_fullname');

        return $this->render('index', [
            'model'=>$model,
            'items'=> $items,
            'day' => $day,
            'lab' => $lab,
            'teacher' => $teacher,
        ]);
    }




}
