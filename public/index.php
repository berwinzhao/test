<?php

/**
 * @description  描述
 * @author        berwin.zhao  Email: berwin.zhao@51job.com
 * @since         2016-4-23
 * @version       1.0
 * @copyright     Copyright (c) 2016, 51job 
 */


define("APP_PATH", realpath(dirname(__FILE__) . '/../')); 
$app = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();
