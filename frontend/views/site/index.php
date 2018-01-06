<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'CED|Information';


?>
<div id="particles" class="gradient">
  <div id="intro" class="center">
    

    <h1 class="home" style="border-bottom: 0px;">CED | Education</h1>
    <p style="max-width:1000px; margin-bottom:50px;">The development Management Information System of Computer Education Department.</p>
    <?php echo Html::a('Teacher', ['/teacher/index'], ['class'=>'btn','target'=>'_blank']);?>
    <!-- <a href="#" class="btn">Teacher</a> -->
    <?php echo Html::a('Schdule',['lab/index?teacher=0'],['class'=>'btn','target'=>'_blank']);?>
    <?php echo Html::a('Room', ['/roomtype/index'], ['class'=>'btn','target'=>'_blank']);?>
    <?php echo Html::a('Event', ['/event/index'], ['class'=>'btn','target'=>'_blank']);?>
  </div>
</div>

	<script type="text/javascript">
			setInterval(function () {
				$.get('/motion/readstatus.php', function (data) {
					//var page = document.getElementById("page1");
					if (data === "1") {


						window.location.href = 'http://www.cedinfo.esy.es/site/about';
					}
				});
			}, 1000);
		</script>






      <script type="text/javascript">
    $(document).ready(function() {
        //alert("siuehfsf");
        //window.location = "/teacher/index";
    });
</script>