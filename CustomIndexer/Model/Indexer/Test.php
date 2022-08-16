<?php
namespace I95dev\CustomIndexer\Model\Indexer;

use Magento\Framework\Indexer\ActionInterface as IndexerInterface;
use Magento\Framework\Mview\ActionInterface as MviewInterface;

class Test implements IndexerInterface, MviewInterface
{

    /**
     * It's used by mview. It will execute when process indexer in "Update on schedule" Mode.
     */
    public function execute($ids)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Execute Method Call When Update on Schedule');
    }

    /**
     * Add code here for execute full indexation
     */
    public function executeFull()
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Execute Full Method Call When Re index using command line');
    }

    /**
     * Add code here for execute partial indexation by ID list
     */
    public function executeList(array $ids)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Execute List Method Call When partial indextion by id list');
    }

    /**
     * Add code here for execute partial indexation by ID
     */
    public function executeRow($id)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Execute Row Method Call When partial indextion by specific id');
    }
}


