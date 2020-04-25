<?php

declare(strict_types=1);

namespace LotsofPixels\Todo\Service;

use LotsofPixels\Todo\Api\TaskRepositoryInterface;
use LotsofPixels\Todo\Model\ResourceModel\Task;
use LotsofPixels\Todo\Model\TaskFactory;

class TaskRepository implements TaskRepositoryInterface
{
    /**
     * @var Task
     */
    private $resource;

    /**
     * @var TaskFactory
     */
    private $taskFactory;

    /**
     * TaskRepository constructor.
     * @param Task $resource
     * @param TaskFactory $taskFactory
     */
    public function __construct(Task $resource, TaskFactory $taskFactory)
    {
        $this->resource = $resource;
        $this->taskFactory = $taskFactory;
    }

    public function getList()
    {
        // TODO: Implement getList() method.
    }

    public function get(int $taskId)
    {
        $object = $this->taskFactory->create();
        $this->resource->load($object, $taskId);
        return $object;
    }
}
