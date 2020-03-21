<?php

namespace LotsofPixels\Todo\controller\Index;


class Index extends Action
{

    public function execute()
    {
        return $this->resultFactory->create(type:ResultFactory::TYPE_PAGE);
    }
}