<?php
/**
 * @file
 * Front page template.
 */
?>
<!--- sub header-->


<!--Banner-->
<div class="page-mar">
    <!--header-->
    
    <header  role="banner" class="container-fluid">
  <div class="second-menu">
  <ul >
  <li><a href="#"><i class="fa fa-home"></i></a></li>
  <li><a href="#" class="active"><i class="fa fa-arrow-down"></i>Skip to main content</a></li>
  <li><a href="#"><i class="fa fa-arrow-down"></i>Skip to Navigation</a></li>
  <li><a href="#"><i class="fa fa-volume-up"></i>Screen Reader Access</a></li>
  <li><a href="#">Text Size: A- A A+</a></li>
  </ul>
  </div>
</header>
    
    <!---sub-header-tender-career menu-->
    <header id="navbar" role="banner" class="navbar navbar-fixed-top navbar-default">
  <div class="container">
      <div class="row">
          <div class="navbar-header col-md-8">
          </div>
          <div class="navbar-header col-md-3">
    <?php print render($page['ten_car']); ?>
          </div>
        <div class="navbar-header col-md-1">
    <div  class="navbar-collapse collapse">
        <div class="hidden-xs navbar-form navbar-right">
          <a class="search-form-tigger btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
        </div>
<!--/.navbar-collapse -->
</div>
    <div class="search-form-wrapper">
    <form class="search-form" id="" action="/search/node">
      <div class="input-group">
     <input type="text" name="keys" class="search form-control" placeholder="Search">
     <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i>
     </span>
  </div>
</form>
</div>
      </div>
        </div>
    </header>
     <!---sub-header-tender-career menu end-->


    
    
<!---sub-header-end-->
<header id="navbar" role="banner" class="navbar navbar-fixed-top navbar-default">
  <div class="container">
    <div class="navbar-header col-md-3">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
         
            <img src="/sites/all/themes/color_glass/images/niua_logo1.png" class="img-responsive logo-nav1" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>
<div class="navbar-header col-md-9">
    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation']) || !empty($search_box)): ?>
      <div class="navbar-collapse collapse pull-right">
        <nav role="navigation">
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
</header>

    <!--header end-->
<div class = "container-fluid no-padding  mar-top">
  <div class = "row banner">
    <div class = "col-sm-8" >
    <?php   print _bootstrap_region_render($page['home_welcome'], 'home_welcome', 'section', 'home-welcome', 'home-welcome home-section'); ?>
    </div>
       <div class = "col-sm-4" >
       <?php print render($page['news']); ?>
    </div>
  </div>
  </div>

<!--banner-end-->
  <div class = "container-fluid no-padding">
  <div class = "row n-e">
    <div class = "col-sm-3 news">
       <?php print render($page['events']); ?>
    </div>
    <div class = "col-sm-3 events">
       <?php print _bootstrap_region_render($page['home_bottom'], 'home_bottom', 'div', 'home-bottom', 'home-bottom home-section'); ?>
    </div>
          <div class = "col-sm-3 events">
        <?php print render($page['videos_home']); ?>
    </div>
          <div class = "col-sm-3 twit">
        <?php print render($page['footer_social']); ?>
    </div>

  </div>
  </div>




<!--our work-end-->



<!-- Render the Content yellow Region -->

<!--Newsletter-registration-->
<div class="container-fluid section-counter paralax-mf bg-image" style="background-image: url(/sites/all/themes/color_glass/images/Lower_Banner.png)">
<div class="overlay-mf">&nbsp;</div>
  <div class = "container">
  <div class = "row news">
    <div class = "col-sm-12 dash">
        <div class="col-sm-3 col-lg-3">
<div class="counter-box counter-box pt-4 pt-md-0 aos-init aos-animate" data-aos="fade-right"
     data-aos-offset="100"
     data-aos-easing="ease-in-sine">
    <div class="counter-ico">
    <i class="fa fa-users fa-5x" style="color:#B66351"></i></div>
<div class="counter-num">
<p class="counter">142</p>
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
<p class="counter">21</p>
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
    <p class="counter">29</p>
    <span class="counter-text">Partners</span></div>
    </div>
        </div>
       <?php //print render($page['dashboard']); ?>
    </div>
  </div>
  </div>
</div>
<!--Newsletter-registration-->
<div class = "container-fluid Newsletter">
  <div class = "container">
  <div class = "row news">
    <div class = "col-sm-12 news1 text-center "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
      <h2><i class="fa fa-university" aria-hidden="true"></i>  CONNECT WITH NIUA</h2>
      <h3>ENTER YOUR EMAIL ADDRESS<br> FOR REGULAR UPDATES</h3>
       <?php print render($page['newsletter_registration']); ?>
    </div>
  </div>
  </div>
</div>

<!--Newsletter registration-->

<footer id = "footer-section" class = " container-fluid footer-section">
<?php
/* Print footer message block */
print _bootstrap_region_render($page['footer_message'], 'footer_message', 'div', 'footer-message', 'footer-message');
?>
<?php if (!empty($page['footer_block1']) || !empty($page['footer_block2']) || !empty($page['footer_block3']) || !empty($page['footer_social'])): ?>
<div class = "footer-blocks">
  <div class = "container">
  <div class = "row">
    <div class = "col-sm-3 footer-menu footer-menu-1"aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block1']); ?>
    </div>
    <div class = "col-sm-3 footer-menu footer-menu-2 "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block2']); ?>
    </div>
    <div class = "col-sm-3 footer-menu footer-menu-3 "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
       <?php print render($page['footer_block3']); ?>
    </div>
    <div class = "col-sm-3 footer-menu footer-social "aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"">
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

<?php
/* Print copyright block */
print _bootstrap_region_render($page['footer_copyright'], 'footer_copyright', 'div', 'footer-copyright', 'footer-copyright text-center');
?>
</footer>
<?php if($theme_credits) : ?>
<div class = "theme-credit text-center clr-secondary-bg clr-link-color">
  <?php print $theme_credits; ?>
</div>
<?php endif; ?>
