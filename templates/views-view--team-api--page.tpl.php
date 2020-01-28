<?php
    $userList = httpGet('https://pi.niua.org/api.php?mode=user_list');
    $userListing = json_decode($userList,true);
    //echo '<pre>';
    //print_r($variables);
    ?>
    <?php print render($page['content']['metatags']); ?>
<div class="container col-sm-12 no-padding user-list">
<div class="row">
    <section id="photos">
  <?php if (!empty($userListing)) {
    foreach ($userListing as $userData) {
      echo '
        <a href="/people1/?id='.$userData['user_id'].'" ><div class="" >';

          echo '<img src="'.$userData['image'].'" alt="'.$userData['first_name'].'" style="width:100%;">';

         /* echo '<div class="containr">
            <h2 style="font-size:20px;">'.$userData['first_name'].' '.$userData['last_name'].'</h2>
            <p class="title" style="height:40px;">'.$userData['designation'].'</p>
          </div>
        </a>
      ';*/
    }
  }
  ?>
        </section>
</div>
    </div>
