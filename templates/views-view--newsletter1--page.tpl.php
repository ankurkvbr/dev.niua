<?php
    $news = httpGet('https://pi.niua.org/api.php?mode=newsletter');
    $newsletter = json_decode($news,true);
    //echo '<pre>';
    //print_r($newsletter);
    //echo '</pre>';
    ?>

  
<div class="container-fluid">
<div class="row">
	

  <?php if (!empty($newsletter)) {
    foreach ($newsletter[0] as $news_letter) {
		
	echo '<div class="col-md-3">
        <div class="card" style="margin-bottom:20px;">';

         // echo $news_letter;
 echo '<iframe src="'.$news_letter.'"  style="width:100%;height:260px;" frameborder="0"></iframe>';
 echo '<a href="'.$news_letter.'"target="_blank">Read</a>';
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

