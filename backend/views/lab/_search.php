<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   <div class="col-md-3">
    <br>
    <?= $form->field($model, 'teacher_id')->input('text', ['placeholder' => "ค้าหาตารางสอนจากชื่ออาจารย์"])->label(false); ?> 
</div>
    <!--<?= $form->field($model, 'lab_id') ?>-->

    <!--<?= $form->field($model, 'teacher_id') ?>-->

    <!--<?= $form->field($model, 'day_id') ?>-->

    <!--<?= $form->field($model, 'subject_id') ?>-->

    <!--<?= $form->field($model, 'time_start') ?>-->

    <?php // echo $form->field($model, 'time_end') ?>

    <?php // echo $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group col-md-3">
        <br>
        <?= Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']) ?>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['lab/'], ['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
