<?php
define('IMOOC',realpath('./'));
define("CORE",IMOOC.'/core');
define('APP',IMOOC.'/app');
define('MODULE','\app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了';
    $options = new \Whoops\Handler\PrettyPageHandler();
    $options->setPageTitle($errorTitle);
    $whoops->pushHandler($options);
    $whoops->register();
    ini_set('display_error','On');
}
else{
    ini_set('dispaly_error','Off');
}

include CORE.'/common/function.php';
include CORE.'/immoc.php';
spl_autoload_register('\core\imooc::load');
\core\imooc::run();
