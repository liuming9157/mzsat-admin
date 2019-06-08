<?php

namespace app\api\controller;

use app\common\controller\Api;
use think\Db;

/**
 * 赛达答案助手API接口
 */
class Sat extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 获取系统数据
     *
     */

    public function system()
    {
        $res = Db::name('system')->find();
        $this->success('返回成功', $res);
    }
    /**
     * 获取题库列表
     *
     * @return json
     * @author Jack Liu
     **/
    public function tiku()
    {
        $res = Db::name('tiku')->order('id desc')->select();
        $this->success('返回成功', $res);
    }
    /**
     * 获取答案
     * @param int $id 题库编号
     * @return json 题库答案
     * @author Jack Liu
     **/
    public function answer($id)
    {
        $res = Db::name('tiku')->where('id', $id)->find();
        $this->success('返回成功', $res);
    }
    /**
     * 获取轮播图
     * @return json
     * @author Jack Liu
     **/
    public function slide()
    {
        $res = Db::name('slide')->select();
        $this->success('返回成功', $res);
    }
    /**
     * 获取轮播图
     * @param string $mistake错题内容
     * @param string $name姓名
     * @param int $mobile手机号
     * @param string $school学校
     * @return void
     * @author Jack Liu
     **/
    public function feeedack()
    {
        $data = $this->request->param();
        Db::name('feedback')->insert($data);
    }
    /**
     * 明志服务
     * @return json
     * @author Jack Liu
     **/
    public function grid1()
    {
        $res = Db::name('grid1')->select();
        $this->success('返回成功', $res);
    }
    /**
     * 第三方服务
     * @return json
     * @author Jack Liu
     **/
    public function grid2()
    {
        $res = Db::name('grid2')->select();
        $this->success('返回成功', $res);
    }
}
