<?php
namespace Test\Behavior;

use Think\Behavior;
use Think\Hook;

class NoelTestBehavior extends Behavior
{
    public function run(&$params)
    {
        echo 'haha';
        return 'haah';
    }
}
