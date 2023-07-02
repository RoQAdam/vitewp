<?php

namespace Vitewp;

use Vitewp\Theme\Setup;
use Vitewp\Authors\Authors;
use Vitewp\Opinions\Opinions;

class Vitewp
{
    protected static array $instances;

    public function __construct()
    {
        new Setup();
        new Authors();
        new Opinions();
        
        if (function_exists('acf_register_block_type')) {
            new Blocks();
        }
    }

    public static function get()
    {
        $class = get_called_class();

        if (! isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }
        
        return static::$instances[$class];
    }
}
