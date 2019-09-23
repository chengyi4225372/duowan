<?php

namespace  app\index\controller;

use app\index\controller\Home;

class Login  extends  Home {

    public function  login(){

        if($this->request->isGet()){
            return $this->fetch();
        }
        if($this->request->isPost()){

        }

    }




}