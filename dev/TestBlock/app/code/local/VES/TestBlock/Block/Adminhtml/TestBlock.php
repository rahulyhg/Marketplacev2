<?php
class VES_TestBlock_Block_Adminhtml_TestBlock extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_testblock';
    $this->_blockGroup = 'testblock';
    $this->_headerText = Mage::helper('testblock')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('testblock')->__('Add Item');
    parent::__construct();
  }
}