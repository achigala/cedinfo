<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSecrch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
$this->title = 'CED|Select room';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300,200,500,600,700' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!-- end menu -->
<style class="cp-pen-styles">


.card-container {
  position: relative;
  flex-wrap: wrap;
  overflow: hidden;
  padding-top: 15px;
  padding-bottom: 15px;
  display: flex;
  justify-content: space-around;
  align-items: auto;
}

.card {
  min-width: 275px;
  width: 550px;
  position: relative;
  margin: 15px 15px;
  height: 350px;
  border-radius: 7px;
  background-size: cover;
  background-color: #b3b3b3 ;
  box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.3);
  transition: 0.2s all linear;
  border: 1px solid rgba(128, 128, 128, 0.15);
  box-sizing: border-box;
}
.card .card-social {
  position: absolute;
  height: 75px;
  width: 100%;
  background: red;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background: rgba(0, 0, 0, 0.6);
  box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.5);
  top: 275px;
}
.card .card-social ul {
  padding: 0;
  margin: 0;
  list-style: none;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-around;
}
.card .card-social ul li {
  height: 100%;
  text-align: center;
  line-height: 75px;
  font-size: 1.5em;
  color: rgba(255, 255, 255, 0.85);
  text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}
.card .card-social ul li:hover {
  text-shadow: 7px 7px 5px rgba(0, 0, 0, 0.7);
  transition: all 0.1s linear;
}
.card .card-image {
  width: 100%;
  height: 275px;
  position: relative;
  /*background-image: url("https://d13yacurqjgara.cloudfront.net/users/150724/screenshots/2211976/365_the_end_1x.png");*/
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}
.card .card-info {
  position: relative;
  width: 100%;
  height: 35px;
  line-height: 35px;
  top: -265px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  font-family: "Open Sans";
  color: rgba(255, 255, 255, 0.85);
}
.card .card-info .card-title {
  line-height: 35px;
  height: 35px;
  position: relative;
  top: 0px;
  font-size: 25px;
  text-align: center;
  background: rgba(0, 0, 0, 0.6);
  box-shadow: 5px 5px 10px 2px rgba(0, 0, 0, 0.3);
}
.card .card-info .card-detail {
  line-height: 1.5em;
  font-size: 1em;
  height: 220px;
  background: rgba(0, 0, 0, 0.6);
  position: relative;
  top: 5px;
  padding: 5px 20px 0px 20px;
  opacity: 0;
  transform: scaleY(0);
  transform-origin: center top;
  box-shadow: 5px 5px 10px 2px rgba(0, 0, 0, 0.3);
}
.card:hover {
  box-shadow: 10px 10px 10px 1px rgba(0, 0, 0, 0.3);
}
.card:hover .card-info .card-title {
  box-shadow: 10px 10px 10px 1px rgba(0, 0, 0, 0.3);
  transition: 0.3s all linear;
}
.card:hover .card-info .card-detail {
  opacity: 1;
  box-shadow: 10px 10px 10px 1px rgba(0, 0, 0, 0.3);
  transition: 0.35s all linear;
  transition-delay: 0.1s;
  transform: scaleY(1);
}
.card:nth-of-type(2) .card-image {
  background-image: url("https://d13yacurqjgara.cloudfront.net/users/150724/screenshots/2164720/337_writing_blog_post_1x.png");
}
.card:nth-of-type(3) .card-image {
  background-image: url("https://d13yacurqjgara.cloudfront.net/users/150724/screenshots/2377046/kaylo_ren_lighsaber_800x600_1x.png");
}
.card:nth-of-type(4) .card-image {
  background-image: url("https://d13yacurqjgara.cloudfront.net/users/150724/screenshots/2203790/362_chasing_dreams_1x.png");
}
</style></head>

<body>

  <div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
<ul class="menu_items" style="color: white">
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><?php echo Html::a('<i class="icon fa fa-home fa-2x"></i> Home', ['/']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-user fa-2x"></i> Teacher', ['/teacher/index']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-bars fa-2x"></i> Class Schdule',['lab/index?teacher=0']);?></li>
    <li><?php echo Html::a('<i class="icon fa fa-desktop fa-2x"></i> Room', ['/roomtype/index']);?></li>
	<li><?php echo Html::a('<i class="icon fa fa-calendar fa-2x"></i> Event', ['/event/index']);?></li>
</ul>
  <main class="content">
    <div class="content_inner">
      <!-- Content HERE !!!!! -->
    <div class="page-header">
          <h1 style="color: #37474F;">Room<br>
          <small>Select room | Computer Education</small></h1>
      </div>

    <div class="container">
        <div class="row">
            <?php foreach ($model as $md): ?>

  <div class="col-md-6">
    <div class="card-container">
          <div class="card">

                <img class="card-image" src="../../cedinfo/admin/uploads/<?= $md->photo ?>">
            <div class="card-info">
              <div class="card-title"><?=$md->room_name ?></div>
            </div>
            <div class="card-social">
            <ul>
                <li> </li>
                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                <li>
                    <?=Html::a('Booking',['booking/index','room_id' => $md->room_id],[
                    'class' => 'btn btn-danger'
                ]) ?>
                </li>
            </ul>
            </div>
          </div>
        </div>
    </div>




<?php endforeach; ?>
        </div>
       
    </div>



<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>

<!-- EEND Content HERE !!!!! -->
    </div>
  </main>
</div>
</body>
</html>








