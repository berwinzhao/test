<?php

/**
 * @description  描述
 * @author        berwin.zhao  Email: berwin.zhao@51job.com
 * @since         2016-4-25
 * @version       1.0
 * @copyright     Copyright (c) 2016, 51job 
 */

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用, 
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher 
 * 调用的次序, 和申明的次序相同 
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {

    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {
        $dispatcher->setDefaultModule("Index")->setDefaultController("Index")->setDefaultAction("index");
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $user = new UserPlugin();
        $dispatcher->registerPlugin($user);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        /**
         * 添加配置中的路由
         */
        $router->addConfig(Yaf_Registry::get("config")->routes);
    }

}
