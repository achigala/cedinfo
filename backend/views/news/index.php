<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'news';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
  <div class="box-header with-border">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-md-12">
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> เพิ่มข่าว', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
       <!--  <?= Html::button('testing for future', ['value'=>Url::to('teacher/create'), 'class' => 'btn btn-success', 
            'id'=>'modalButton']) ?> -->

        </div>
    <div class="box-tools pull-right">
      <!-- <span class="label label-primary">Label</span> -->
    </div>
  </div>
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
                'news_id',
                [
                    'options'=>['style'=>'width:150px;'],
                    'format'=>'raw',
                    'attribute'=>'news_img',
                    'value'=>function($model){
                      return Html::tag('div','',[
                        'style'=>'width:150px;height:95px;
                                  border-top: 10px solid rgba(255, 255, 255, .46);
                                  background-image:url('.$model->photoViewer.');
                                  background-size: cover;
                                  background-position:center center;
                                  background-repeat:no-repeat;
                                  ']);
                    }
                ],

                [
                    'header' => 'จัดการ',
                    'class' => 'yii\grid\ActionColumn'
                ],
            ],
        ]); ?>
  </div>
  <div class="box-footer text-center">
   Copyright © ภาควิชาคอมพิวเตอร์ศึกษา มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ 
  </div>
</div>
<!-- /.box -->
