<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class NewsController extends Controller
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
     * Lists all Room models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Room model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model=News::find()->where(['news_id' => $id])->one();
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Room model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
        {
            $model = new News();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->news_img = $model->upload($model,'news_img');
                $model->save();
                return $this->redirect(['index', 'id' => $model->news_id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

    public function actionUpdate($id)
        {
            $model=News::find()->where(['news_id' => $id])->one();
            
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->news_img = $model->upload($model,'news_img');
                $model->save();
                return $this->redirect(['index', 'id' => $model->news_id]);
            }  else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }

    /**
     * Deletes an existing Room model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Room model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Room the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
}
