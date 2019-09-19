<?php
/**
* This template for modal blank of contact form button
* 
*/
?>
            <div class="modal fade" id="contact-modal-form" role="dialog">
                <div class="modal-dialog modal-contact" role="document">
                    <div class="modal-content">
                        <!--Header of modal-->
                        <div class="modal-header">
                           <h2>Свяжитесь с нами</h2>
                           <a href="#" id="modal-close" data-dismiss="modal" aria-hidden="true">X</a>
                        </div>
                        <div class="modal-body">
                        <?php if($this->countModules('position-17')) : ?>
                              <!--Any module-->
                              <jdoc:include type="modules" style="xhtml" name="position-17"/>
                          <?php endif; ?>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>