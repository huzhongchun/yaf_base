<?php
/**
 * Created by PhpStorm.
 * User: mingzhil
 * Date: 14/11/13
 * Time: 下午2:58
 */
use Yaf\Dispatcher;
use Yaf\Controller_Abstract;

class PagesController extends Controller_Abstract {

    /**
     * 初始化控制器
     */
    public function init() {
        //禁止自动加载模板，需要手工指定模板路径
        Dispatcher::getInstance()->autoRender(FALSE);
    }

    /**
     * 显示页面信息
     */
    public function showAction() {
        $id = $this->getRequest()->getParam('name');
        echo "<pre>";
        print_r($_SERVER);
        echo $id;
    }



}
