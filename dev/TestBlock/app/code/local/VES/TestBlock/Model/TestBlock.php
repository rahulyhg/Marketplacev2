<?php

class VES_TestBlock_Model_TestBlock extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('testblock/testblock');
    }
}