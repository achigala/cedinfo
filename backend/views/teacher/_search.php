<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<!-- 
    <?= $form->field($model, 'teacher_id') ?>
 -->
   <!--  <?= $form->field($model, 'prefix_id') ?> -->
   <div class="col-md-3">
    <br>
    <?= $form->field($model, 'teacher_name')->input('text', ['placeholder' => "ค้นหาชื่ออาจารย์"])->label(false); ?> 
</div>

   <!--  <?= $form->field($model, 'teacher_lastname') ?> -->

 <!--    <?= $form->field($model, 'position_id') ?> -->

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'teacher_email') ?>

    <?php // echo $form->field($model, 'teacher_line') ?>

    <?php // echo $form->field($model, 'teacher_tel') ?>

    <?php // echo $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'teacher_education') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group col-md-3">
        <br>
        <?= Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']) ?>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['teacher/'], ['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
