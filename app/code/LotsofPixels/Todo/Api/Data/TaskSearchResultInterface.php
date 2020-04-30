<?php

declare(strict_types=1);

namespace LotsofPixels\Todo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * @api
 */
interface TaskSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getItems();

    /**
     * @param TaskInterface[] $items
     */
    public function setItems(array $items);
}
