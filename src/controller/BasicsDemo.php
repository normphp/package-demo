<?php
namespace  normphpPackage\demo\controller;

use normphp\staging\Controller;
use normphp\staging\Request;
/**
 * Class BasicsDemo
 * @package normphpCore\account\controller
 */
class BasicsDemo extends Controller
{
    /**
     * 基础控制器信息
     */
    const CONTROLLER_INFO = [
        'User'=>'pizepei',
        'title'=>'演示demo',//控制器标题
        'namespace'=>'demo',//门面控制器命名空间
        'basePath'=>'/demo/',//基础路由
        'baseParam'=>'[$Request:normphp\staging\Request]',//依赖注入对象
    ];

    /**
     * @Author pizepei
     * @Created 2019/7/5 22:40
     * @param \normphp\staging\Request $Request
     * @title  演示入口
     * @explain 演示入口
     * @throws \Exception
     * @return array [string]
     * @router get index.html
     */
    public function index(Request $Request)
    {
        return '欢迎使用normphp框架';
    }

}