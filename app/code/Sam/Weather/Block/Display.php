<?php
namespace Sam\Weather\Block;

class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function time_result()
    {
        $objectManager =   \Magento\Framework\App\ObjectManager::getInstance();
        $connection = $objectManager->get('Magento\Framework\App\ResourceConnection')->getConnection('\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION');
        $result = $connection->fetchAll("SELECT * FROM `weather` ORDER BY id DESC LIMIT 1;");

        print_r($result[0]['time']);
    }

    public function temp_result()
    {
        $objectManager =   \Magento\Framework\App\ObjectManager::getInstance();
        $connection = $objectManager->get('Magento\Framework\App\ResourceConnection')->getConnection('\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION');
        $result = $connection->fetchAll("SELECT * FROM `weather` ORDER BY id DESC LIMIT 1;");

        print_r($result[0]['temp']);
    }
}
