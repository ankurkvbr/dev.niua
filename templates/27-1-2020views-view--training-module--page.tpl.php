<?php
    $training = httpGet('https://pi.niua.org/api.php?mode=training');
    $training_module = json_decode($training,true);
   // echo '<pre>';
    //print_r($training_module);
    //echo '</pre>';
    ?>

  
<div class="container-fluid">
<div class="row">
	
<?php if (!empty($training_module)) {
    foreach ($training_module[0] as $module) {
	echo '<div class="col-md-3">
        <div class="card" style="margin-bottom:20px;">';

         // echo $news_letter;
 echo '<iframe src="'.$module.'"  style="width:100%;height:260px;"></iframe>';
 echo '<a href="'.$module.'" target="_blank">Read</a>';
          echo '
        </div>
      </div>';
	}
}
  ?>
  
</div>

<div class="containerr">

</div>
</div>

