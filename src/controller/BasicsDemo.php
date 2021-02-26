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
     *      path [object]
     *          name [string uuid] 文件名
     * @title  获取png图标
     * @explain  png图标
     * @throws \Exception
     * @return string [png]
     * @router get :name[uuid].png
     */
    public function svg(Request $Request)
    {
        $path = dirname(__DIR__).DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'png'.DIRECTORY_SEPARATOR;
        if (is_file($path.$Request->path('name').'.png')){return file_get_contents($path.$Request->path('name').'.png');}
        return '';
    }
    /**
     * @Author pizepei
     * @Created 2019/7/5 22:40
     * @param \normphp\staging\Request $Request
     * @title  演示入口
     * @explain 演示入口
     * @throws \Exception
     * @return string [html]
     * @router get index.html
     */
    public function index(Request $Request)
    {
        $data =[
            'title'=>'normphp Demo',
            'greet'=>'欢迎使用normphp框架',
            'OS'=>$this->app->__OS__,
            'PHP_VERSIONS'=>PHP_VERSION,
            'NORMPHP_VERSIONS'=>$this->app::VERSIONS,
        ];
        $path = dirname(__DIR__).DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR;
        return $this->view('index',$data,$path,'html',false);
    }
    /**
     * @Author pizepei
     * @Created 2019/7/5 22:40
     * @param \normphp\staging\Request $Request
     * @title  phpinfo
     * @explain phpinfo
     * @throws \Exception
     * @return string [html]
     * @router get phpinfo.html
     */
    public function phpinfo(Request $Request)
    {
        return phpinfo();
    }


}