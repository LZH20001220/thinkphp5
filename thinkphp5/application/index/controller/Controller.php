<?php
namespace app\index\controller;
use think\Controller;//引入Controller类

class Index extends Controller
{
    public function index($name='world')
    {
        $this->assign('name',$name);
        return $this->fetch();
    }
}