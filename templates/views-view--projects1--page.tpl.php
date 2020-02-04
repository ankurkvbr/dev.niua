<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
<scrpt><script>
$( document ).ready(function() {
//grabs the hash tag from the url
var hash = window.location.hash;
//checks whether or not the hash tag is set
if (hash != "") {
//removes all active classes from tabs
$('#tabs li').each(function() {
$(this).removeClass('active');
});
$('#myTabContent div').each(function() {
  $(this).removeClass('in active');
});
//this will add the active class on the hashtagged value
var link = "";
$('#tabs li').each(function() {
  link = $(this).find('a').attr('href');
  if (link == hash) {
    $(this).addClass('active');
  }
});
$('#myTabContent div').each(function() {

  link = $(this).attr('id');
  if ('#'+link == hash) {

    $(this).addClass('in active');
  }
});
}
});
</script></scrpt>
<style>
.row.resources {
    padding: 0px !important;
}</style>
<body>
    <?php
	$pid =$_GET['pid'];
    $project_nid = ['nid'=>$pid];
    $projData = httpGet('https://pi.niua.org/api.php?mode=project_details',$project_nid);
    $projDetails = json_decode($projData,true);
    //echo '<pre>';
   // print_r($projDetails);
   // echo '</pre>';
    ?>
<div class="container emp-profile shadow">
	<div class="card">
                <div class="row">
                    <div class="col-md-8">
                         <div class="project-name"><b>PROJECT NAME:</b><br>
						<?= $projDetails['name']; ?></div><br>
                        <div class="funding-agency"><b>CLIENT/FUNDER: </b><br>
                       <?= $projDetails['funding_agency']; ?></div><br>
                        <div class="duration"><b>DURATION :</b><br>
						<?= $projDetails['duration']; ?>&nbsp;years</div><br>
                    </div>
                    <div class="col-md-4">
                        <div class="web-link"><b>PROJECT WEB LINK  </b><br>
                        <?php
						echo'<a href="'.$projDetails['website'].'"target="_blank">'.$projDetails['website'].'</a>' ;
							?></div><br>
                        <div class="event"><b>UPCOMING EVENTS </b><br>No Events</div><br>
                        </div>
                </div>
    <div class="row">
    <div class="col-md-12">
    <ul class="nav nav-tabs" id="tabs">
    <li class="active"><a data-toggle="tab" href="#about">ABOUT</a></li>
    <li><a data-toggle="tab" href="#home">TEAM</a></li>
    <li><a data-toggle="tab" href="#menu1">GEOGRAPHY</a></li>
    <li><a data-toggle="tab" href="#menu2">GALLERY</a></li>
    <li><a data-toggle="tab" href="#menu3">RESOURCES  </a></li>
  </ul>

  <div class="tab-content"  id="myTabContent">
      <div id="about" class="tab-pane fade in active">
      <div class="description" style="text-align: justify;"><?= $projDetails['description']; ?></div>
    </div>
    <div id="home" class="tab-pane fade">
      <div class="team"><?php
          foreach($projDetails['team'] as $b){
             echo '<b>Name:&nbsp;'.$b['name'].'</b>'; echo'<p>Designation:&nbsp;'.$b['designation'].'</p>';
                echo '<br>';
             }
		  ?></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="region"><?php
          foreach($projDetails['region'] as $a){
			  echo'<br>';
              echo $a;
			  }
          ?>
          </div>
    </div>
    <div id="menu2" class="tab-pane fade">
		
		<div class="row resources">
      <p><?php
		 foreach($projDetails['gallery'] as $gallery){
			echo '<div class="col-md-3"> 
			  <div class="card" style="margin-bottom:20px;">';
		 echo '<a href="'.$gallery.'" target="_blank" class="gallery">';
 echo '<img src="'.$gallery.'" style="width:100%;height:200px;">';
			echo '</a></div></div>'; 
			  }
		  ?></p></div>

		<script>
   
$(function() {
  $('a.gallery').colorbox({
    rel: 'images',
    transition: "fade",
    opacity: 0.5,
	  maxHeight:'100%',
	  maxWidth:'100%'
    
  });
});
    </script>
    </div>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div id="menu3" class="tab-pane fade">
		<div class="row resources">
		<p><b>Newsletter:</b><?php
		foreach($projDetails['newsletter'] as $newsletter){
			  echo '<div class="col-md-2"> 
			  <div class="card" style="margin-bottom:20px;width: 100%;padding: 0px;box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2);">'; 
		      echo'<a href="'.$newsletter.'"target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>' ;
			  echo '</div></div>';
		  }
		?></p>
		</div>
		<hr>
		<div class="row resources">
        <p><b>Training Module:</b><?php
		foreach($projDetails['training_module'] as $training){
			 
			  echo '<div class="col-md-2"> 
			  <div class="card" style="margin-bottom:20px;width: 100%;padding: 0px;box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2);">'; 
		      echo'<a href="'.$training.'"target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>' ;
			  echo '</div></div>'; 
		   //echo $training ;
		  }
		  
		  ?></p>
		</div>
		<hr>
		<div class="row resources">
			<p><b>IEC Material:</b><?php
		
		  foreach($projDetails['iec_material'] as $iec_material){
			  echo '<div class="col-md-3"> 
			  <div class="card" style="margin-bottom:20px;width: 100%;padding: 0px;box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2);">'; 
		      echo'<a href="'.$iec_material.'"target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>' ;
			  echo '</div></div>';   
		 
		  }
		  ?></p>
			</div>
		    <hr>
			<div class="row resources">
				<p><b>GIS Material:</b><?php
		
		  foreach($projDetails['gis_material'] as $gis_material){
			  
		 	  echo '<div class="col-md-3"> 
			  <div class="card" style="margin-bottom:20px;width: 100%;padding: 0px;box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2);">'; 
		      echo'<a href="'.$gis_material.'"target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>' ;
			  echo '</div></div>';
		  }
		  
		  ?></p>
		</div>
		<hr>
		<div class="row resources">
			<p><b>Project Brochure:</b><?php
		
		  foreach($projDetails['project_brochure'] as $project_brochure){
			  echo '<div class="col-md-3"> 
			  <div class="card" style="margin-bottom:20px;width: 100%;padding: 0px;box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2);">'; 
		      echo'<a href="'.$project_brochure.'"target="_blank"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>' ;
			  echo '</div></div>';;
		  }?></p></div>
    </div>
  </div>
    </div>
    </div>
    </div>
	</div>
</body>

