<?php

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class Play extends Base
{
    protected  $dataform ='play_cates';

    public function index(){

        if($this->request->isGet()){
            $list  = Db::name($this->dataform)->order('id desc')->paginate(10);
            $total  = Db::name($this->dataform)->count('id');
            $this->assign('list',$list);
            $this->assign('total',$total);
            return $this->fetch();
        }

    }

    public function add(){

        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){
           $title = input('post.title','','trim');

           if(empty($title)){
               return false;
           }

           $ret = Db::name($this->dataform)->insertGetId(['title'=>$title,'create_time'=>time()]);

           if($ret){
               return json(['code'=>200,'msg'=>'操作成功']);
           }else{
               return json(['code'=>400,'msg'=>'操作失败']);
           }
        }

    }

    public function edit(){
        if($this->request->isGet()){ 
            $id   = input('get.id','','int');

            if(empty($id) || !isset($id)){
                return false;
            }

            $info = Db::name($this->dataform)->where(['id'=>$id])->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $title = input('post.title','','trim');
            $id    = input('post.id','','int');
            if(empty($title)){
                return false;
            }

            if(empty($id) || !isset($id)){
                return false;
            }

            $ret = Db::name($this->dataform)->where('id',$id)->update(['title'=>$title]);

            if($ret){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
    }



    public function del(){
        if($this->request->isGet()){
            $id   = input('get.id','','int');

            if(empty($id) || !isset($id)){
                return false;
            }
            $info = Db::name($this->dataform)->where(['id'=>$id])->delete();

            if($info){
               return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
    }
}