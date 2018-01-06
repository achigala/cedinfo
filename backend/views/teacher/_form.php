<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use toxor88\switchery\Switchery;
use backend\models\Room;
use backend\models\Prefix;
use backend\models\Position;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
<!-- <span class="badge" style="background-color: red">&nbsp;</span> -->
<?= $form->field($model, 'teacher_color')->widget(ColorInput::classname(), [
    'options' => ['placeholder' => 'Select color ...'],
    'name' => 'color_33',
    'value' => 'red',
    'showDefaultPalette' => false,
    'options' => ['placeholder' => 'Choose your theme color ...'],
    'pluginOptions' => [
        'showInput' => true,
        'showInitial' => true,
        'showPalette' => true,
        'showPaletteOnly' => true,
        'showSelectionPalette' => true,
        'showAlpha' => false,
        'allowEmpty' => false,
        'preferredFormat' => 'name',
        'palette' => [
            [
                "#F44336", "#E91E63", "#9C27B0", "#673AB7", "#3F51B5", "#2196F3", 
            ],
            [
                "#03A9F4", "#00BCD4", "#009688", "#4CAF50", "#8BC34A", "#CDDC39"
            ],
            [
                "#FFEB3B", "#FFC107", "#FF9800", "#FF5722", "#795548", "#9E9E9E", 
            ],
            [
                "#607D8B"
            ],
        ]
    ]
]);
?>


    <?= $form->field($model, 'prefix_id')->dropdownList(
            ArrayHelper::map(Prefix::find()->all(),
            'prefix_id',
            'prefix_name'),
        [
            'prompt'=>'Select Title .......',
        ]); ?>


    <?= $form->field($model, 'position_id')->dropdownList(
            ArrayHelper::map(Position::find()->all(),
            'position_id',
            'position_name'),
        [
            'prompt'=>'Select Position .......',
        ]); ?>

    <?= $form->field($model, 'teacher_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_lastname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'teacher_name_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'teacher_lastname_en')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'teacher_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->dropdownList(
            ArrayHelper::map(Room::find()->all(),
            'room_id',
            'room_name'),
        [
            'prompt'=>'Select Teacher rest room .......',
        ]); ?>

    <?= $form->field($model, 'teacher_education')->textInput(['maxlength' => true]) ?>

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

<script type="text/javascript">
    
    jQuery(document).ready(function($) {
        alert("testtttt");
    });
</script>
