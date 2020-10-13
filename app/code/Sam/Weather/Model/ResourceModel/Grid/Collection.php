<?php
namespace Sam\Weather\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Sam\Weather\Model\Grid', 'Sam\Weather\Model\ResourceModel\Grid');
    }
}
