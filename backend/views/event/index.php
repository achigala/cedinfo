<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $searchModel backend\modules\cedinfo\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">


    
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php

        Modal::begin([
            'header' => '<h4>Event</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',

            ]);
        echo"<div id='modalContent'></div>";

        Modal::end();
        ?>

        <p>
            <?= Html::a('Create Event', ['createtwo'], ['class' => 'btn btn-success']) ?>
        </p>

          <div class="box box-primary">
            <div class="box-body no-padding">
              <div id="calendar">

            <?= \yii2fullcalendar\yii2fullcalendar::widget(array(

              'events'=> $events,


            ));?>
              </div>
            </div>
          </div>

</div>

