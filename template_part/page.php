<?php
/**
* This template part for Home page of site
*
*/
?>
<section class="page-wrapper">
    <div class="clearfix"></div>
    <div class="container-fluid">
        <div class="row-fluid">
         <!--Left column-->
               <?php include_once(dirname(__FILE__).'/left_sidebar.php'); ?>
          <!--Center column-->
          <?php
                if(($this->countModules('position-9 + position-10 + position-11') == 0) && ($this->countModules('position-4 + position-5 + position-6') == 0)){
                    $contpage = "12";
                }    
                elseif(($this->countModules('position-9 + position-10 + position-11') == 0) || ($this->countModules('position-4 + position-5 + position-6') == 0)){
                    $contpage = "10";
                }
                else{
                    $contpage = "8";
                }
            ?>
          <div class="col-sm-12 col-md-<?php echo $contpage ?> col-lg-<?php echo $contpage ?> ">
              <div class="content-wrapper" itemscope itemtype="http://schema.org/Article" itemprop="articleBody">
                        <!--Error message-->
                          <jdoc:include type="message"/>
                          <!--Content-->
                          <jdoc:include type="component"/>
                         <!--Check home page-->
                          <?php if (!$home_page) : ?>
                              <div class="but-panel">
                                <form>
                                 <button id="home" class="btn btn-lg">
                         <a temprop="url" href="<?php echo $home_url; ?>">На главную</a>
                                 </button>
                                </form>
                                <form>
                                 <button  class="btn btn-lg">
                                     <a href="#"><span id="up">Вверх</span></a>
                                 </button>
                                </form>        
                              </div>
                          <?php else : ?>
                                 <div class="but-panel">
                                      <form>
                                 <button  class="btn btn-lg">
                                     <a href="#"><span id="up">Вверх</span></a>
                                 </button>
                                </form>  
                                 </div> 
                          <?php endif; ?>
                    </div>

          </div>
          <!--Right column-->
                 <?php  include_once(dirname(__FILE__).'/right_sidebar.php'); ?>
          <div class="clearfix"></div>
        </div>
    </div>
</section>