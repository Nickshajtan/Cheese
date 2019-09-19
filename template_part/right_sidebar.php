<?php
/**
* This template part for Right Sidebar of page
*
*/
?>
<?php if($this->countModules('position-9 or position-10 or position-11')) : ?>
<div class="col-md-2 sidebar-right">
    <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-9"/>
    </div>
    <div class="clearfix"></div>
     <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-10"/>
      </div>
      <div class="clearfix"></div>
       <div class="col-sm-12 sidebar">
                   <!--google ad
                   You can use these blocks as widget area or ad area
                   -->
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js" >
                    </script>
                    <jdoc:include type="modules" name="position-11"/>
        </div>
        <div class="clearfix"></div>             
</div>
<?php endif; ?>