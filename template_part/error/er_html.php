<?php
/**
* This file for head part of error page
*
*/
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
	<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
        <!--If use google font styles -->
     <?php if ($params->get('googleFont')) : ?>
		<link href="//fonts.googleapis.com/css?family=<?php echo $params->get('googleFontName'); ?>" rel="stylesheet" />
		<style>
			h1, h2, h3, h4, h5, h6, .site-title {
				font-family: '<?php echo str_replace('+', ' ', $params->get('googleFontName')); ?>', sans-serif;
			}
		</style>
	<?php endif; ?>
	
	<?php if ($app->get('debug_lang', '0') == '1' || $app->get('debug', '0') == '1') : ?>
		<link href="<?php echo JUri::root(true); ?>/media/cms/css/debug.css" rel="stylesheet" />
	<?php endif; ?>
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<!--Template color-->
	<?php if ($params->get('templateColor')) : ?>
		<style>
			body.site {
				border-top: 3px solid <?php echo $params->get('templateColor'); ?>;
				background-color: <?php echo $params->get('templateBackgroundColor'); ?>
			}
			a {
				color: <?php echo $params->get('templateColor'); ?>;
			}
			.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover {
				background: <?php echo $params->get('templateColor'); ?>;
			}
			.navbar-inner {
				-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
				-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
				box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			}
		</style>
	<?php endif; ?>
	<!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet" />
      <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/libs/bootstrap/js/bootstrap.min.js" ></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
      <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/libs/jQuery-Rollbar/css/liimeBar.css" rel="stylesheet" />
      <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/libs/jQuery-Rollbar/js/jquery.mousewheel.min.js" ></script>
      <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/libs/jQuery-Rollbar/js/jquery.liimeBar.packed.js" ></script>
       <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/scripts.js" ></script>
  </head>
  <body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">