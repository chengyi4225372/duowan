<?php

/*
 * 设置前台登录页图片
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class Deng extends Base
{
    protected $login = 'login_img';

    protected $type  = 'type_img';
    //登录页
    public function index(){
      if($this->request->isGet()){
          $info = Db::name($this->login)->find();
          $this->assign('info',$info);
          return $this->fetch();
      }

      if($this->request->isPost()){
          $id     = input('post.mid','','int');
          $images = input('post.images','','int');
          if(empty($id) || $id <=0){
              $res = Db::name($this->login)->insertGetId(['images'=>$images]);
          }

          if(isset($id)){
              $res = Db::name($this->login)->where('id',$id)->update(['images'=>$images]);
          }

          if($res){
              return json(['code'=>200,'msg'=>'操作成功']);
          }else{
              return json(['code'=>200,'msg'=>'操作失败']);
          }
      }

    }

    //充值页
    public function types(){
        if($this->request->isGet()){
            $info = Db::name($this->type)->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $id     = input('post.mid','','int');
            $images = input('post.images','','int');

            if(empty($id) || $id <= 0){
                $res = Db::name($this->type)->insertGetId(['images'=>$images]);
            }

            if(isset($id)){
                $res = Db::name($this->type)->where('id',$id)->update(['images'=>$images]);
            }

            if($res){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>200,'msg'=>'操作失败']);
            }
        }
    }


    public function UploadImg()
    {
        // 获取上传文件
        $file =$this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH.'public/Upload/imgs/';
        $info = $file-> move($path);
        if($info){
            $mes = $info->getSaveName();
            $mes = str_replace("\\",'/',$mes);
            return json(['code'=>'200','msg'=>'上传成功','path'=>'/Upload/imgs/'.$mes]);
        }else{
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code'=>'400','msg'=>$mes]);
        }
    }


}