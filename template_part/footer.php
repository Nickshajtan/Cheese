<?php
/**
* This template part for Footer part of site
* Include components for modal window
*
*/
?>
<!-- Footer part of theme -->    
            <div class="clearfix"></div>
            <!--Include modal blank-->
            <?php include_once(dirname(__FILE__).'/modal.php'); ?>    
            <?php include_once(dirname(__FILE__).'/contact_form.php'); ?> 
         <section class="footer-wrapper">
             <footer itemscope itemtype="http://schema.org/Footer">
               <?php if($this->countModules('position-13 or position-14 or position-15')) : ?>
                <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4">
                         <jdoc:include type="modules" style="xhtml" name="position-13"/>
                     </div>
                     <div class="col-sm-4">
                         <jdoc:include type="modules"  style="xhtml" name="position-14"/>
                     </div>
                     <div class="col-sm-4">
                         <button class="btn btn-lg">
                             <a id="contact-modal" class="open-modal" value="open modal" href="#contact-modal-form" data-toggle="modal" >Обратная связь</a>
                         </button>    
                         <jdoc:include type="modules" style="xhtml" name="position-15"/>
                     </div>
                 </div>
                 </div>
                <?php endif; ?>    
                     <jdoc:include type="modules" name="footer"/>     
                 
             </footer>
         </section>  
        </div>
    </body>
</html>