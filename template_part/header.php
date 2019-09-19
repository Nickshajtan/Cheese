<?php
/**
* This template part for two menus in header part
*
*/
?>
<!-- Header part of theme for two menus -->    
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
                <?php echo $logo; ?>
            </div>
            <!-- Search -->
            <jdoc:include type="modules" name="position-0"/>
            <!--Dropdown menu-->                     
            <div role="menu" class="nav navbar-nav nav-menu" id="first-top-menu" >
                <jdoc:include type="modules" name="position-1"/>
            </div>      
        </div>  
            <!-- For mobile screen -->                            
            <div id="navbar-collapse-2" class="collapse navbar-collapse">           
                <!--Dropdown menu-->               
                <div role="menu" class="nav navbar-nav nav_menu" id="second-top-menu">
                    <jdoc:include type="modules" name="position-1"/>
                </div>
            </div>
       </div>
       
    </nav>
    </header>
</section>
 <!-- Include banner part of site -->    
    <?php include_once(dirname(__FILE__).'/banner.php'); ?>