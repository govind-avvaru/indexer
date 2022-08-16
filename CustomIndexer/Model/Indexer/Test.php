<?php
namespace I95dev\CustomIndexer\Model\Indexer;

use Magento\Framework\Indexer\ActionInterface as IndexerInterface;
use Magento\Framework\Mview\ActionInterface as MviewInterface;

class Test implements IndexerInterface, MviewInterface
{

    /*
	 * Used by mview, allows process indexer in the "Update on schedule" mode
	 */
	public function execute($ids){

		//code here!
	}

	/*
	 * Will take all of the data and reindex
	 * Will run when reindex via command line
	 */
	public function executeFull(){
		//code here!
	}
   
   
	/*
	 * Works with a set of entity changed (may be massaction)
	 */
	public function executeList(array $ids){
		//code here!
	}
   
   
	/*
	 * Works in runtime for a single entity using plugins
	 */
	public function executeRow($id){
		//code here!
	}
}


