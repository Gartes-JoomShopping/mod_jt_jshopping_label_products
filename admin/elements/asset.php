<?php
/*
# ------------------------------------------------------------------------
# Templates for Joomla 1.6 / Joomla 1.7
# ------------------------------------------------------------------------
# Copyright (C) 2011 Jtemplate.ru. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: JTemplate.ru
# Websites:  http://www.jtemplate.ru 
# ---------  http://code.google.com/p/jtemplate/   
# ------------------------------------------------------------------------
*/
defined('JPATH_BASE') or die;
jimport('joomla.form.formfield');
class JFormFieldAsset extends JFormField {
        protected $type = 'asset';
        protected function getInput() {
                $doc = JFactory::getDocument();
                $doc->addStyleSheet(JURI::root().$this->element['path'].'style.css');
                return null;
        }
}class JFormFieldTsgcolor extends JFormField

{

	protected $type = 'tsgcolor';

	protected function getInput()

	{

	$document = JFactory::getDocument();

	$document->addScript(JURI::root() . 'modules/mod_jt_jshopping_latest/admin/jscolor.js');

	$size		= $this->element['size'] ? ' size="'.(int) $this->element['size'].'"' : '';

	$maxLength	= $this->element['maxlength'] ? ' maxlength="'.(int) $this->element['maxlength'].'"' : '';

	$id			= $this->element['id'] ? ' id="'.(string) $this->element['id'].'"' : '';

	$previewid	= $this->element['previewid'] ? ' id="'.(string) $this->element['previewid'].'"' : '';

	$readonly	= ((string) $this->element['readonly'] == 'true') ? ' readonly="readonly"' : '';

	$disabled	= ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';

	$onchange	= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';

	$html = array();

	$class = $this->element['class'] ? (string) $this->element['class'] : 'color';

	$value = htmlspecialchars(html_entity_decode($value, ENT_QUOTES), ENT_QUOTES);

	$background = ' style="background-color: '.$value.'"';

	return '<input type="text" name="'.$this->name.'" id="'.$this->id.'" '.$background.' class="'.$class.'" value="'.htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8').'">';

	}
	
}
?>