<?php
/**
 * 用户管理
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\admin\controller;

use app\common\model\Attachments;
use app\common\model\UserLevels;
use app\common\model\Users;

class User extends Base
{
    public function index()
    {
        $model = new Users();

        $pageParam = ['query' => []];
        if (isset($this->param['keywords']) && !empty($this->param['keywords'])) {
            $pageParam['query']['keywords'] = $this->param['keywords'];
            $model->whereLike('name', "%" . $this->param['keywords'] . "%");
            $this->assign('keywords', $this->param['keywords']);
        }

        if (isset($this->param['level_id']) && $this->param['level_id'] > 0) {
            $pageParam['query']['level_id'] = $this->param['level_id'];
            $model->where('level_id', (int)$this->param['level_id']);
            $this->assign('level_id', $this->param['level_id']);
        }

        if (isset($this->param['_order_']) && !empty($this->param['_order_'])) {
            $pageParam['query']['_order_'] = $this->param['_order_'];
            $order                         = $this->param['_order_'];
            switch ($order) {
                case 'id':
                    $order = 'id';
                    break;
                case 'name':
                    $order = 'name';
                    break;
                case 'reg_time':
                    $order = 'reg_time';
                    break;
                case 'last_login_time':
                    $order = 'last_login_time';
                    break;
                default:
                    $order = 'id';
            }
            $by = isset($this->param['_by_']) && !empty($this->param['_by_']) ? $this->param['_by_'] : 'desc';
            $model->order($order, $by);
            $this->assign('_order_', $this->param['_order_']);
            $this->assign('_by_', $this->param['_by_']);
        } else {
            $model->order('id', 'desc');
        }

        if (isset($this->param['export_data']) && $this->param['export_data'] == 1) {
            $header = ['ID', '帐号', '昵称', '手机', '邮箱', '等级', '注册时间', '最后登录时间', '状态'];
            $body   = [];
            $data   = $model->select();
            foreach ($data as $item) {
                $record                    = [];
                $record['id']              = $item->id;
                $record['name']            = $item->name;
                $record['nickname']        = $item->nickname;
                $record['mobile']          = $item->mobile;
                $record['email']           = $item->email;
                $record['level']           = isset($item->userLevel->name) ? $item->userLevel->name : '';
                $record['reg_time']        = $item->reg_time;
                $record['last_login_time'] = $item->last_login_time;
                $record['status']          = $item->admin_status_text;
                $body[]                    = $record;
            }
            return $this->export($header, $body, "User-" . date('Y-m-d-H-i-s'), '2007');
        }

        $list = $model->paginate($this->webData['list_rows'], false, $pageParam);
        $this->assign([
            'list'      => $list,
            'total'     => $list->total(),
            'page'      => $list->render(),
            'userLevel' => UserLevels::all()
        ]);
        return $this->fetch();
    }


    public function add()
    {
        if($this->request->isGet()){
           return $this->fetch();
        }

        if ($this->request->isPost()) {
          $data['name']   = input('post.name','','trim');
          $data['status'] = input('post.status','','int');
          $data['timeout']= 604800;
          $data['token']  = maketoken();

          $ret = Users::create($data);

          if($ret){
              return json(['code'=>200,'msg'=>'操作成功']);
          }else{
              return json(['code'=>400,'msg'=>'操作失败']);
          }

        }
    }


    public function edit()
    {
        if($this->request->isGet()){
            $info = Users::get($this->id);
            $this->assign([
                'info'       => $info,
                'user_level' => UserLevels::all(),
            ]);
            return $this->fetch('add');
        }

        if ($this->request->isPost()) {
            $data['name']   = input('post.name','','trim');
            $data['status'] = input('post.status','','int');
            $id       = input('post.id','','int');

            $ret = Users::update($data,['id'=>$id]);

            if (false !== $ret) {
                return json(['code'=>200,'msg'=>'操作成功']);
            }
            return json(['code'=>400,'msg'=>'操作失败']);
        }


    }


    public function del()
    {

        $id     = $this->id;
        $result = Users::destroy(function ($query) use ($id) {
            $query->whereIn('id', $id);
        });
        if ($result) {
            return $this->deleteSuccess();
        }
        return $this->error('删除失败');
    }

    //启用/禁用
    public function disable()
    {
        $user         = Users::get($this->id);
        $user->status = $user->status == 1 ? 0 : 1;
        $result       = $user->save();
        if ($result) {
            return $this->success();
        }
        return $this->error();
    }

}