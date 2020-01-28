
<body>
    <?php
    $project_nid = ['nid'=>2];
    $projList = httpGet('https://pi.niua.org/api.php?mode=project_list',$project_nid);
    $projList = json_decode($projList,true);
    //echo '<pre>';
    //print_r($projList);
    //echo '</pre>';
    ?>
	
<div class="container emp-profile shadow">
                
<div class="project-list1">
<div class="head-tit">
	<div class="row">
	 
 <?php if (!empty($projList)) 
{
     foreach($projList as $project_list)
	 {
		 echo '<div class="card col-md-12">';   
	   
	 	 echo '<b><h3 style="font-size:20px;"><a href="/projectdetails/?pid='.$project_list['project_id'].'" >'.$project_list['project_name'].'</a></h2></b>';
	   	
	  	echo '<p style="text-align: justify;"><b>Status:&nbsp;'.$project_list['status'].'</b>'; 
	  	echo '<b>&nbsp; | &nbsp; Contact Person:&nbsp;'.$project_list['contact_person'].'</b>';
	  	echo '<br>';
		echo 'Description:&nbsp;'.substr($project_list['description'],0,250).'....<a href="/projectdetails/?pid='.$project_list['project_id'].'">Read More</a>';
	  	echo '</p>';
		echo '</div>';
      }
}
		
	?>
	

	
</div>

</div>
    </div>
    </div>
</body>


	