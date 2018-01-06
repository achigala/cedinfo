<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use toxor88\switchery\Switchery;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $form yii\widgets\ActiveForm 

<?= $form->field($model, 'event_date')->textInput() ?>*/
?>

<div class="event-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'event_predes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_des')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'event_address')->textInput(['maxlength' => true]) ?>
    
    <div class="row">
          <div class="col-md-6"> 
                <?= $form->field($model, 'event_date')->widget(DatePicker::classname(), [
                'name' => 'date_11',
                'options' => ['placeholder' => 'Enter birth date ...'],
                'pluginOptions' => [
                'todayHighlight' => true,
                'todayBtn' => true,
                'format' => 'yyyy-m-dd',
                'autoclose' => true,
            ]
    ]);?>

            </div>
            <div class="col-md-6">
              <?=$form->field($model, 'event_time')->widget(TimePicker::classname(), []);?>
                
                
            </div>
        </div>
        
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
