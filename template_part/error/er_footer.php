<?php
/**
* This file for footer of error page
*
*/
?>
<!-- Footer part of theme -->  
    <div class="clearfix"></div>
    <section class="footer-wrapper">
             <footer itemscope itemtype="http://schema.org/Footer">
                <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4">
                         <?php echo $doc->getBuffer('modules', 'position-13', array('style' => 'none')); ?>
                     </div>
                     <div class="col-sm-4">
                      <?php echo $doc->getBuffer('modules', 'position-14', array('style' => 'none')); ?>
                     </div>
                     <div class="col-sm-4">
                        <?php echo $doc->getBuffer('modules', 'position-15', array('style' => 'none')); ?>
                     </div>
                 </div>
                </div>
     <?php echo $doc->getBuffer('modules', 'footer', array('style' => 'none')); ?>
             </footer>
         </section>  
    </body>
</html>