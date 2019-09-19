<?php
/**
* This file for header of error page
*
*/
?>
<section class="header-wrapper">
    <header itemscope="itemscope" itemtype="http://schema.org/Header">
      <!--Fixed top menu-->
    <nav itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement" role="navigation" class="navbar-fixed-top navbar">
       <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed coll" data-toggle="collapse" data-target="#navbar-collapse-2" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
         
            <!-- LOGO -->
                 <div class="logo navbar-brand">
                      <a class="brand pull-left" href="<?php echo $this->baseurl; ?>/">
                      <?php echo $logo; ?>
                     </a>
                </div>
                <!-- Search -->
                   <?php echo $doc->getBuffer('modules', 'position-0', array('style' => 'none')); ?>
                <!--Dropdown menu-->                     
            <div role="menu" class="nav navbar-nav nav-menu" id="first-top-menu" >
                <?php echo $doc->getBuffer('modules', 'position-1', array('style' => 'none')); ?>
            </div>      
        </div>  
            <!-- For mobile screen -->                            
            <div id="navbar-collapse-2" class="collapse navbar-collapse">           
                <!--Dropdown menu-->               
                <div role="menu" class="nav navbar-nav nav_menu" id="second-top-menu">
                    <?php echo $doc->getBuffer('modules', 'position-1', array('style' => 'none')); ?>
                </div>
            </div>
       </div>
       
    </nav>
    </header>
</section>
<section class="banner-wrapper">
    <!--Header image&name-->
    <div class="slogan-wrapper col-sm-12" role="banner">
        <?php echo $doc->getBuffer('modules', 'position-16', array('style' => 'none')); ?>
        <div class="clearfix"></div>
    </div>
    <div id="aministration_menu" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement" role="navigation" class="navbar nav">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="mouse-wrapper">
                <div class="col-sm-1 sm-mause">
                      <img id="mouse-left" class="img-responsive" src="<?php echo $template_url;?>/images/mouse/mouse-one.png" itemtype="https://schema.org/ImageObject">
                    </div>
                <div class="col-sm-12">
                  <center><h2 id="flag-title">Лучшие сорта сыра</h2></center>    
                   <img id="mouse-left" class="img-responsive lg-md-mause" src="<?php echo $template_url;?>/images/mouse/mouse-one.png" itemtype="https://schema.org/ImageObject" style="float:left;">
                
                 <img id="mouse-right" class="img-responsive lg-md-mause" src="<?php echo $template_url;?>/images/mouse/mouse-two.png" itemtype="https://schema.org/ImageObject" itemtype="https://schema.org/ImageObject" style="float:right;">
                  
                   <!--menu-slider-->
                  <div id="dock" class="dock mouse-menu-first">
                       <?php echo $doc->getBuffer('modules', 'position-12', array('style' => 'none')); ?>
                    </div>
                     <?php echo $doc->getBuffer('modules', 'search', array('style' => 'none')); ?>   
                </div>
                <div class="col-sm-1 sm-mause">    
                   <img id="mouse-right" class="img-responsive" src="<?php echo $template_url;?>/images/mouse/mouse-two.png" itemtype="https://schema.org/ImageObject" itemtype="https://schema.org/ImageObject">
                </div>
              </div>
            </div>
          </div>
                <!-- For mobile screen -->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <!--menu-slider-->
            <div id="dock" class="dock mouse-menu-second">
                    <?php echo $doc->getBuffer('modules', 'position-12', array('style' => 'none')); ?>
            </div>           
         </div>
    </div>
</section>
            