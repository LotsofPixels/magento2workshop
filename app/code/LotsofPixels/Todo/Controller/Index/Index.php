<?php

declare(strict_types=1);

namespace LotsofPixels\Todo\Controller\Index;

use LotsofPixels\Todo\Model\ResourceModel\Task as TaskResource;
use LotsofPixels\Todo\Model\Task;
use LotsofPixels\Todo\Model\TaskFactory;
use LotsofPixels\Todo\Service\TaskRepository;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    private $taskResource;

    private $taskFactory;

    private $taskRepository;

    public function __construct(
        Context $context,
        TaskFactory $taskFactory,
        TaskResource $taskResource,
        TaskRepository $taskRepository
    ) {
        $this->taskFactory = $taskFactory;
        $this->taskResource = $taskResource;
        $this->taskRepository = $taskRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        $task = $this->taskRepository->get(1);

        var_dump($task);

        //       /** @var Task $task */
//        $task = $this->taskFactory->create();
//
//        $task->setData([
//            'label' => 'New Task 3',
//            'status' => 'open',
//            'customer_id' => 1
//        ]);
//
//        $this->taskResource->save($task);
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
