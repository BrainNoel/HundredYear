<?php
namespace Test\Controller;

use Common\Controller\HomeBaseController;

class IndexController extends HomeBaseController
{
    public function _initialize()
    {
        $preg = '/(.*?)/';
        B('Behavior\CronRun');
    }

    public function index()
    {

    }
}
