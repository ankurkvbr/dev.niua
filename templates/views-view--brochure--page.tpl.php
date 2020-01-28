<?php
    $project_brochure = httpGet('https://pi.niua.org/api.php?mode=project_brochure');
    $brochure = json_decode($project_brochure,true);
    //echo '<pre>';
    //print_r($newsletter);
    //echo '</pre>';
    ?>

  
<div class="container-fluid">
<div class="row">
	

  <?php if (!empty($brochure)) {
    foreach ($brochure[0] as $project_brochures) {
	echo '<div class="col-md-3">
        <div class="card" style="margin-bottom:20px;">';

         // echo $news_letter;
 echo '<iframe src="'.$project_brochures.'"  style="width:100%;height:260px;"></iframe>';
 echo '<a href="'.$project_brochures.'"target="_blank">Read</a>';
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
