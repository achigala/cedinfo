<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use toxor88\switchery\Switchery;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'day_id')->textInput() ?>

    <?= $form->field($model, 'booking_date')->widget(DatePicker::classname(), [
                'name' => 'date_11',
                'options' => ['placeholder' => 'Enter birth date ...'],
                'pluginOptions' => [
                'todayHighlight' => true,
                'todayBtn' => true,
                'format' => 'yyyy-m-dd',
                'autoclose' => true,
            ]
    ]);?>
    <div class="col-md-6">
        <?=$form->field($model, 'time_start')->widget(TimePicker::classname(), []);?>
    </div>
    <div class="col-md-6">
        <?=$form->field($model, 'time_end')->widget(TimePicker::classname(), []);?>
    </div>

    <?= $form->field($model, 'stu_id')->textInput() ?>

    <?= $form->field($model, 'stu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booking_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booking_count')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
