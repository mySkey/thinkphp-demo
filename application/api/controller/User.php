<?php

namespace app\api\controller;
use think\Request;
use think\Db;

class User extends Index
{
    public function index()
    {
      $id = Request::instance()->get('id');
      $dd = model('user')->findData($id);
      return $dd;
    }

    public function hi(){
      var_dump($this);
      $data = Db::table('user')->where('id',1)->select();//date是我的数据表名
      return json_encode($data);
    }

    public function create(){

      return '创建成功';
    }

    public function update(){
      $id = Request::instance()->get('id');
      return '修改成功';
    }

    public function delete(){
      $id = Request::instance()->get('id');
      $ret = model('user')->delData($id);
      return $ret ? '删除成功' : '删除失败';
    }
}
