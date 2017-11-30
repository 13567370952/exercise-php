<?php
/**
 * Created by PhpStorm.
 * User: yangshen
 * Date: 2017/11/29
 * Time: 22:15
 */
namespace  app\index\controller;

use  app\common\controller\User as commonUser;
class  User extends  commonUser {
    public  function  show() {
        return $this->showName();
    }
}