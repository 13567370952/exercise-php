<?php
/**
 * Created by PhpStorm.
 * User: yangshen
 * Date: 2017/11/29
 * Time: 22:15
 */
namespace  app\index\controller;

use app\common\controller\Index as commonIndex;
use think\Config;
use think\Env;
class  Index {

    public  function  __construct()
    {
        config('before','beforeAction');
    }

    public  function  index() {
        return "this is index Index index";
    }

    public function  common(){
        $common = new commonIndex();
        return $common->index();
    }

    public function  conf(){
        config('conf','confAction');
         dump(config());
    }

    public function  getConf(){
         $ret = \think\Config::get();
        dump($ret);
    }

    public function  env(){
        dump($_ENV);
        $ret = Env::get('email');
        dump($ret);
    }


}