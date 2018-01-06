<?php

use yii\helpers\Html;
use frontend\models\Lab;
use frontend\models\Teacher;

$this->title = 'Teachers';
// $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="msapplication-tap-highlight" content="no">

		<title>Material Cards | Simple Demo</title>
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
				/*overflow-y: scroll;*/
            background-color: #ECEFF1;
            color: #37474F;
            font-family: 'Raleway','Kanit', sans-serif;
            font-weight: 300;
            font-size: 16px;
			}

			h1, h2, h3 {
            font-weight: 200;
			}
			
			
			
			.container {
	background-size: cover;
  background: rgb(226,226,226); /* Old browsers */
  background: -moz-linear-gradient(top,  rgba(226,226,226,1) 0%, rgba(219,219,219,1) 50%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(226,226,226,1)), color-stop(50%,rgba(219,219,219,1)), color-stop(51%,rgba(209,209,209,1)), color-stop(100%,rgba(254,254,254,1))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 ); /* IE6-9 */
  padding: 20px;
}

.led-box {
  height: 30px;
  width: 25%;
  margin: 10px 0;
  float: left;
}

.led-box p {
  font-size: 12px;
  text-align: center;
  margin: 1em;
}

.led-red {
  margin: 0 auto;
  width: 24px;
  height: 24px;
  background-color: #F00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;
  -webkit-animation: blinkRed 0.5s infinite;
  -moz-animation: blinkRed 0.5s infinite;
  -ms-animation: blinkRed 0.5s infinite;
  -o-animation: blinkRed 0.5s infinite;
  animation: blinkRed 0.5s infinite;
}

@-webkit-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-moz-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-ms-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@-o-keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}
@keyframes blinkRed {
    from { background-color: #F00; }
    50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
    to { background-color: #F00; }
}

.led-yellow {
  margin: 0 auto;
  width: 24px;
  height: 24px;
  background-color: #FF0;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 12px;
  -webkit-animation: blinkYellow 1s infinite;
  -moz-animation: blinkYellow 1s infinite;
  -ms-animation: blinkYellow 1s infinite;
  -o-animation: blinkYellow 1s infinite;
  animation: blinkYellow 1s infinite;
}

@-webkit-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-moz-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-ms-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@-o-keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}
@keyframes blinkYellow {
    from { background-color: #FF0; }
    50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
    to { background-color: #FF0; }
}

.led-green {
  margin: 0 auto;
  width: 24px;
  height: 24px;
  background-color: #ABFF00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
}

.led-blue {
  margin: 0 auto;
  width: 24px;
  height: 24px;
  background-color: #24E0FF;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #006 0 -1px 9px, #3F8CFF 0 2px 14px;
}

		</style>
		
		<script>
$( function() {var $winHeight = $( window ).height()
  $( '.container' ).height( $winHeight );});
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
						<h1>Teacher List<br>
							<small>Computer Education Department | CED <?=$current_time;?></small></h1>
					</div>
					<div class="row active-with-click">
						<?php foreach ($model as $model): ?>

							<div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 35px;">
								<article class="material-card <?= $model->colorname_custom ?>">
									<h2>
								<script>

								 
								 alert ($red.val);
								</script>
										<?php
										    foreach ($teach as $t)
										{
										    
										    if($t->teacher_id == $model->teacher_id)
										    {
       
										        echo '<table width="100%;">
									   	        <tr>
									   	        <td>'.$model->fullname.'</td>
									   	        <td><div class="led-red" id='.$t->teacher_id.'> </td>

									   	        </tr>
									   	         </table>';
										    }

										}
										?>
										
										<?php
										if ($lab==true)
										    {
										        echo '<table width="100%;">
    									   	        <tr>
    									   	        <td>'.$model->fullname.'</td>
    									   	        <td><div class="led-green" id='.$model->teacher_id.'></td>
    
    									   	        </tr>
    									   	         </table>';
										    }
										?>

										<strong>
											<i class="fa fa-fw fa-star"></i>
											<?= $model->position->position_name ?>
										</strong>
									</h2>
									<div class="mc-content">
										<div class="img-container">
											<img class="img-responsive" src="../../cedinfo/admin/uploads/<?= $model->photo ?>">


										</div>
										<div class="mc-description">
											<?= $model->teacher_name_en ?> <?= $model->teacher_lastname_en ?> <br>
											<b>Email :</b>  <?= $model->teacher_email ?> <br>
											<b>Tel :</b> <?= $model->teacher_tel ?> <br>

										<?php
										    foreach ($teach as $t)
										{
										    
										    if($t->teacher_id == $model->teacher_id)
										    {
       
										         echo '<b style="color:red;font-weight: bold;">กำลังสอนอยู่ที่ : </b>'.$lab->room->room_name.'<br>';
										    }
										}
										?>
										
										<?php
										if($model->prefix->prefix_id == 6)
										{echo '<b style="color:gray;font-weight: bold;">ห้องพัก : </b>'.
										$model->room->room_name.'<br>';}
										
										?>
											

										</div>
									</div>
									<a class="mc-btn-action">
										<i class="fa fa-bars"></i>
									</a>
									<div class="mc-footer">
										<h4>
											Social
										</h4>
										<a class="fa fa-fw fa-envelope-o" href="mailto:<?= $model->teacher_email ?>"></a>
										<a class="fa fa-fw fa-youtube"></a>
										<!--                     <a class="fa fa-fw fa-linkedin"></a>
																  <a class="fa fa-fw fa-google-plus"></a> -->
									</div>
								</article>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</main>
		</div>


		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script>
			$(function () {
				$('.material-card > .mc-btn-action').click(function () {
					var card = $(this).parent('.material-card');
					var icon = $(this).children('i');
					icon.addClass('fa-spin-fast');

					if (card.hasClass('mc-active')) {
						card.removeClass('mc-active');

						window.setTimeout(function () {
							icon
									.removeClass('fa-arrow-left')
									.removeClass('fa-spin-fast')
									.addClass('fa-bars');

						}, 800);
					} else {
						card.addClass('mc-active');

						window.setTimeout(function () {
							icon
									.removeClass('fa-bars')
									.removeClass('fa-spin-fast')
									.addClass('fa-arrow-left');

						}, 800);
					}
				});
			});
		</script>


		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
	</body>
</html>
