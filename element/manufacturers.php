<?php
defined('_JEXEC') or die('Restricted access');
if(!defined('DS')) define('DS',DIRECTORY_SEPARATOR);

jimport('joomla.form.formfield');
require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS."lib".DS."factory.php");
require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS."lib".DS."jtableauto.php");
require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS.'tables'.DS.'config.php');
require_once (JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS."lib".DS."functions.php");
JTable::addIncludePath(JPATH_SITE.DS.'components'.DS.'com_jshopping'.DS.'tables');

class JFormFieldManufacturers extends JFormField {

        protected $type = 'Manufacturers';

        public function getInput() {
            $manufacturer = JTable::getInstance('manufacturer', 'jshop');
            $manufacturers=$manufacturer->getAllManufacturers(1);
            $first_el = JHTML::_('select.option', 0, JText::_('JALL'), 'manufacturer_id', 'name' );
            array_unshift($manufacturers, $first_el);
            return JHTML::_('select.genericlist', $manufacturers, $this->name, 'size="10" multiple class = "inputbox" ', 'manufacturer_id', 'name', $this->value);
        }
}
