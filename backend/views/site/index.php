
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Admin Menu';
?>
<style type="text/css">
hr.style1{
	border-top: 1px solid #8c8b8b;
}

.btn-sq-lg {
  width: 150px !important;
  height: 150px !important;
}

.btn-sq {
  width: 100px !important;
  height: 100px !important;
  font-size: 10px;
}

.btn-sq-sm {
  width: 50px !important;
  height: 50px !important;
  font-size: 10px;
}

.btn-sq-xs {
  width: 25px !important;
  height: 25px !important;
  padding:2px;
}

</style>
<div class="site-index">


    <div class="body-content">
        
        <h4><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></i> Sleep mode</h4>
        <hr class="style1">
        
        <div class="row">
        <div class="col-lg-12">
          <p>
            <?=Html::a('<i class="fa fa-picture-o fa-5x"></i><br/>
                NEWS <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['news/'], ['class' => 'btn btn-sq-lg btn-primary'])?>
                
          </p>
        </div>
	    </div> <br><br>
	    
	    
	   <h4><i class="fa fa-info-circle" aria-hidden="true"></i> Content</h4>
        <hr class="style1">
        
      <div class="row">
        <div class="col-lg-12">
          <p>
            <?=Html::a('<i class="fa fa-address-card-o fa-5x"></i><br/>
                Teacher Management <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['teacher/'], ['class' => 'btn btn-sq-lg btn-primary'])?>
                
            <?=Html::a('<i class="fa fa-bars fa-5x"></i><br/>
                Prefix <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['/prefix/'], ['class' => 'btn btn-sq-lg btn-success'])?>
                
            <?=Html::a('<i class="fa fa-bars fa-5x"></i><br/>
                Position <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['position/'], ['class' => 'btn btn-sq-lg btn-info'])?>
            <?=Html::a('<i class="fa fa-home fa-5x"></i><br/>
                Room <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['room/'], ['class' => 'btn btn-sq-lg btn-warning'])?>
            <?=Html::a('<i class="fa fa-bars fa-5x"></i><br/>
                Roomtype <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['roomtype/'], ['class' => 'btn btn-sq-lg btn-danger'])?>

          </p>
        </div>
	</div>
	
	      <div class="row">
        <div class="col-lg-12">
          <p>
              
            <?=Html::a('<i class="fa fa-book fa-5x"></i><br/>
                Booking <br><i class="fa fa-book" aria-hidden="true"></i> Edit', ['booking/'], ['class' => 'btn btn-sq-lg btn-primary'])?>
                
            <?=Html::a('<i class="fa fa-bars fa-5x"></i><br/>
                Subject <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['subject/'], ['class' => 'btn btn-sq-lg btn-success'])?>
                
            <?=Html::a('<i class="fa fa-bars fa-5x"></i><br/>
                 Day <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['day/'], ['class' => 'btn btn-sq-lg btn-info'])?>
            
            <?=Html::a('<i class="fa fa-tasks fa-5x"></i><br/>
                Class Schdule<br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['lab/'], ['class' => 'btn btn-sq-lg btn-warning'])?>

            <?=Html::a('<i class="fa fa-calendar fa-5x"></i><br/>
                EVENT <br><i class="fa fa-pencil" aria-hidden="true"></i> Edit', ['event/'], ['class' => 'btn btn-sq-lg btn-danger'])?>
                

          </p>
        </div>
	</div><br><br>
	
    </div>
</div>
