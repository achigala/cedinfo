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

        .imgleft{
            padding: 10%;

        }
        .tabletitle{
            font-weight: 500;
            font-size: 1.2em;
            color: #cc0066;

        }

        content{
            margin-left: 10px;
        }

        td{
            padding: 7px 0;
        }

        .des{
            border-radius: 10px;
            background: white;
            /*border: 2px solid #73AD21;*/
            padding: 20px; 
            width: 100%;

        }

    </style>
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
          <h1 style="color: #37474F;"><?=$event->event_title?><br>
          <small><?php echo date("d M Y",strtotime($event->event_date))?> | Computer Education</small></h1>
      </div>

          <div class="container">
        <div class="row">
            <div class="col-md-4">
               <div class="imgleft">
                <img class="img-responsive" src="../../admin/uploads/event/<?=$event->photo?>">
               </div>
                <div class="content-left">
                    <table width="100%">
                        <tr>
                            <td class="tabletitle" width="33%">Start date :</td>
                            <td> <content><?php echo date("d M Y",strtotime($event->event_date))?></content></td>
                        </tr>

                        <tr>
                            <td class="tabletitle" width="33%">Event title :</td>
                            <td> <content><?=$event->event_title?></content></td>
                        </tr>

                        <!--<tr>-->
                        <!--    <td class="tabletitle" width="33%">ss :</td>-->
                        <!--    <td> <content><?=$event->event_title?></content></td>-->
                        <!--</tr>-->

                    </table>
                </div>
            </div>
            <div class="col-md-8" style="padding: 30px;">
               <iframe width="100%" height="400" src="https://www.youtube.com/embed/-A5nwP_BfuI?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 des">
                <table>
                    <tr>
                        <td class="tabletitle" width="10%">รายละเอียด :  </td>
                        <td><?=$event->event_des;?></td>
                    </tr>
                </table>

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







