<?php
/**
* This template part for Left Sidebar of page
*
*/
?>
<?php if($this->countModules('position-4 or position-5 or position-6')) : ?>
<div class="col-sm-2 sidebar-left">
    <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-4"/>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-5"/>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-6"/>
    </div>                      
                
</div>
<?php endif; ?>