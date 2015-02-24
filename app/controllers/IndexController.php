<?php

use Phalcon\Mvc\Model\Criteria;

class IndexController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }

    public function indexAction()
    {
    	$this->persistent->parameters = null;
    }
}
