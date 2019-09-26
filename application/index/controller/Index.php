<?php
namespace  app\index\controller;

use app\index\controller\Base;

class Index  extends  Base {

    //1 选择页面
    public  function index(){
         if($this->request->isGet()){
             return $this->fetch();
         }

         if($this->request->isPost()){

         }
    }

    //2. 详细提交页面
    public function info(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }

    }


}