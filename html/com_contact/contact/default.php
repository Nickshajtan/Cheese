<?php
/**
 * Override contact template 
 *
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');
?>
<div class="contact<?php echo $this->pageclass_sfx?>" itemscope itemtype="https://schema.org/Person">

	<?php if ($this->contact->misc && $this->params->get('show_misc')) : ?>
		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', JText::_('COM_CONTACT_OTHER_INFORMATION'), 'display-misc'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'display-misc', JText::_('COM_CONTACT_OTHER_INFORMATION')); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'plain'):?>
			<?php echo '<h3>' . JText::_('COM_CONTACT_OTHER_INFORMATION') . '</h3>';  ?>
		<?php endif; ?>

            
            
		<div class="contact-miscinfo">
			<dl class="dl-horizontal">
				<dd>
                    <div class="col-sm-12">
                        <p><?php echo $this->contact->misc; ?></p>
                    </div>
				</dd>
			</dl>
		</div>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.endSlide'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php endif; ?>

	<?php endif; ?>
    


	<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
		<?php echo JHtml::_('bootstrap.endAccordion'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
		<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	<?php endif; ?>
	<?php echo $this->item->event->afterDisplayContent; ?>


<?php if ($this->params->get('show_page_heading')) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	<?php endif; ?>
	<?php if ($this->contact->name && $this->params->get('show_name')) : ?>
		<div class="page-header">
			<h2>
				<span class="contact-name" itemprop="name"><?php echo $this->contact->name; ?></span>
			</h2>
		</div>
	<?php endif; ?>
	<?php if ($this->params->get('show_contact_category') == 'show_no_link') : ?>
		<h3>
			<span class="contact-category"><?php echo $this->contact->category_title; ?></span>
		</h3>
	<?php endif; ?>
    <?php echo $this->item->event->afterDisplayTitle; ?>
	<?php if ($this->params->get('show_contact_category') == 'show_with_link') : ?>
		<?php $contactLink = ContactHelperRoute::getCategoryRoute($this->contact->catid); ?>
		<h3>
			<span class="contact-category"><a href="<?php echo $contactLink; ?>">
				<?php echo $this->escape($this->contact->category_title); ?></a>
			</span>
		</h3>
	<?php endif; ?>	
	
		<?php if ($this->params->get('show_contact_list') && count($this->contacts) > 1) : ?>
		<form action="#" method="get" name="selectForm" id="selectForm">
			<?php echo JHtml::_('select.genericlist', $this->contacts, 'id', 'class="inputbox" onchange="document.location.href = this.value"', 'link', 'name', $this->contact->link);?>
		</form>
	<?php endif; ?>
		<?php echo $this->item->event->beforeDisplayContent; ?>
		
			<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
		<?php echo JHtml::_('bootstrap.startAccordion', 'slide-contact', array('active' => 'basic-details')); ?>
	<?php endif; ?>

	<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'basic-details')); ?>
	<?php endif; ?>

	<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
		<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', 'basic-details'); ?>
	<?php endif; ?>

	<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'basic-details'); ?>
	<?php endif; ?>
<?php if ($this->params->get('presentation_style') == 'plain'):?>
		<!--Default-->
	<?php endif; ?>
		<?php if ($this->contact->image && $this->params->get('show_image')) : ?>
		<div class="thumbnail pull-right">
			<?php echo JHtml::_('image', $this->contact->image, array('align' => 'middle', 'itemprop' => 'image')); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->contact->con_position && $this->params->get('show_position')) : ?>
		<dl class="contact-position dl-horizontal">
			<dd itemprop="jobTitle">
				<?php echo $this->contact->con_position; ?>
			</dd>
		</dl>
	<?php endif; ?>
		<?php echo $this->loadTemplate('address'); ?>

	<?php if ($this->params->get('allow_vcard')) :	?>
		<?php echo JText::_('COM_CONTACT_DOWNLOAD_INFORMATION_AS');?>
		<a href="<?php echo JRoute::_('index.php?option=com_contact&amp;view=contact&amp;id=' . $this->contact->id . '&amp;format=vcf'); ?>">
		<?php echo JText::_('COM_CONTACT_VCARD');?></a>
	<?php endif; ?>
	<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>
	<?php endif; ?>

	<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
		<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>
		<?php if ($this->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) : ?>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', 'display-form'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'display-form'); ?>
		<?php endif; ?>

		<?php if ($this->params->get('presentation_style') == 'plain'): ?>
		<!--Default-->
		<?php endif; ?>

		<?php  echo $this->loadTemplate('form');  ?>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.endSlide'); ?>
		<?php endif; ?>

		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->params->get('show_links')) : ?>
		<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('show_articles') && $this->contact->user_id && $this->contact->articles) : ?>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', JText::_('JGLOBAL_ARTICLES'), 'display-articles'); ?>
		<?php endif; ?>

		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'display-articles', JText::_('JGLOBAL_ARTICLES')); ?>
		<?php endif; ?>

		<?php if ($this->params->get('presentation_style') == 'plain'):?>
			<?php echo '<h3>' . JText::_('JGLOBAL_ARTICLES') . '</h3>';  ?>
		<?php endif; ?>

		<?php echo $this->loadTemplate('articles'); ?>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.endSlide'); ?>
		<?php endif; ?>

		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php endif; ?>

	<?php endif; ?>
	<?php if ($this->params->get('show_profile') && $this->contact->user_id && JPluginHelper::isEnabled('user', 'profile')) : ?>
		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', JText::_('COM_CONTACT_PROFILE'), 'display-profile'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'display-profile', JText::_('COM_CONTACT_PROFILE', true)); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'plain'):?>
			<?php echo '<h3>' . JText::_('COM_CONTACT_PROFILE') . '</h3>';  ?>
		<?php endif; ?>

		<?php echo $this->loadTemplate('profile'); ?>

		<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
			<?php echo JHtml::_('bootstrap.endSlide'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php endif; ?>
	<?php endif; ?>	
    


</div>