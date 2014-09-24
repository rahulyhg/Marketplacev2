<?php

class VES_TestBlock_Block_Adminhtml_TestBlock_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('testblock_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('testblock')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('testblock')->__('Item Information'),
          'title'     => Mage::helper('testblock')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('testblock/adminhtml_testblock_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}