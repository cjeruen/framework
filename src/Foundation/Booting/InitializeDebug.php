<?php

namespace ZanPHP\Framework\Foundation\Booting;

use ZanPHP\Config\Config;
use ZanPHP\Framework\Contract\Foundation\Bootable;
use ZanPHP\Framework\Foundation\Application;
use ZanPHP\Framework\Foundation\Core\Debug;

class InitializeDebug implements Bootable
{
    public function bootstrap(Application $app)
    {
        Debug::detect();
        Config::set('debug', Debug::get());
    }
} 