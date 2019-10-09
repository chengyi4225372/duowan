<?php
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class Other extends Base
{
    protected  $dataform = 'other';

    public function index(){
        $info = Db::name($this->dataform)->order('id desc')->find();
        $this->assign('info',$info);
        return $this->fetch();
    }


    public function add(){

        if($this->request->isPost()){

            $mid  = input('post.mid','','int');
            $imgs = input('post.imgs','','trim');
            $text = input('post.text','','trim');
            $purl = input('post.purl','','trim');

            if(empty($mid) || !isset($mid)){
                $ret = Db::name($this->dataform)->insertGetId([
                    'imgs'=>$imgs,
                    'text'=>$text,
                    'purl'=>$purl
                ]);
            }

            if(!empty($mid) && $mid >0){

                $ret = Db::name($this->dataform)->where('id',$mid)->update([
                    'imgs'=>$imgs,
                    'text'=>$text,
                    'purl'=>$purl,
                ]);
            }


            if($ret){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }

    }

}