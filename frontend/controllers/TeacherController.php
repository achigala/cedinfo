<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Teacher;
use frontend\models\Lab;
use frontend\models\TeacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeacherController implements the CRUD actions for Teacher model.
 */
class TeacherController extends Controller {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
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
	 * Lists all Teacher models.
	 * @return mixed
	 */
	public function actionIndex() {
		if (date("l") == "Monday")
			$currentday = 1;
		else if (date("l") == "Tuesday")
			$currentday = 2;
		else if (date("l") == "Wednesday")
			$currentday = 3;
		else if (date("l") == "Thursday")
			$currentday = 4;
		else if (date("l") == "Friday")
			$currentday = 5;
		else if (date("l") == "Saturday")
			$currentday = 6;
		else if (date("l") == "Sunday")
			$currentday = 7;
		$model = Teacher::find()->all();
		date_default_timezone_set("Asia/Bangkok");
		$current_time = date("H:i:s");

        $teach = Lab::find()
        ->where(['active' => 1])
        ->andWhere('day_id = :currentday', [':currentday' => $currentday])
        ->andWhere('time_start <= :current_time', [':current_time' => $current_time])
        ->andWhere('time_end >= :current_time', [':current_time' => $current_time])
        ->orderBy(['day_id' => SORT_ASC, 'time_start' => SORT_ASC])
        ->groupBy(['teacher_id'])
        ->all();

        $lab = Lab::find()
        ->where(['active' => 1])
        ->andWhere('day_id <> :currentday', [':currentday' => $currentday])
        ->andWhere('time_start < :current_time', [':current_time' => $current_time] )
//        ->andWhere('time_end <= :current_time', [':current_time' => $current_time])
        ->orderBy(['day_id' => SORT_ASC, 'time_start' => SORT_ASC])
        ->groupBy(['teacher_id'])
        ->one();
        
		$teacher =new Teacher();

		//$testtime = $lab->time_end;

		return $this->render('index', [
				'model' => $model,
				'currentday' => $currentday,
				'current_time' => $current_time,
				'lab'=>$lab,
				'teacher'=>$teacher,
				'teach'=>$teach,
		]);
	}

	public function actionIndex2() {

		return $this->render('index2');
	}

	public function actionProfile($teacher_id) {
		$model = Teacher::find()->where(['teacher_id' => $teacher_id])->all();

		return $this->render('profile', [
				'model' => $model
		]);
	}

}
