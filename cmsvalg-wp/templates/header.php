<?php /*
<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
*/ ?>
<header id="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div id="branding">
          <a href="/" class="site-name">CMSValg.dk</a>
          <p class="site-desc">din guide til valg af CMS</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div id="searchform" class="input-group">
          <span class="input-group-addon"><i class="icon-search"></i> </span>
          <input type="text" class="form-control input-lg" placeholder="Er der noget bestemt du søger?">
        </div>
      </div>
      <div class="col-md-4 col-sm-5">
        <div id="knowledge-cat" class="btn-group pull-left">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Alt vores CMS viden <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
        <div id="call-to-action" class="pull-right">
          <a href="#" class="btn btn-primary">Rådgivning</a>
        </div>
      </div>
    </div>
  </div>
  
</header>