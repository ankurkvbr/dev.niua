<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
<script>
 $(function() {
 $('a.gallery').colorbox({
 transition: "fade",
 opacity: 0.5,
 maxHeight:'100%',
 maxWidth:'100%',
   rel: 'gallery',
   href: $(this).attr('href'),
   click: $(this).click(),
   current: 'Item {current} of {total}'
  });
});
    </script>
<?php
    $gallery = httpGet('https://pi.niua.org/api.php?mode=gallery');
    $photo = json_decode($gallery,true);
    //echo '<pre>';
    //print_r($photo);
    //echo '</pre>';
    ?>

<section id="photos">
  <?php if (!empty($photo)) {
    foreach ($photo[0] as $photo_gallery) {
         // echo $news_letter;
 echo '<a href="'.$photo_gallery.'" target="_blank">';
 echo '<img src="'.$photo_gallery.'" style="width:100%;">';
          echo '</a>';
	}
}
  ?>

	
	</section>
	



    
