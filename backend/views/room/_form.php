<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use backend\models\Roomtype;
/* @var $this yii\web\View */
/* @var $model backend\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'room_name')->textInput(['maxlength' => true]) ?>

    <div class="row">
      <div class="col-md-6 col-lg-6">
        <div class="well text-center">
         <?= Html::img($model->getPhotoViewer(),['style'=>'width:150px;','class'=>'img-rounded']); ?>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
            <?= $form->field($model, 'photo')->fileInput() ?>
      </div>
    </div>
	<?= $form->field($model, 'roomtype_id')->dropdownList(
            ArrayHelper::map(Roomtype::find()->all(),
            'roomtype_id',
            'roomtype_name'),
        [
            'prompt'=>'Select Title .......',
        ]); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
