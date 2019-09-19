<?php
/**
* This template for modal blank
* 
*/
?>
<?php if($home_page) : ?>
           <!--[if lt IE 9]>
           <div class="modal modal-ie">
           </div><![endif]-->
            <div class="modal fade" id="modal-form" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--Header of modal-->
                        <div class="modal-header">
                           <a href="#" id="modal-close" data-dismiss="modal" aria-hidden="true">X</a>
                        </div>
                        <div class="register modal-body">
                           <form action="" method="post">
                                <fieldset>
                                    <p class="first">
                                        <label for="name">Имя:&nbsp;&nbsp;</label>
                                        <input type="text" name="name" id="name" size="30">
                                    <p>
                                    <p>
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" size="30">
                                    </p>
                                    <p class="submit">
                                        <input type="submit" value="Подписаться!" class="btn">
                                    </p>
                                 </fieldset>
                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
          
        <?php endif; ?>