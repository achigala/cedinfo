<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Teacher;
use backend\models\Day;
use backend\models\Room;
use backend\models\Subject;
use yii\helpers\ArrayHelper;
use toxor88\switchery\Switchery;
use kartik\time\TimePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Lab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Teacher::find()->all(),'teacher_id','fullname'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a teacher ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);?>


    <?= $form->field($model, 'day_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Day::find()->all(),'day_id','day_name'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select a day ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);?>


    <?= $form->field($model, 'subject_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Subject::find()->all(),'subject_id','fullname'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select a subject ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
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

    <?= $form->field($model, 'room_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Room::find()->all(),'room_id','room_name'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select a room ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);?>


    <?= $form->field($model, 'active')->widget(Switchery::className(),[ 'clientOptions' =>
        [
        'color'              => '#ff33cc',
        'secondaryColor'     => '#14141f',
        'jackColor'          => '#ffcce6',
        'jackSecondaryColor' => null],])->label(false);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Createteach' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
