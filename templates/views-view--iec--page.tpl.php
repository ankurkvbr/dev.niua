<?php
    $iec = httpGet('https://pi.niua.org/api.php?mode=material');
    $iecmaterial = json_decode($iec,true);
    //echo '<pre>';
    //print_r($newsletter);
    //echo '</pre>';
    ?>

  
<div class="container-fluid">
<div class="row">
	

  <?php if (!empty($iecmaterial)) {
    foreach ($iecmaterial[0] as $iec_material) {
	echo '<div class="col-md-3">
        <div class="card" style="margin-bottom:20px;">';

         // echo $news_letter;
 echo '<iframe src="'.$iec_material.'"  style="width:100%;height:260px;"></iframe>';
 echo '<a href="'.$iec_material.'"target="_blank">Read</a>';
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

