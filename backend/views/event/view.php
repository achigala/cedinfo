<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Event */

$this->title = $model->event_title."( ".date("d M Y",strtotime($model->event_date))." )";
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['/event']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <p>
        <?= Html::a('Event', ['/event'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->event_id], [
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
            // 'event_id',
            'event_title',
            [
            'format'=>'raw',
            'attribute'=>'photo',
            'value'=>Html::img($model->photoViewer,['class'=>'img-thumbnail','style'=>'width:200px;'])
            ],
            'event_predes',
            'event_address',
            'event_des:ntext',
            'event_date',
            'event_time',
            // 'active',
        ],
    ]) ?>

</div>
