<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/10/10
 * Time: 11:02
 */

namespace Admin\Model;

use Think\Model;
class NavModel extends Model
{
    protected $_validate = array(
        array('nav_name','require','导航名必填'),
        array('nav_name','','导航名已存在',1,'unique',3),
    );


    public function getNav($id) {
        $where = "pid={$id}";
        return $this->where($where)->order("sort asc")->select();
    }

    public function updateSort($data) {
        return $this->save($data);
    }

    /*修改前查询*/
    public function modNav($id) {
        return $this->find($id);
    }

    /*修改导航*/
    public function modifyNav($data) {
        return $this->save($data);
    }

    public function deleteNav($id) {
        return $this->delete($id);
    }

    public function addNav($data) {
        return $this->add($data);
    }

    public function check_navName($nav_name) {
        return $this->where("nav_name= '{$nav_name}'")->count();
    }
}