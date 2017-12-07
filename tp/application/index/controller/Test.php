<?php
namespace  app\index\controller;

use  think\Controller;
use  think\Db;

class Test extends  Controller{
    public  function  index(){
        echo  "hello";
    }


    public function db(){
//       $res = Db::connect();
       $res = Db::query("select * from `system_config`");
//        $res= Db::execute("insert into students set username=?,sex=?",
//            ['12','20']
//        );

//        $res = Db::table("students")
//            ->where('id','=','100')
//            ->where(['id'=>'100'])
//            ->select();
//        $res = Db::table("students")->find();

//        $res = Db::table("students")->value('id');
//        $res = Db::table("students")->column('id');
         dump($res);
    }

    public function insert(){
        $db = Db::name('user');
        $db ->insert([
                'id'=>3        ]
        );
    }
}