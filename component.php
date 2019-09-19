<?php
/**
 * This template is version for print
 *
 */
include __DIR__ . '/template_part/component/com-functions.php'; //include settings of site
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
</head>
<body class="contentpane modal">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>  