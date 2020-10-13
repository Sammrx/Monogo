<?php
namespace Sam\Weather\Model;

use Sam\Weather\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    const CACHE_TAG = 'weather';

    protected $_cacheTag = 'weather';

    protected $_eventPrefix = 'weather';

    protected function _construct()
    {
        $this->_init('Sam\Weather\Model\ResourceModel\Grid');
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    public function getTime()
    {
        return $this->getData(self::TIME);
    }

    public function setTime($time)
    {
        return $this->setData(self::TIME, $time);
    }

    public function getTemp()
    {
        return $this->getData(self::TEMP);
    }

    public function setTemp($temp)
    {
        return $this->setData(self::TEMP, $temp);
    }

}
