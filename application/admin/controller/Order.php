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
          $list = Db::name($this->dataform)->where('status',0)->order('id desc')->paginate(15);
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

    public function edit()
    {
        if ($this->request->isGet()) {
            $id = input('get.id', '', 'int');
            $pid = input('get.pid', '', 'int');
            if (empty($id) || !isset($id)) {
                return false;
            }

            if (empty($pid) || !isset($pid) || $pid <= 0) {
                return json(['code'=>405,'msg'=>'数据异常,建议删除该订单']);
            }


            if ($pid == 3) {
                $info = Db::name('order')->field('id,pid,alipay,status')->where(['id' => $id, 'pid' => $pid])->find();
                $this->assign('info', $info);
                return $this->fetch('zhuan');
            }

            if ($pid == 2) {
                $info = Db::name('order')->field('id,pid,imgs,status')->where(['id' => $id, 'pid' => $pid])->find();
                $this->assign('info', $info);
                return $this->fetch('chong');
            }

            if ($pid == 1) {
                $info = Db::name('order')->field('id,pid,names,status,imgs')->where(['id' => $id, 'pid' => $pid])->find();
                $this->assign('info', $info);
                return $this->fetch('edit');
            }

        }
    }

    //已完成
    public function over(){
        if($this->request->isGet()){
            $list = Db::name($this->dataform)->where('status',1)->order('id desc')->paginate(15);
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
            $list = Db::name($this->dataform)->where('status',-1)->order('id desc')->paginate(15);
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

    //删除
    public function del(){
        if($this->request->isGet()){
            $id = input('get.id','','int');
            if(empty($id)||  !isset($id)){
                return false;
            }

          $ret = Db::name('order')->where('id',$id)->delete();
            if($ret){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }

        return false;
    }

    //一键清除
    public function del_all(){

        $ret = Db::name('order')->where('status','-1')->delete();
        if($ret){
            return json(['code'=>200,'msg'=>'清除成功']);
        }else{
            return json(['code'=>200,'msg'=>'清除失败']);
        }

    }
    
    public function check_zhuan(){
        if($this->request->isPost()){
            $pid = input('post.pid','','int');
            $mid = input('post.mid','','int');
            $status = input('post.status','','int');

            if(empty($pid) || empty($mid)){
                return false;
            }

            $rest = Db::name('order')->where(['id'=>$mid,'pid'=>$pid])->update(['status'=>$status]);
            if($rest){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
        return false;
    }

    public function check_chong(){
        if($this->request->isPost()){
            $pid = input('post.pid','','int');
            $mid = input('post.mid','','int');
            $status = input('post.status','','int');

            if(empty($pid) || empty($mid)){
                return false;
            }

            $rest = Db::name('order')->where(['id'=>$mid,'pid'=>$pid])->update(['status'=>$status]);
            if($rest){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
        return false;
    }

    public function check_edit(){
        if($this->request->isPost()){
            $pid = input('post.pid','','int');
            $mid = input('post.mid','','int');
            $status = input('post.status','','int');

            if(empty($pid) || empty($mid)){
                return false;
            }

            $rest = Db::name('order')->where(['id'=>$mid,'pid'=>$pid])->update(['status'=>$status]);
            if($rest){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
        return false;
    }





}