<?php
use Yaf\Dispatcher;
use Services\TestService as Test;
use Yaf\Controller_Abstract as Controller;
use Yaf\Registry;

class IndexController extends Controller
{

    /**
     * 初始化控制器
     */
    public function init()
    {
        //禁止自动加载模板，需要手工指定模板路径
        Dispatcher::getInstance()->autoRender(false);
    }

    public function indexAction()
    {
        (new UserModel())->test();
        $data = time();
        $this->getView()->assign("content", "Hello World");
        $this->display('index');
    }

    public function infoAction()
    {
        phpinfo();
    }



}
