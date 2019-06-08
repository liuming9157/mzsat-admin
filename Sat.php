<?php

namespace app\api\controller;

use app\common\controller\Api;

/**
 * 赛达答案助手接口
 */
class Sat extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页
     *
     */
    public function index()
    {
        $this->success('请求成功');
    }
}
