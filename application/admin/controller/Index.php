<?php
/**
 * 后台首页
 * @author yupoxiong <i@yufuping.com>
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Index extends Base
{
    public function index()
    {
        $sysinfo  = new Sysinfo();
        $sys_info = [
            'lang'    => $sysinfo->getLang(),
            'browser' => $sysinfo->getBrowser(),
            'ip'      => $sysinfo->getIp(),
            'city'    => $sysinfo->getCity(),
            'os'      => $sysinfo->getOS(),
            'date'    => date('Y-m-d')
        ];

        $Parsedown = new Parsedown();


        $todayStart= date('Y-m-d 00:00:00', time());
        $todayEnd= date('Y-m-d 23:59:59', time());

        $where['create_time'] = ['between time', [$todayStart, $todayEnd]];

        $order  = Db::name('order')->where($where)->count('id');

        $member = Db::name('users')->where(['delete_time'=>NULL])->count('id');

        $over  = Db::name('order')->where($where)->where(['status'=>'1'])->count('id');
        $nomal  = Db::name('order')->where($where)->where(['status'=>'-1'])->count('id');

        $this->assign('order',$order);
        $this->assign('member',$member);
        $this->assign('over',$over);
        $this->assign('nomal',$nomal);

        $this->assign(['sys'      => $sys_info,]);

        return $this->fetch();
    }



}