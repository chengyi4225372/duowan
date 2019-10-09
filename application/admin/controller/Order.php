<?php
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class Order extends Base
{
    protected $dataform ='order';


    //未完成
    public function wei(){

        if($this->request->isGet()){
          $list = Db::name($this->dataform)->where('status',0)->paginate(15);
          $this->assign('list',$list);
          return $this->fetch();
        }



    }



    public function edit(){
        if($this->request->isGet()){

            return $this->fetch();
        }
    }

    //已完成
    public function over(){
        if($this->request->isGet()){
            $list = Db::name($this->dataform)->where('status',1)->paginate(15);
            $this->assign('list',$list);
            return $this->fetch();
        }
    }


    //已取消
    public function nomal(){
        if($this->request->isGet()){
            $list = Db::name($this->dataform)->where('status',-1)->paginate(15);
            $this->assign('list',$list);
            return $this->fetch();
        }
    }





}