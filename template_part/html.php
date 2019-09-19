<?php
/*
 * Html part of any page
 *
 */
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="head" />
    <!--[if lt IE 9]>
        <script <script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
        <![endif]-->  
  </head>
      <body itemscope="itemscope" itemtype="http://schema.org/WebPage" class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
	echo ($this->direction == 'rtl' ? ' rtl' : '');
?>">
        <div class="global global-wrapper<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
   
    