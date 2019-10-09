<?php

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class News extends Base
{
    protected  $dataform = 'news';

    public function index(){
        $info = Db::name($this->dataform)->order('id desc')->find();
        $this->assign('info',$info);
        return $this->fetch();
    }


    public function add(){

        if($this->request->isPost()){
            $mid  = input('post.mid','','int');
            $content = input('post.content');

            if(empty($mid) || !isset($mid)){
                $ret = Db::name($this->dataform)->insertGetId(['content'=>$content]);
            }

            if(!empty($mid) && $mid >0){

                $ret = Db::name($this->dataform)->where('id',$mid)->update(['content'=>$content]);
            }


            if($ret){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }

    }

}