<script src="https://bl.ocks.org/palerdot/raw/bf0c52d84aa046a6963c/pdf.js"></script>
<script src="https://bl.ocks.org/palerdot/raw/bf0c52d84aa046a6963c/modernizr.js"></script>
<?php
    $training = httpGet('https://pi.niua.org/api.php?mode=training');
    $training_module = json_decode($training,true);
   // echo '<pre>';
    //print_r($training_module);
    //echo '</pre>';
    ?>

<?php
/*$im = new imagick('/sites/all/themes/color_glass/pdf/NIUA40.pdf[0]');
$im->setImageFormat('jpg');
header('Content-Type: image/jpeg');
echo $im;
*/
$pdf = "/sites/all/themes/color_glass/pdf/NIUA40.pdf";
$info = pathinfo($pdf);
$file_name =  basename($pdf,'.'.$info['extension']);
echo $file_name;
$pdf = "filename.pdf[0]";
echo exec("convert $pdf convert-img/$file_name.jpg");   
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

