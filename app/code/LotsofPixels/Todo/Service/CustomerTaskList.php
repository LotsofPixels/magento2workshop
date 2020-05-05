<?php
declare(strict_types=1);

namespace LotsofPixels\Todo\Service;

use LotsofPixels\Todo\Api\CustomerTaskListInterface;
use LotsofPixels\Todo\Api\TaskRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use LotsofPixels\Todo\Api\Data\TaskInterface;

class CustomerTaskList implements CustomerTaskListInterface
    {
    /**
     * @var TaskRepositoryInterface
     */
        private $taskRepository;

    /**
     * @var SearchCriteriaBuilder
     */
        private $searchCriteriaBuilder;

        public function __construct(
            TaskRepositoryInterface $taskRepository,
            SearchCriteriaBuilder $searchCriteriaBuilder
        )
        {
            $this->taskRepository = $taskRepository;
            $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        }

    /**
     * @return TaskInterface[]
     */
    public function getList()
    {
    return $this->taskRepository
        ->getList($this->searchCriteriaBuilder->create())
        ->getItems();
    }
}