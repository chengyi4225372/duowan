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


    //充值方式
    public function types(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }
    }




    //type1:好友转账
    public function info(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }

    }

  //type2:充值模板
    public function chong(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }
    }


    //type3:转速快
    public function zhuan(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }
    }


}