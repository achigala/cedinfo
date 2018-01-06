<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
  <div class="box-header with-border">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-md-12">
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> เพิ่มอาจารย์', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
       <!--  <?= Html::button('testing for future', ['value'=>Url::to('subject/create'), 'class' => 'btn btn-success', 
            'id'=>'modalButton']) ?> -->

        </div>
    <div class="box-tools pull-right">
      <!-- <span class="label label-primary">Label</span> -->
    </div>
  </div>
  <div class="box-body">
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'options' => [
                'class' => 'table-responsive',
            ],

            'tableOptions' => [
                'class' => 'table table-striped',
            ],
            'columns' => [
                [
                    'header' => 'ลำดับ',
                    'headerOptions' => [
                        'class' => 'text-center',
                        'style' => 'width:50px;'
                    ],
                    'contentOptions' => [
                        'class' => 'text-center',
                    ],
                    'class' => 'yii\grid\SerialColumn'
                ],


            //'subject_id',
            'subject_code',

            [
                'attribute' => 'subject_name',
            ],
            [
                'attribute' => 'active',
                'filter' => [0 => 'Inactive', 1 => 'Active'],//กำหนด filter แบบ dropDownlist จากข้อมูล array
                'format' => 'raw',
                'value' => function($model, $key, $index, $column)
                {
                    return $model->active == 0 ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-success">Active</span>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
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

