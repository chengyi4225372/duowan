<?php

namespace  app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use think\Session;
use app\index\controller\Base;

class Login  extends  Base {

    public function  login(){

        if($this->request->isGet()){

            if($this->check_user() == true){
                return $this->redirect('index/index');
            }
            return $this->fetch();
        }

        if($this->request->isPost()){
           $name =  input('post.name','','trim');

           $res  = Db::name('users')->where(['name'=>$name,'delete_time'=>Null])->find();

           if(empty($res)){
               return json(['code'=>403,'msg'=>'該用戶不存在']);
           }

           if($res['status'] ==0){
               return json(['code'=>401,'msg'=>'該用戶已被凍結']);
           }

           $arr = Db::name('users')->where('id',$res['id'])->update(['last_login_time'=>time()]);

           if($arr){
               Session::set('member',['id'=>$res['id'],'name'=>$res['name']]);
               return json(['code'=>200,'msg'=>'登入成功']);
           }else {
               return json(['code'=>200,'msg'=>'登入失败']);
           }

        }

    }

    public function logout(){
        Session::delete('member');
        $this->redirect('login/login');
    }

}