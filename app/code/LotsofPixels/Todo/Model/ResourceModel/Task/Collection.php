<?php

namespace LotsofPixels\Todo\Model\ResourceModel\Task;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use LotsofPixels\Todo\Model\Task;
use LotsofPixels\Todo\Model\ResourceModel\Task as TaskResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }
}
