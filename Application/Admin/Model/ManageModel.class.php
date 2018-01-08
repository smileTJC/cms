<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/29
 * Time: 10:51
 */

namespace Admin\Model;

use Think\Model;
class ManageModel extends Model
{
    protected $_validate = array(
       array('admin_user','require','用户名必填'),
        array('admin_pass','require','密码必填'),
        array('admin_user','','用户名已存在',2,'unique',1),
        array('admin_notpass','admin_pass','两次密码不一致',1,'confirm'),
    );

    protected $_auto = array(
        array('admin_pass','sha1',3,'function'),
        array('reg_time','time',1,'function'),
        array('last_time','time',3,'function'),
    );

    public function getManage($first,$limit) {
        $field= "id,admin_user,last_ip,last_time,login_count";
        return $this->field($field)->limit($first,$limit)->select();
    }

    /*获取管理员总条数*/
    public function getTotalManage() {
        $field= "id";
        return $this->field($field)->count();
    }

    /*修改前先获取信息*/
    public function getManageInfo($id) {
        $data['id'] = $id;
        $field = "id,admin_user,admin_pass";
        return $this->field($field)->where($data)->find();
    }

    public function updateManage($data) {
        return $this->save($data);
    }

    public function addManage($data) {
        return $this->add($data);
    }

    public function deleteManage($id) {
        return $this->delete($id);
    }

    //检测用户名是否存在
    public function check_useName($userName) {
        return $this->where("admin_user = '{$userName}'")->count();
    }

    /*检测用户名密码*/
    public function check_login($user,$pass) {
        $where['admin_user'] = $user;
        $where['admin_pass'] = sha1($pass);
        return $this->where($where)->find();
    }

    /*登陆时更新数据*/
    public function update_manage($data) {
        return $this->save($data);
    }
}