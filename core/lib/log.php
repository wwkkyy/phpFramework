<?php
namespace core\lib;

use core\lib\conf;

class log{
    
    static public $class;
    
    static public function init(){
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }
    
    static public function log($name,$file='log'){
        //p(self::$class);
        self::$class->log($name,$file);
    }
}