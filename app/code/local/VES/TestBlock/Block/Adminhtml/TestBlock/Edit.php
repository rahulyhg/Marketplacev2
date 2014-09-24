<?php

class VES_TestBlock_Block_Adminhtml_TestBlock_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'testblock';
        $this->_controller = 'adminhtml_testblock';
        
        $this->_updateButton('save', 'label', Mage::helper('testblock')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('testblock')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('testblock_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'testblock_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'testblock_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('testblock_data') && Mage::registry('testblock_data')->getId() ) {
            return Mage::helper('testblock')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('testblock_data')->getTitle()));
        } else {
            return Mage::helper('testblock')->__('Add Item');
        }
    }
}