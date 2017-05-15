<?php

namespace Amaro\Composer;

class Php
{
    public static function configure()
    {
        copy(dirname(__FILE__) . '/../script/pre-commit', './.git/hooks/pre-commit');
        chmod('./.git/hooks/pre-commit', 0755);
    }
}
