<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SubjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="col-md-3">
    <br>
    <?= $form->field($model, 'subject_code')->input('text', ['placeholder' => "ค้นหาตามรหัสรายวิชา"])->label(false); ?> 
</div>

    <!--<?= $form->field($model, 'subject_id') ?>-->

    <!--<?= $form->field($model, 'subject_code') ?>-->

    <!--<?= $form->field($model, 'subject_name') ?>-->

    <!--<?= $form->field($model, 'active') ?>-->

    <div class="form-group col-md-3">
        <br>
        <?= Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']) ?>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['subject/'], ['class' => 'btn btn-default'])?>
        
    </div>


    <?php ActiveForm::end(); ?>

</div>
