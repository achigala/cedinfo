<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!--<?= $form->field($model, 'room_id') ?>-->
   <div class="col-md-3">
    <br>
    <?= $form->field($model, 'room_name')->input('text', ['placeholder' => "ค้นหาชื่อห้อง"])->label(false); ?> 
</div>
    <!--<?= $form->field($model, 'room_name') ?>-->

    <!--<?= $form->field($model, 'photo') ?>-->

    <!--<?= $form->field($model, 'active') ?>-->

    <!--<?= $form->field($model, 'roomtype_id') ?>-->

    <div class="form-group col-md-3">
        <br>
        <?= Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']) ?>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['room/'], ['class' => 'btn btn-default'])?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
