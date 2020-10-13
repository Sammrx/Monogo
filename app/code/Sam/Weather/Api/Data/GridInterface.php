<?php
namespace Sam\Weather\Api\Data;

interface GridInterface
{

    const ID = 'id';
    const TIME = 'time';
    const TEMP = 'temp';

    public function getId();

    public function setId($id);

    public function getTime();

    public function setTime($tme);

    public function getTemp();

    public function setTemp($temp);

}
