<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Lab;
use frontend\models\Teacher;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSecrch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schdule|CED';
$this->params['breadcrumbs'][] = $this->title;

// $assets = $this->theme->baseUrl.'/assets';
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
          <h1 style="color: #37474F;">Class Schdule<br>
          <small>Ced | Education</small></h1>
      </div>

          <div class="container">
        <div class="row">
            <div class="contentWrapper">
        <div class="row">
          <!--<h1>Schdule</h1>-->
          <h4>Select</h4>


            <?= Html::activeDropDownList($model, 'teacher_id',$items,
              [
            'prompt'=>'Select teacher .......',
            'class'=>'form form-control',
        ]) ?>

        </div>
      <div class="row">
        <div class="col-sm-12 col-xs-12 table-responsive">
        <?php

            $time_arr = [
                1 => '08:00:00',
                2 => '09:00:00',
                3 => '10:00:00',
                4 => '11:00:00',
                5 => '12:00:00',
                6 => '13:00:00',
                7 => '14:00:00',
                8 => '15:00:00',
                9 => '16:00:00',
                10 => '17:00:00',
                11 => '18:00:00',
                12 => '19:00:00',
                13 => '20:00:00',
                14 => '21:00:00',
            ];

                echo "<table border=\"1\"  class=\"striped-table table table-striped\">";
                echo "<tr>";
                   echo "<th class='text-center'>Day</th>";
                   echo "<th class='text-center'>8:00</th>";
                   echo "<th class='text-center'>9:00</th>";
                   echo "<th class='text-center'>10:00</th>";
                   echo "<th class='text-center'>11:00</th>";
                   echo "<th class='text-center'>12:00</th>";
                   echo "<th class='text-center'>13:00</th>";
                   echo "<th class='text-center'>14:00</th>";
                   echo "<th class='text-center'>15:00</th>";
                   echo "<th class='text-center'>16:00</th>";
                   echo "<th class='text-center'>17:00</th>";
                   echo "<th class='text-center'>18:00</th>";
                   echo "<th class='text-center'>19:00</th>";
                   echo "<th class='text-center'>20:00</th>";
                   echo "<th class='text-center'>21:00</th>";
                echo "</tr>";

                foreach ($day as $key => $d){
                    for ($row = 0; $row < 1; $row++){
                        $bg_color ="#F37272";
                        echo "<tr><td> <b>".$d->day_name."</b></td>";

                        for ($col = 1; $col <= 14;) {

                            $lab = Lab::find()->where([
                                'teacher_id' => $teacher,
                                'active' => 1,
                                'day_id' => $d->day_id,
                                'time_start' => $time_arr[$col],
                            ])->one();


                            if($lab){
                                $start = strtotime($lab->time_start);
                                $end = strtotime($lab->time_end);
                                $total = (($end-$start)/3600);

                                echo "<td colspan='$total' class='text-center'  style='background-color: ". $bg_color ."; color:white;'>".'( '.$lab->subject->subject_code.' )'."<br>".$lab->room->room_name."</td>";
                                $col = $col + $total;
                             }else{
                                echo "<td class='text-center'>-</td>";
                                $col = $col + 1;
                             }
                        }


                        echo "</tr>";
                    }
                }
                echo "</table>";
                    ?>
      </div>
    </div><!-- end .contentWrapper -->

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










<script type="text/javascript">

   jQuery(document).ready(function($) {
       $('#lab-teacher_id').change(function(event) 
       {
          window.location.href = "index?teacher="+this.value;
       });
   });
</script>