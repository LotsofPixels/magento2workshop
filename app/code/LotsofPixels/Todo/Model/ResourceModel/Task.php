<?php


namespace LotsofPixels\Todo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Task extends AbstractDb
{
 protected function _construct()
 {
     $this->_init( 'lotsofpixels_todo_task',idFieldname:'task_id');
 }
}