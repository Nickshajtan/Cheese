<?php
/**
* This template part for Banner part of site
* 
*
*/
?>
<section class="banner-wrapper">
    <div class="clearfix"></div>
     <?php if($this->countModules('position-2')) : ?>
         <div class="container">
              <!--Breadcrumbs-->
              <jdoc:include type="modules" name="position-2"/>
         </div>
    <?php endif; ?>     
    <?php if ($home_page) : ?>
      <!--Header image&name-->
      <div class="slogan-wrapper col-sm-12" role="banner">
       <div class="site-information">
            <h1 itemprop="title" class="site-name">
                 <?php echo $sitename ?>
            </h1>
            <p itemprop="description" class="site-slogan">
                  <?php echo $sitedescription ?>
            </p>
        </div>
        <?php if($this->countModules('position-8')) : ?>
               <jdoc:include type="modules" style="xhtml" name="position-8"/>
        <?php endif; ?>
        <div class="clearfix"></div>
      </div> 
    <?php else :?>
        <!--Header image&name-->
        <div class="slogan-wrapper col-sm-12" role="banner">
          <?php if($this->countModules('position-16')) : ?>       
               <jdoc:include type="modules" style="xhtml" name="position-16"/>
           <?php endif; ?>
            <div class="clearfix"></div>
        </div>
    <?php endif;?>
    <div class="clearfix"></div>
    <?php if($this->countModules('position-12')) : ?>
        <div id="aministration_menu" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement" role="navigation" class="navbar nav">
            <div class="container">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed coll" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                                <jdoc:include type="modules" name="position-12"/>
                          </div>
                          <jdoc:include type="modules" name="search"/>
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
                        <jdoc:include type="modules" name="position-12"/>
                  </div>
            </div>
          </div>
    <?php endif; ?>
    <?php if($home_page) : ?>
          <div class="container">
              <?php if($this->countModules('position-2')) : ?>
                  <!--Breadcrumbs-->
                  <jdoc:include type="modules" name="position-2"/>
              <?php endif; ?>
          </div>
    <?php endif; ?>  
</section>