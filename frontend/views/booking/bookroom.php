<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSecrch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
$this->title = 'CED|Select room';

?>
<!DOCTYPE html>
<html>
<head>

<!-- Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!-- end menu -->
  <style type="text/css">

        html {
            position: relative;
            min-height: 100%;
        }

        body {
         /* overflow-x: hidden;*/
            background-color: #ECEFF1;
            /*color: #37474F;*/
            font-family: 'Raleway','Kanit', sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        h1, h2, h3 {
            font-weight: 200;
        }
    </style>
</head>

<body>

  <div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
<ul class="menu_items" style="color: white">
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><?php echo Html::a('<i class="icon fa fa-home fa-2x"></i> Home', ['/']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-user fa-2x"></i> Teacher', ['/teacher/index']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-bars fa-2x"></i> Class Schdule',['lab/index?teacher=0']);?></li>
    <li><?php echo Html::a('<i class="icon fa fa-desktop fa-2x"></i> Room', ['/roomtype/index']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-calendar fa-2x"></i> Event', ['/event/index']);?></li>
</ul>
  <main class="content">
    <div class="content_inner">
      <!-- Content HERE !!!!! -->
    <div class="page-header">
          <h1 style="color: #37474F;">Room<br>
          <small>Select room | Computer Education</small></h1>
      </div>

    <div class="container">
        <div class="row">
            <div class="booking-form">
            <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

            <?= $form->field($model, 'booking_date')->widget(DatePicker::classname(), [
                'name' => 'date_11',
                'options' => ['placeholder' => 'Press date to booking ...'],
                'pluginOptions' => [
                'todayHighlight' => true,
                'todayBtn' => true,
                'format' => 'yyyy-m-dd',
                'autoclose' => true,
            ]
            ]);?>

            <div class="row">
                <div class="col-md-6"> 
                <?= $form->field($model, 'time_start')->widget(TimePicker::classname(), 
                [
                    'name' => 't1',
                            'pluginOptions' => [
                                'showMeridian' => false,
                                'minuteStep' => 30,
                                //'secondStep' => 5,
                ]
                ]);?>

                </div>
                <div class="col-md-6">
              <?= $form->field($model, 'time_end')->widget(TimePicker::classname(), 
                [
                    'name' => 't1',
                            'pluginOptions' => [
                                'showMeridian' => false,
                                'minuteStep' => 30,
                                //'secondStep' => 5,
                ]
                ]);?>
                </div>
            </div>

            <?= $form->field($model, 'stu_id')->textInput() ?>
            <?= $form->field($model, 'stu_name')->textInput() ?>
            <?= $form->field($model, 'room_id')->hiddenInput(['value' => $room->room_id])->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

        </div>
    </div>

<!-- EEND Content HERE !!!!! -->
    </div>
  </main>
</div>



</body>
</html>







