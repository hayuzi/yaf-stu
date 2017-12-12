<?php

define('APPLICATION_PATH', dirname(__FILE__) . '/../');

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

// 添加自动加载本地类的代码 2017-12-23
$loader = Yaf_Loader::getIgnstance();
$loader->registerLocalNamespace(array("Local"));

$application->bootstrap()->run();
?>
