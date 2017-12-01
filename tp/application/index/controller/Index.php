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

    public  function  index(Request $request) {
//        $request=request();
//        $request= Request::instance();
//        dump($request);
//        return "this is index Index index";

        #获取request
//        http://localhost:8888/tp/public/index/Index/index/5.html?id=a
        dump($request->domain());
//        http://localhost:8888
        dump($request->pathinfo());
//        index/Index/index/5.html
        dump($request->path());
//        index/Index/index/5

        #请求类型
        dump($request->method());
        dump($request->isPost());
        dump($request->isGet());
        dump($request->isAjax());

        #请求参数
        dump($request->get());
        dump($request->param());
        dump($request->post());

//        session("name","yshenhn");
//        dump($request->session());
//        cookie("tel","123456");
//        dump($request->cookie());
//        dump($request->param('type'));
//        dump($request->cookie('tel'));

        #获取模块
        dump($request->module());
        dump($request->controller());
        dump($request->action());

        dump($request->url());
        dump($request->baseUrl());

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

    public function  info($id){
        echo url('index/Index/index',['id'=>10])."<br/>";
        echo url('index/Index/info',['id'=>10])."<br/>";
        return $id;
    }

    public function  httptest(Request $request){

        dump($request->param());
        $res = input('get.id');
//            dump($request->post('id',100,'intval'));
//            dump($request->get('id'));
//            dump($request->get('id'),100);
        dump($res);
    }


    public function  test(Request $request){
        $res = [
            'code' => 200,
            'result'=>[
                'list'=> [1,2,3,4,5]
            ]
        ];
//        dump($res);
//        return  json($res);
        Config::set('default_return_type','json');
        return $res;
    }
}