<?php

/**
 * @description  描述
 * @author        berwin.zhao  Email: berwin.zhao@51job.com
 * @since         2016-4-23
 * @version       1.0
 * @copyright     Copyright (c) 2016, 51job 
 */
class IndexController extends Yaf_Controller_Abstract {

    public function indexAction() {//默认Action  
        $this->getView()->assign("content", "I have a dream!!!");
    }

}
