<?php
namespace  app\index\controller;

use app\index\controller\Home;

class Index  extends  Home {

    public  function index(){
         if($this->request->isGet()){
             return $this->fetch();
         }

         if($this->request->isPost()){

         }
    }


}