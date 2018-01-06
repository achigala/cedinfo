<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\helpers\json;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
  <div class="box-header with-border">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-md-12">
        <!--<?= Html::a('<span class="glyphicon glyphicon-plus"></span> เพิ่มอาจารย์', ['create'], ['class' => 'btn btn-success btn-lg']) ?>-->
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

            //'booking_id',
            //'stu_id',
            'stu_name',
            'booking_date',
            [
                'attribute' => 'room_id',
                'value' => function($data)
                {
                     return $data->room->room_name;
                }
            ],
            //'room_id',
            //'day_id',
            'time_start',
            'time_end',
            // 'stu_lastname',
            'booking_detail',
            'booking_count',
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'status',
                'value' => function($data)
                    {
                         return $data->status_text;
                    },
                'editableOptions'=> [
                //'header' => 'profile',
                //'format' => Editable::FORMAT_BUTTON,
                'inputType' => Editable::INPUT_DROPDOWN_LIST,
                'data' => [1 => 'รออนุมัติ', 2 => 'อนุมัติ', 3 => 'ไม่อนุมัติ'],
                'options' => ['class'=>'form-control', 'prompt'=>'Select status...'],
                'displayValueConfig'=> [
                    '1' => '<i class="glyphicon glyphicon-hourglass"></i> รออนุมัติ',
                    '2' => '<i class="glyphicon glyphicon-thumbs-up"></i> อนุมัติ',
                    '3' => '<i class="glyphicon glyphicon-thumbs-down"></i> ไม่อนุมัติ', ],
                                    ],
            ],
            //'status',
            //'active',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'การจัดการ',
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
