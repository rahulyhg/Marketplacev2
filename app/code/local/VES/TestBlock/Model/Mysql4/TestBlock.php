<?php

class VES_TestBlock_Model_Mysql4_TestBlock extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the testblock_id refers to the key field in your database table.
        $this->_init('testblock/testblock', 'testblock_id');
    }
}