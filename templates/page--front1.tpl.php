
<?php
    $projData = httpGet('https://pi.niua.org/api.php?mode=data_count');
    $projDetails = json_decode($projData,true);
    
    ?>

<!--- sub header-->
<!--Banner-->

 <header  role="banner" class=" 1st-menu" style="background:#666;">
     <div class="page-mar">
  <div class="second-menu ">
  <ul >
  <li><a href="#"><i class="fa fa-home"></i></a></li>
  <li><a href="#" class="active"><i class="fa fa-arrow-down"></i>Skip to main content</a></li>
  <li><a href="#"><i class="fa fa-arrow-down"></i>Skip to Navigation</a></li>
  <li><a href="#"><i class="fa fa-volume-up"></i>Screen Reader Access</a></li>
  <li><a href="#">Text Size: A- A A+</a></li>
  </ul>
  </div>
         </div>
</header>


    <!---sub-header-tender-career menu-->
<header  role="banner" id="navbar" class="scnd-menu" style=" z-index:1045; background-color:#fff;">
    <div class="page-mar">
  <div class="second-sub menu">
      <div class="row">
         <!-- <div class="navbar-header col-md-1"></div>-->
          <div class="navbar-header col-md-3">
               <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
         <img src="/sites/all/themes/color_glass/images/NIUA_logo.svg" class="img-responsive logo-nav1" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
           </div>
          <div class="navbar-header col-md-4">  
          </div>
           <div class="navbar-header col-md-3">
           <?php print render($page['ten_car']); ?>
           </div>
          <div class="navbar-header col-md-2">
              <form class="search-form" id="" action="/search/node">
              <div class="">
             <input type="text1" name="keys" class="search form-control " placeholder="Search ">
              </div>
                </form>
            </div>
            </div>
<!--/.navbar-collapse -->
          </div>
    </div>
</header>

<header id="navbar" role="banner" class="navbar navbar-fixed-top navbar-default;">
    <div class="page-mar">
  <div class="container">
    <!--<div class="navbar-header col-md-4">
     
      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <?php endif; ?>
    </div>-->
<div class="navbar-header col-md-12">
    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation']) || !empty($search_box)): ?>
      <div class="navbar-collapse collapse pull-right">
        <nav role="navigation" class="shift">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
           <?php endif; ?>
          <!--disble drupal search bar-->
          <?php //if (!empty($search_box)): ?>
          <?php //print render($search_box); ?>
          <?php //endif; ?>
          <?php if (!empty($search_box)): ?>
         <?php endif; ?>    <!--disble drupal search bar-->
        </nav>
      </div>
    <?php endif; ?>
  </div>
  </div>
    </div>
</header>
    <!--header end-->
<div class = " no-padding  mar-top">
  <div class = "row banner">
    <div class = "col-sm-12" >
    <?php   print _bootstrap_region_render($page['home_welcome'], '', 'section', 'home-welcome', ''); ?>
    </div>
      <!-- <div class = "col-sm-4" >
       <?php print render($page['news']); ?>
    </div>-->
  </div>
  </div>
<!--events-news text-->
<div class="hom-txt-back">
<div class="page-mar">
  <div class = "container-fluid hom-txt ">
  <div class = "row n-e-text">
       <div class = "col-sm-12 text-center">
           <?php print render($page['Home_text']); ?>
      </div>
  </div>
  </div>
</div>
    </div>
<!--events-news text- end-->

<!--our work-end-->
<div class="new-event">
    <div class="page-mar">
  <div class = "container-fluid no-padding">
  <div class = "row n-e">
       <div class = "col-sm-1 twit">
      </div>
    <div class = "col-sm-4 news">
       <?php print render($page['events']); ?>
    </div>
      <div class = "col-sm-2 twit">
      </div>
          <div class = "col-sm-4 twit">
        <?php print render($page['twitter_social']); ?>
    </div>
  </div>
  </div>
</div>
</div>


<!--Niua at glance-->
<div class="hom-txt-back">
<div class="page-mar">
  <div class = "container-fluid hom-txt ">
  <div class = "row n-e-text">
       <div class = "col-sm-12 text-center">
           <?php print render($page['niua_glance']); ?>
      </div>
  </div>
  </div>
</div>
</div>
<!--Niua at glance-->

