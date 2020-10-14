<?php
/*
# ------------------------------------------------------------------------
# Templates for Joomla 2.5
# ------------------------------------------------------------------------
# Copyright (C) 2011-2012 Jtemplate.ru. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: Makeev Vladimir
# Websites:  http://www.jtemplate.ru 
# ---------  http://code.google.com/p/jtemplate/   
# 
*/
// No direct access.
defined('_JEXEC') or die;
error_reporting(E_ALL & ~E_NOTICE);

require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS."lib".DS."factory.php"); 
require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS."lib".DS."functions.php");        
   
$db = &JFactory::getDBO();
$jshopConfig = &JSFactory::getConfig();
$jshopConfig->cur_lang = $jshopConfig->frontend_lang;
?>