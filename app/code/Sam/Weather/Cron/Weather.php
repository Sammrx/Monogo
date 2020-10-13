<?php

namespace Sam\Weather\Cron;

class Weather
{

    public function execute()
    {
        $link = file_get_contents("http://api.weatherapi.com/v1/current.json?key=6d9fe7814a2d491486975313201210&q=Lublin");
        $link_json = json_decode($link);
        $temp = $link_json->current->temp_c;

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('weather');

        $sql = "Insert Into " . $tableName . " (temp, time) Values ($temp, now())";
        $connection->query($sql);
    }
}
