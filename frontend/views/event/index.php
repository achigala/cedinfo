<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSecrch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;

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
    <style type="text/css">

        html {
            position: relative;
            min-height: 100%;
        }

        body {
         /* overflow-x: hidden;*/
            background-color: #ECEFF1;
            /*color: #37474F;*/
            font-family: 'Raleway','Kanit', sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        h1, h2, h3 {
            font-weight: 200;
        }

    </style>

    <script>
$(document).ready(function(){
   $("#jan").hide();
   $("#feb").hide();
   $("#mar").hide();
   $("#apr").hide();
   $("#may").hide();
   $("#jun").hide();
   $("#jul").hide();
   $("#aug").hide();
   $("#sep").hide();
   $("#oct").hide();
   $("#nov").hide();
   $("#dec").hide();

    $("#janBtn").click(function(){
        $("#jan").slideToggle();
        $("#feb").hide(300);
        $("#mar").hide(300);
        $("#apr").hide(300);
        $("#may").hide(300);
        $("#jun").hide(300);
        $("#jul").hide(300);
        $("#aug").hide(300);
        $("#sep").hide(300);
        $("#oct").hide(300);
        $("#nov").hide(300);
        $("#dec").hide(300);
    });

    $("#febBtn").click(function(){
        $("#feb").slideToggle();
        $("#jan").hide(300);
        $("#mar").hide(300);
        $("#apr").hide(300);
       $("#may").hide(300);
       $("#jun").hide(300);
       $("#jul").hide(300);
       $("#aug").hide(300);
       $("#sep").hide(300);
       $("#oct").hide(300);
       $("#nov").hide(300);
       $("#dec").hide(300);
    });

    $("#marBtn").click(function(){
        $("#mar").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#apr").hide(300);
   $("#may").hide(300);
   $("#jun").hide(300);
   $("#jul").hide(300);
   $("#aug").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#aprBtn").click(function(){
        $("#apr").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#mar").hide(300);
   $("#may").hide(300);
   $("#jun").hide(300);
   $("#jul").hide(300);
   $("#aug").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#mayBtn").click(function(){
        $("#may").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#mar").hide(300);
   $("#apr").hide(300);
   $("#jun").hide(300);
   $("#jul").hide(300);
   $("#aug").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#junBtn").click(function(){
        $("#jun").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#mar").hide(300);
   $("#apr").hide(300);
   $("#may").hide(300);
   $("#jul").hide(300);
   $("#aug").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#julBtn").click(function(){
        $("#jul").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#mar").hide(300);
   $("#apr").hide(300);
   $("#may").hide(300);
   $("#jun").hide(300);
   $("#aug").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#augBtn").click(function(){
        $("#aug").slideToggle();
           $("#jan").hide(300);
   $("#feb").hide(300);
   $("#mar").hide(300);
   $("#apr").hide(300);
   $("#may").hide(300);
   $("#jun").hide(300);
   $("#jul").hide(300);
   $("#sep").hide(300);
   $("#oct").hide(300);
   $("#nov").hide(300);
   $("#dec").hide(300);
    });

    $("#sepBtn").click(function(){
        $("#sep").slideToggle();
           $("#jan").hide();
   $("#feb").hide();
   $("#mar").hide();
   $("#apr").hide();
   $("#may").hide();
   $("#jun").hide();
   $("#jul").hide();
   $("#aug").hide();
   $("#oct").hide();
   $("#nov").hide();
   $("#dec").hide();
    });

    $("#octBtn").click(function(){
        $("#oct").slideToggle();
           $("#jan").hide();
   $("#feb").hide();
   $("#mar").hide();
   $("#apr").hide();
   $("#may").hide();
   $("#jun").hide();
   $("#jul").hide();
   $("#aug").hide();
   $("#sep").hide();
   $("#nov").hide();
   $("#dec").hide();
    });

    $("#novBtn").click(function(){
        $("#nov").slideToggle();
           $("#jan").hide();
   $("#feb").hide();
   $("#mar").hide();
   $("#apr").hide();
   $("#may").hide();
   $("#jun").hide();
   $("#jul").hide();
   $("#aug").hide();
   $("#sep").hide();
   $("#oct").hide();
   $("#dec").hide();
    });

    $("#decBtn").click(function(){
        $("#dec").slideToggle();
           $("#jan").hide();
   $("#feb").hide();
   $("#mar").hide();
   $("#apr").hide();
   $("#may").hide();
   $("#jun").hide();
   $("#jul").hide();
   $("#aug").hide();
   $("#sep").hide();
   $("#oct").hide();
   $("#nov").hide();
    });
});
</script>
</head>

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
          <h1>Event Lists<br>
          <small>Computer Education Department | CED</small></h1>
      </div>

      <div class="container">
        <div class="row" style="padding-bottom: 5%;">
          <div class="col-md-3">

                <!-- <a class='button -sun center' style="margin: 3px;" id="janBtn"> January</a>
                <a class='button -sun center' style="margin: 3px;" id="febBtn"> February</a>
                <div class='button -sun center' style="margin: 3px;" id="marBtn"> March </div>
                <div class='button -sun center' style="margin: 3px;" id="aprBtn"> April </div>
                <div class='button -sun center' style="margin: 3px;" id="mayBtn"> May </div>
                <div class='button -sun center' style="margin: 3px;" id="junBtn"> June </div>
                <div class='button -sun center' style="margin: 3px;" id="julBtn"> July </div>
                <div class='button -sun center' style="margin: 3px;" id="augBtn"> August </div>
                <div class='button -sun center' style="margin: 3px;" id="sepBtn"> September </div>
                <div class='button -sun center' style="margin: 3px;" id="octBtn"> October </div>
                <div class='button -sun center' style="margin: 3px;" id="novBtn"> November </div>
                <div class='button -sun center' style="margin: 3px;" id="decBtn"> December </div> -->
                <ul id="accordion" class="accordion">
                  <li>
                    <div class="link"><i class="fa fa-database"></i>Choose MONTH<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                      <li id="janBtn"><a>January</a></li>
                      <li id="febBtn"><a>February</a></li>
                      <li id="marBtn"><a>March</a></li>
                      <li id="aprBtn"><a>April</a></li>
                      <li id="mayBtn"><a>May</a></li>
                      <li id="junBtn"><a>June</a></li>
                      <li id="julBtn"><a>July</a></li>
                      <li id="augBtn"><a>August</a></li>
                      <li id="sepBtn"><a>September</a></li>
                      <li id="octBtn"><a>October</a></li>
                      <li id="novBtn"><a>November</a></li>
                      <li id="decBtn"><a>December</a></li>
                    </ul>
                  </li>
                </ul>

          </div>
          <div class="col-md-9">
              <h3>Event order in ........ This year choose month to join it</h3><br>
              <!-- <p id="jan">This is a paragraph.</p> -->
              <div class="row">
                <div class="[col-md-1 col-md-offset-1 col-md-11 ]">

                  <ul class="event-list" id="jan">
                    <?php foreach ($jan as $jan): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($jan->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($jan->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$jan->photo.'>');?>
                  
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$jan->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($jan->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jan->event_time?></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jan->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $jan->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                      
                    </li>
                    <?php endforeach; ?>
                    <!-- <li>
                      <time datetime="2017-11-24">
                        <span class="day">24</span>
                        <span class="month">Nov</span>
                        <span class="year">2017</span>
                        <span class="time">Evening</span>
                      </time>
                     <img alt="dj-set" src="https://st.depositphotos.com/1430909/1434/i/950/depositphotos_14345167-stock-photo-dj-playing-the-track.jpg" />
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-sm-9">
                            <h2 class="title">Jazz Cafe presents Osunlade</h2>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-2">Start:</div>
                          <div class="col-sm-7">24 Nov 2017 (21:30)</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-2">End:</div>
                          <div class="col-sm-7">25 Nov 2017 (02:00)</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-2">Address:</div>
                          <div class="col-sm-7">5 Parkway, Camden Town, London NW1 7PG, UK</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-2">Cost:</div>
                          <div class="col-sm-7">ÃÂ£10</div>
                        </div>              
                      </div>
                      <div class="social">
                        <ul>
                          <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                          <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                          <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-soundcloud"></span></a></li>
                        </ul>
                      </div>
                    </li> -->
                  </ul>

                  <ul class="event-list" id="feb">
                    <?php foreach ($feb as $feb): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($feb->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($feb->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$feb->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$feb->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($feb->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$feb->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$feb->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $feb->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="mar">
                    <?php foreach ($mar as $mar): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($mar->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($mar->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$mar->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$mar->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($mar->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$mar->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$mar->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $mar->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="apr">
                    <?php foreach ($apr as $apr): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($apr->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($apr->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$apr->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$apr->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($apr->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$apr->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$apr->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $apr->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="may">
                    <?php foreach ($may as $may): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($may->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($may->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$may->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$may->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($may->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$may->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$may->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $may->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="jun">
                    <?php foreach ($jun as $jun): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($jun->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($jun->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$jun->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$jun->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($jun->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jun->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jun->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $jun->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="jul">
                    <?php foreach ($jul as $jul): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($jul->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($jul->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$jul->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$jul->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($jul->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jul->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$jul->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $jul->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="aug">
                    <?php foreach ($aug as $aug): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($aug->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($aug->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$aug->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$aug->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($aug->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$aug->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$aug->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $aug->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="sep">
                    <?php foreach ($sep as $sep): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($sep->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($sep->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$sep->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$sep->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($sep->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$sep->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$sep->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $sep->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="oct">
                    <?php foreach ($oct as $oct): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($oct->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($oct->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$oct->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$oct->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($oct->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$oct->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$oct->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $oct->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="nov">
                    <?php foreach ($nov as $nov): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($nov->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($nov->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$nov->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$nov->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($nov->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$nov->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$nov->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $nov->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>

                  <ul class="event-list" id="dec">
                    <?php foreach ($dec as $dec): ?>
                    <li>
                      <time datetime="2018-10-29">
                        <span class="day"><?php echo date("d",strtotime($dec->event_date))?></span>
                        <span class="month"><?php echo date("M",strtotime($dec->event_date))?></span>
                        <span class="year">2018</span>
                        <span class="time">ALL DAY</span>
                      </time>
                      <?php echo ('<img alt="dj-set" src ='.'../../admin/uploads/event/' .$dec->photo.'>');?>
                      <div class="info">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <h4 class="title" style="margin-top: 0px;"><b><?=$dec->event_title?></b></h4>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-md-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                          <div class="col-sm-7"><?php echo date("d M Y",strtotime($dec->event_date))?> <!-- (23:30) --></div>
                        </div>
                        <div class="row">
                          <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$dec->event_time?></div>
                        </div>

                        <div class="row">
                          <div class="col-md-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                          <div class="col-md-7"><?=$dec->event_address?></div>
                          <div class="col-md-3"><?php
                  echo Html::a('More :<i class="fa fa-hand-o-right" aria-hidden="true"></i>
                  ',['event/page','event_id' => $dec->event_id],['target' => '_blank','class'=>'btn btn-info']);?></div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
          </div>
        </div>

<!-- EEND Content HERE !!!!! -->
    </div>
  </main>
</div>


<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
</html>







