<?php
class VES_TestBlock_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/testblock?id=15 
    	 *  or
    	 * http://site.com/testblock/id/15 	
    	 */
    	/* 
		$testblock_id = $this->getRequest()->getParam('id');

  		if($testblock_id != null && $testblock_id != '')	{
			$testblock = Mage::getModel('testblock/testblock')->load($testblock_id)->getData();
		} else {
			$testblock = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($testblock == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$testblockTable = $resource->getTableName('testblock');
			
			$select = $read->select()
			   ->from($testblockTable,array('testblock_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$testblock = $read->fetchRow($select);
		}
		Mage::register('testblock', $testblock);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}