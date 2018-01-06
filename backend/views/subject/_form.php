<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use toxor88\switchery\Switchery;

/* @var $this yii\web\View */
/* @var $model backend\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'subject_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->widget(Switchery::className(),[ 'clientOptions' => 
        [
        'color'              => '#ff33cc',
        'secondaryColor'     => '#14141f',
        'jackColor'          => '#ffcce6',
        'jackSecondaryColor' => null],])->label(false);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
