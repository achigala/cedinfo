<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\RoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <div class="form-group col-md-3">
        <br>
        <?=Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['news/'], ['class' => 'btn btn-default'])?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
