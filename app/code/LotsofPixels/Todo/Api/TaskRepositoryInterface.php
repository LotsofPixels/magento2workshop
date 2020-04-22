<?php

namespace LotsofPixels\Todo\Api;

/**
 * @api
 */
interface TaskRepositoryInterface
{
    public function getlist();
    public function get(int $taskId);
}
