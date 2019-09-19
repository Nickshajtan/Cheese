<?php
/**
* This file for content of error page
*
*/
?>
<section class="page-wrapper">
    <div class="clearfix"></div>
    <div class="container">
        <div class="col-sm-12">
            <div class="content-wrapper" itemscope itemtype="http://schema.org/Article" itemprop="articleBody">
               <center>
                    <h2 class="page-header">
                        <?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?>
                    </h2>
                </center>
				    <div class="row-fluid er-content">
                      <div class="space">
                           <p><strong>
                               <?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?>
                            </strong></p>
                           <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
                           <ul>
									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
				           </ul>
                        </div>
                        <div class="space">
               	                <?php if (JModuleHelper::getModule('search')) : ?>
									<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
								<?php endif; ?>
             
                        </div>
                        <hr />
               	        <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
               	        <?php if ($this->debug) : ?>
							<?php echo $this->renderBacktrace(); ?>
						<?php endif; ?>
                        <div class="space">
                           <div class="but-panel">
                                <form>
                                     <button id="home" class="btn btn-lg">
                             <a temprop="url" href="<?php echo $home_url; ?>">На главную</a>
                                     </button>
                                    </form>
                           </div>
                       </div>
                    </div>
            </div>
        </div>
    </div>
</section>    