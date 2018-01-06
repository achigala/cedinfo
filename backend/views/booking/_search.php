<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    
       <div class="col-md-3">
    <br>
    <?= $form->field($model, 'stu_name')->input('text', ['placeholder' => "ค้นหาชื่อผู้จอง"])->label(false); ?> 
</div>

    <!--<?= $form->field($model, 'booking_id') ?>-->

    <!--<?= $form->field($model, 'room_id') ?>-->

    <!--<?= $form->field($model, 'day_id') ?>-->

    <!--<?= $form->field($model, 'booking_date') ?>-->

    <!--<?= $form->field($model, 'time_start') ?>-->

    <?php // echo $form->field($model, 'time_end') ?>

    <?php // echo $form->field($model, 'stu_id') ?>

    <?php // echo $form->field($model, 'stu_name') ?>

    <?php // echo $form->field($model, 'stu_lastname') ?>

    <?php // echo $form->field($model, 'booking_detail') ?>

    <?php // echo $form->field($model, 'booking_count') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group col-md-3">
        <br>
        <?= Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']) ?>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['booking/'], ['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
