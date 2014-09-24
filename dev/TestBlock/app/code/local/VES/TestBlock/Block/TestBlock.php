<?php
class VES_TestBlock_Block_TestBlock extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getTestBlock()     
     { 
        if (!$this->hasData('testblock')) {
            $this->setData('testblock', Mage::registry('testblock'));
        }
        return $this->getData('testblock');
        
    }
}