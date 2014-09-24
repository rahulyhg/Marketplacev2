<?php

class VES_TestBlock_Model_Mysql4_TestBlock_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('testblock/testblock');
    }
}