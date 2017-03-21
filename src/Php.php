<?php

namespace Amaro\Composer;

use Composer\Script\Event;

class Php
{
    public static function configure()
    {
        copy(dirname(__FILE__) . '/../script/pre-commit', './.git/hooks/pre-commit');
    }
}
