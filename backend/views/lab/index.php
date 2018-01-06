<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
  <div class="box-header with-border">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-md-12">
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> เพิ่มตารางสอนอาจารย์', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
       <!--  <?= Html::button('testing for future', ['value'=>Url::to('teacher/create'), 'class' => 'btn btn-success', 
            'id'=>'modalButton']) ?> -->

        </div>
    <div class="box-tools pull-right">
      <!-- <span class="label label-primary">Label</span> -->
    </div>
  </div>
  <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'options' => [
                'class' => 'table-responsive',
            ],

            'tableOptions' => [
                'class' => 'table table-striped',
            ],
            'columns' => [
                [
                    'header' => '#',
                    'headerOptions' => [
                        'class' => 'text-center',
                        'style' => 'width:50px;'
                    ],
                    'contentOptions' => [
                        'class' => 'text-center',
                    ],
                    'class' => 'yii\grid\SerialColumn'
                ],

            //'lab_id',
            'teacher_id',
            [
                'attribute' => 'teacher_id',
                'value' => function($data)
                {
                     return $data->teacher->fullname;
                }
            ],
            'day_id',
            'subject_id',
            'time_start',
            'time_end',
            'room_id',
            [
                'attribute' => 'active',
                'filter' => [0 => 'Inactive', 1 => 'Active'],//array list
                'format' => 'raw',
                'value' => function($model, $key, $index, $column)
                {
                    return $model->active == 0 ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-success">Active</span>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'Management',
            'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group">{copy} {view} {update} {delete} </div>',
              'options'=> ['style'=>'width:150px;'],],
            ],
        ]); ?>
  </div>
  <div class="box-footer text-center">
   Copyright © ภาควิชาคอมพิวเตอร์ศึกษา มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ 
  </div>
</div>
<!-- /.box -->
