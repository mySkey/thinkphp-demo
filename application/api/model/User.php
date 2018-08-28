<?php 
namespace app\api\model;
// use think\Model;
// use think\Db;
// use think\Request;
use app\api\model\Base;

class User extends Base {
  public function findData($id = 0){
    $data = $this->select();
    if($id > 0){
      $data = Db::table('user')->where('id', $id)->select();
    }
    return json_encode($data);
  }

  public function delData($id = 1){
    if(empty($id)){
      return 'id 必传';
    }
    $data = Db::table('user')->where('id',$id)->delete();
    return $data;
  }

  public function updateData($id = 1, $data){
    foreach ($data as $k => $v) {
        $data[$k] = trim($v);
    }
    $result = Db::table('user')->where('id',$id)->save($data);
    return $result;
  }
}

?>