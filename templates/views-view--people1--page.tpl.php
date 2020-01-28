
<body>

	<?php
	$id =$_GET['id']; 
	$user_nid = ['nid'=>$id];
    $userData = httpGet('https://pi.niua.org/api.php?mode=user_details',$user_nid);
    $userDetails = json_decode($userData,true);
	//print_r($userDetails);
	?>
 
   
	<div class="container emp-profile">
		<div class="card">
    <div class="shadow">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
							<?php
							if(!empty($userDetails['image'])){
						  echo'<img class="profile" style="border: 2px solid lightgray;" src="'.$userDetails['image'].'">';
						  }
						else {
                          echo '<img style="border: 5px solid #164c81;" src="https://pi.niua.org/sites/all/themes/office/images/user-dummy-image.png">';
                            }
							
		                  ?>					
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="name"><b>Name</b><br>
						<?= $userDetails['first_name']; ?>&nbsp;<?= $userDetails['last_name']; ?></div><br>
                        <div class="designation"><b>Designation</b><br>
                        <?= $userDetails['designation']; ?></div><br>
                        <div class="bio" style="text-align: justify;"><b>Bio</b><br>
						<?= $userDetails['bio']; ?></div><br>
                    </div>
                </div>
                <div class="row mar-top">
                    <div class="col-md-4">
						<div class="project-name"><b>Projects List</b></div>
                        <ul style="padding-left: 15px;"><?php
                              foreach($userDetails['projects'] as $projectname)
							  {
								  //echo '<li>';
                                  echo '<li><h5><a href="/projectdetails/?pid='.$projectname['pid'].'" >'.$projectname['name'].'</a></h5>';
                                  echo '</li>';
                              }
                          ?>
                        </ul>
                    </div>
					
                    <div class="col-md-8 ">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Publication</a></li>
                            <li><a data-toggle="tab" href="#menu1">Journals</a></li>
                            <li><a data-toggle="tab" href="#menu2">Blogs</a></li>
                            <li><a data-toggle="tab" href="#menu3">Societies</a></li>
                          </ul>
                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                              <div class="publication-link">
                                  <?php if (!empty($userDetails['Publication_link'])) {
								 foreach($userDetails['Publication_link'] as $Publication_link){
									 echo '<li>';
									 echo'Link:&nbsp;';echo $Publication_link;
									 echo '</li><br>';
								 }
								  }
								 ?>
								 </div>
                                <div class="Publication-upload">
									 <?php if (!empty($userDetails['Publication_upload'])) {
								 foreach($userDetails['Publication_upload'] as $publication_upload){
									 echo '<li>';
									 echo 'Upload:&nbsp;';echo'<a href="'.$publication_upload.'">'.$publication_upload.'</a>' ;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                  </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                            <div class="journals-link">
								  <?php if (!empty($userDetails['journals_link'])) {
								 foreach($userDetails['journals_link'] as $journals_link){
									 echo '<li>';
									 echo 'Link:&nbsp;';echo $journals_link;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                 </div>
                                <div class="journals-upload">
									  <?php if (!empty($userDetails['journals_upload'])) {
								 foreach($userDetails['journals_upload'] as $journals_upload){
									 echo '<li>';
									 echo'Upload:&nbsp;';echo $journals_upload;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                  </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
								
                              <div class="blog-link">  
								  <?php if (!empty($userDetails['blog_link'])) {
								 foreach($userDetails['blog_link'] as $blog_link){
									 echo '<li>';
									echo'Link:&nbsp;'; echo $blog_link;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                  </div>
                                <div class="blog-upload">
									  <?php if (!empty($userDetails['blog_upload'])) {
								 foreach($userDetails['blog_upload'] as $blog_upload){
									 echo '<li>';
									 echo 'Upload:&nbsp;'; echo $blog_upload;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                  </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
								
                             <div class="societies-link">
                                  
								  <?php if (!empty($userDetails['societies_link'])) {
								 foreach($userDetails['societies_link'] as $societies){
									 echo '<li>';
									 echo 'Link:&nbsp;';echo $societies;
									 echo '</li><br>';
								 }
								  }
								 ?></div>
                                <div class="societies-upload">
									  <?php if (!empty($userDetails['societies_upload'])) {
								 foreach($userDetails['societies_upload'] as $societies_upload){
									 echo '<li>';
									 echo 'Upload:&nbsp;';echo $societies_upload;
									 echo '</li><br>';
								 }
								  }
								 ?>
                                 </div>
                            </div>
                          </div>
                 </div>
               </div>
    </div>
    
    </div>
	</div>
</body>

