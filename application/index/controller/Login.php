<?php

namespace  app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Login  extends  Controller {

    protected  $request ='';

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->request = Request::instance();
    }


    public function  login(){

        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){
           $name =  input('post.name','','trim');

           $res  = Db::name('users')->where('name',$name)->find();



        }

    }




}