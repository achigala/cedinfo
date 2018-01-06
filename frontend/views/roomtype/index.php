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

.notice {
    padding: 15px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-sm {
    padding: 10px;
    font-size: 80%;
}
.notice-lg {
    padding: 35px;
    font-size: large;
}
.notice-success {
    border-color: #80D651;
}
.notice-success>strong {
    color: #80D651;
}
.notice-info {
    border-color: #45ABCD;
}
.notice-info>strong {
    color: #45ABCD;
}
.notice-warning {
    border-color: #FEAF20;
}
.notice-warning>strong {
    color: #FEAF20;
}
.notice-danger {
    border-color: #d73814;
}
.notice-danger>strong {
    color: #d73814;
}
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
          <h1 style="color: #37474F;">Room<br>
          <small>Select room | Computer Education</small></h1>
      </div>

          <div class="container">
        <div class="cards">
    <div class="row">
    	<?php
    		$roomtype_photo = [
    			1 => 'ddddddddddddd',
    			2 => 'ddddddddddddd',
    		];
    		foreach ($model as $md) {
    	?>
         	<div class="col-md-6 col-lg-6">

					

    <div class="notice notice">
        <strong><?=Html::a('<h3>'.$md->roomtype_name.'</h3>',['room/index','roomtype_id' => $md->roomtype_id]); ?>
		            <br></strong> เลือกเพื่อดูข้อมูล และ จองห้อง
    </div>
         	</div>
        <?php } ?>
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








