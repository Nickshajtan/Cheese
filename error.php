<?php
/**
* This file for error messages
*
*/

defined( '_JEXEC' ) or die( 'Restricted access');
jimport('joomla.application.module.helper');
// Get language and direction
$doc             = JFactory::getDocument();
$app             = JFactory::getApplication();
$this->language  = $doc->language;
$user            = JFactory::getUser();
$this->direction = $doc->direction;
// Output document as HTML5.
if (is_callable(array($doc, 'setHtml5')))
{
	$doc->setHtml5(true);
}

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');
$sitedescription = $app->get('sitedescription');
$menu            = $app->getMenu();

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Logo file or site title param
if ($params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" itemtype="https://schema.org/ImageObject" itemscope="itemscope" itemprop="logo"  alt="' . $sitename . '" />';
}
elseif ($params->get('sitetitle'))
{
	$logo = '<span itemscope="itemscope" itemprop="logo" class="site-title"  title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span itemscope="itemscope" itemprop="logo" class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}

$template_url = $this->baseurl . '/templates/' . $this->template;
$home_url = $this->baseurl;
$home_page =(JURI::getInstance()->toString()==JURI::base());

include __DIR__ . '/template_part/error/er_html.php'; //include Head part of page
include __DIR__ . '/template_part/error/er_header.php'; //include Header part of page
include __DIR__ . '/template_part/error/er_content.php'; //include Content part of page
include __DIR__ . '/template_part/error/er_footer.php'; //include Footer part of page