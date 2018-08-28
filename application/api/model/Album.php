<?php  
namespace app\api\model;
use app\api\model\Base;

class Album extends Base {
  public function findData($id = 0){
    $data = $this->select();
    if($id > 0){
      $data = $this->where('id', $id)->select();
    }
    return $data;
  }
}


?>