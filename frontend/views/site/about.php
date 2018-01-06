<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'NEWS';
$this->params['breadcrumbs'][] = $this->title;
?>


		<script type="text/javascript">
			setInterval(function () {
				$.get('/motion/readstatus.php', function (data) {
					//var page = document.getElementById("page1");
					if (data === "1") {


						window.location.href = 'http://www.cedinfo.esy.es/';
					}
				});
			}, 1000);
</script>
		



<div id="maximage">
    
    <?php foreach ($news as $news): ?>
    <img src="../../admin/uploads/news_upload/<?= $news->news_img ?>"width="1400" height="1050" >
    <?php endforeach; ?>

</div>

<script>
    $(function(){
	// Trigger maximage
	jQuery('#maximage').maximage();
});
</script>