<!--Newsletter-registration-->
<div class="section-counter paralax-mf bg-image" style="background-image:   url(/sites/all/themes/color_glass/images/Lower_Banner.png)">
    <div class="page-mar">
  <div class = "container">
  <div class = "row news">
    <div class = "col-sm-12 dash">
        <div class="col-sm-3 col-lg-3">
<div class="counter-box counter-box pt-4 pt-md-0 aos-init aos-animate" data-aos="fade-right"data-aos-offset="100"data-aos-easing="ease-in-sine">
    <div class="counter-ico">
    <i class="fa fa-users fa-5x" style="color:#B66351"></i></div>
    <div class="counter-num">
    <p class="counter"><?= $projDetails['employee_count']; ?></p>
    <span class="counter-text" style="font-size:15px">Employee</span></div>
    </div>
        </div>

 <div class="col-sm-3 col-lg-3 aos-init aos-animate" data-aos="fade-right"
     data-aos-offset="200"
     data-aos-easing="ease-in-sine">
     <div class="counter-box counter-box pt-4 pt-md-0">
    <div class="counter-ico">
    <i class="fa fa-building fa-5x" aria-hidden="true" style="color:#BB9445"></i></div>
        <div class="counter-num">
        <p class="counter">4010</p>
        <span class="counter-text">ULBs</span></div>
        </div>
        </div>

  <div class="col-sm-3 col-lg-3 aos-init aos-animate" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
     <div class="counter-box counter-box pt-4 pt-md-0">
    <div class="counter-ico">
     <i class="fa fa-id-card-o fa-5x" aria-hidden="true" style="color:#83CA53"></i></div>
        <div class="counter-num">
        <p class="counter"><?= $projDetails['client_count']; ?></p>
        <span class="counter-text">Clients</span></div>
        </div>
        </div>

 <div class="col-sm-3 col-lg-3 aos-init aos-animate" data-aos="fade-right"
     data-aos-offset="400"
     data-aos-easing="ease-in-sine">
     <div class="counter-box counter-box pt-4 pt-md-0">
    <div class="counter-ico">
      <i class="fa fa-handshake-o fa-5x" aria-hidden="true" style="color:#F46F5F"></i>
    </div>
        <div class="counter-num">
        <p class="counter"><?= $projDetails['Partners_count']; ?></p>
        <span class="counter-text">Partners</span></div>
    </div>
        </div>
       <?php //print render($page['dashboard']); ?>
    </div>
  </div>
  </div>
    </div>
</div>
<!--Newsletter-registration-->
<div class="page-mar">
<div class = "container-fluid Newsletter">
  <div class = "container">
  <div class = "row news">
    <div class = "col-sm-12 news11 text-center "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
      <h3><i class="fa fa-university" aria-hidden="true"></i>Subscribe for regular updates</h3>
       <?php print render($page['newsletter_registration']); ?>
    </div>
  </div>
  </div>
</div>
</div>

<!--Newsletter registration-->
<footer id = "footer-section" class = "footer-section">
<?php
/* Print footer message block */
print _bootstrap_region_render($page['footer_message'], 'footer_message', 'div', 'footer-message', 'footer-message');
?>
<?php if (!empty($page['footer_block1']) || !empty($page['footer_block2']) || !empty($page['footer_block3']) || !empty($page['footer_social'])): ?>
<div class = "footer-blocks">
  <div class = "container mar-foot">
  <div class = "row">
    <div class = "col-sm-2 footer-menu footer-menu-1"aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block1']); ?>
    </div>
    <div class = "col-sm-2 footer-menu footer-menu-2 "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block2']); ?>
    </div>
    <div class = "col-sm-4 footer-menu footer-menu-3 "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block3']); ?>
    </div>
    <div class = "col-sm-4 footer-menu footer-social "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_social']); ?>
    </div>
  </div>
  </div>
</div>
<div class="icon-bar fadeInDown">
  <a href="https://twitter.com/NIUA_India" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="https://in.linkedin.com/school/national-institute-of-urban-affairs/"target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/channel/UC1OsC1MD0TajCJqqKqrsxeA"target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<?php endif; ?>

<?php print _bootstrap_region_render($page['footer_copyright'], 'footer_copyright', 'div', 'footer-copyright', 'footer-copyright text-center');
?>

</footer>

<?php if($theme_credits) : ?>
<div class = "theme-credit text-center clr-secondary-bg clr-link-color">
  <?php print $theme_credits; ?>
</div>
<?php endif; ?>
