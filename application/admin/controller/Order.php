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
          $play = Db::name('play_cates')->field('id,title')->order('id desc')->select();
          $user = Db::name('users')->field('id,name')->select();
          $play = array_column($play,'title','id');
          $users = array_column($user,'name','id');
          $this->assign('list',$list);
          $this->assign('play',$play);
          $this->assign('users',$users);
          return $this->fetch();
        }

    }



    public function edit(){
        if($this->request->isGet()){
            $id = input('get.id','','int');
            $pid= input('get.pid','','int');

            return $this->fetch();
        }
    }

    //已完成
    public function over(){
        if($this->request->isGet()){
            $list = Db::name($this->dataform)->where('status',1)->paginate(15);
            $play = Db::name('play_cates')->field('id,title')->order('id desc')->select();
            $user = Db::name('users')->field('id,name')->select();
            $play = array_column($play,'title','id');
            $users = array_column($user,'name','id');
            $this->assign('list',$list);
            $this->assign('play',$play);
            $this->assign('users',$users);
            return $this->fetch();
        }
    }


    //已取消
    public function nomal(){
        if($this->request->isGet()){
            $list = Db::name($this->dataform)->where('status',-1)->paginate(15);
            $play = Db::name('play_cates')->field('id,title')->order('id desc')->select();
            $user = Db::name('users')->field('id,name')->select();
            $play = array_column($play,'title','id');
            $users = array_column($user,'name','id');
            $this->assign('list',$list);
            $this->assign('play',$play);
            $this->assign('users',$users);
        }
    }





}