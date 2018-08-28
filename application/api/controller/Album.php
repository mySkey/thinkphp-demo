<?php  
namespace app\api\controller;
use think\Request;
class Album extends Index
{
    public function index(){
      $id = Request::instance()->get('id');
      $ret = model('album')->findData($id); 
      return json_encode($ret);
    }
}

?> 