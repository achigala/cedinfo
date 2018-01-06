<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */

$this->title = $model->teacher_id;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->teacher_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->teacher_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacher_id',
            [
                'attribute' => 'teaccer_id',
                'value' => function($data)
                {
                     return $data->fullname;
                }
            ],
            //'teacher_name',
            //'teacher_lastname',
            'teacher_en',
            [
                'attribute' => 'position_id',
                'value' => function($data)
                {
                     return $data->position->position_name;
                }
            ],
            [
            'format'=>'raw',
            'attribute'=>'photo',
            'value'=>Html::img($model->photoViewer,['class'=>'img-thumbnail','style'=>'width:200px;'])
                ],
            'teacher_email:email',
            'teacher_line',
            'teacher_tel',
            [
                'attribute' => 'room_id',
                'value' => function($room)
                {
                     return $room->room->room_name;
                }
            ],
            'teacher_education',
            'active',
        ],
    ]) ?>

</div>
