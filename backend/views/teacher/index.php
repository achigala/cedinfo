<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
  <div class="box-header with-border">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-md-12">
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> เพิ่มอาจารย์', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
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
            //'filterModel' => $searchModel,
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

            //'teacher_id',
            // [
            //     'attribute' => 'prefix_id',
            //     'value' => function($prefix)
            //     {
            //          return $prefix->prefix->prefix_name;
            //     }
            // ],
            // 'teacher_name',
            
            // 'teacher_lastname',
            
            [
            'options'=>['style'=>'width:150px;'],
            'format'=>'raw',
            'attribute'=>'photo',
            'value'=>function($model){
              return Html::tag('div','',[
                'style'=>'width:110px;height:55px;
                          border-top: 10px solid rgba(255, 255, 255, .46);
                          background-image:url('.$model->photoViewer.');
                          background-size: cover;
                          background-position:center center;
                          background-repeat:no-repeat;
                          ']);
            }
            ],

            [
                'attribute' => 'ชื่อ',
                'options'=>['style'=>'width:40%;'],
                'value' => function($data)
                {
                     return $data->fullname;
                }
            ],
            [
                'attribute' => 'position_id',
                'options'=>['style'=>'width:20%;'],
                'value' => function($data)
                {
                     return $data->position->position_name;
                }
            ],

            

            // 'teacher_email:email',
            // 'teacher_line',
            // 'teacher_tel',
            // [
            //     'attribute' => 'room_id',
            //     'options'=>['style'=>'width:150px;'],
            //     'value' => function($room)
            //     {
            //          return $room->room->room_name;
            //     }
            // ],
            // 'teacher_education',
            [
                'attribute' => 'active',
                'filter' => [0 => 'Inactive', 1 => 'Active'],//กำหนด filter แบบ dropDownlist จากข้อมูล array
                'format' => 'raw',
                'options'=>['style'=>'width:100px;'],
                'value' => function($model, $key, $index, $column)
                {
                    return $model->active == 0 ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-success">Active</span>';
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
            'buttonOptions'=>['class'=>'btn btn-default'],
            'header'=>'ดู',
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group">{view}</div>',
              'options'=> ['style'=>'width:50px;'],],
            ['class' => 'yii\grid\ActionColumn',
            'buttonOptions'=>['class'=>'btn btn-default'],
            'header'=>'แก้ไข',
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group">{update}</div>',
              'options'=> ['style'=>'width:50px;'],],
            ['class' => 'yii\grid\ActionColumn',
            'buttonOptions'=>['class'=>'btn btn-default'],
            'header'=>'ลบ',
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group">{delete} </div>',
              'options'=> ['style'=>'width:50px;'],],
            ],
        ]); ?>
  </div>
  <div class="box-footer text-center">
   Copyright © ภาควิชาคอมพิวเตอร์ศึกษา มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ 
  </div>
</div>
<!-- /.box -->

    <?php

        Modal::begin([
            'header' => '<h4>Shipment</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',

            ]);
        echo"<div id='modalContent'></div>";

        Modal::end();
    ?>

        <div class="panel-body">







