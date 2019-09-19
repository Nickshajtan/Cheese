<?php
 /**
 * @package template
 * @file    index.php
 * @autor Nikita Nosov
 * @date: 17.01.18
 *
 *
 * Is a simple test template for Joomla 3.6
 * Home page
 *
 */
define('HACK', TRUE); 
//301 redirect
if($_SERVER['REQUEST_URI'] == '/index.php') 
{
    header("Location: /",TRUE,301);
    exit();
}
include __DIR__ . '/template_part/functions.php'; //include settings of site
include __DIR__ . '/template_part/html.php'; //include Head part of site
include __DIR__ . '/template_part/header.php'; //include Header part of site
include __DIR__ . '/template_part/page.php'; //include Template for Page 
include __DIR__ . '/template_part/footer.php'; //include Footer part of site


