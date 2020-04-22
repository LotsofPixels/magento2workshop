<?php

namespace LotsofPixels\Todo\Api;

/**
 * @api
 */
interface TaskManagementInterface
{
    public function save();
    public function delete();
}