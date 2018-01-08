<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/10/10
 * Time: 14:23
 */

namespace Admin\Controller;

use Think\Controller;
class LoginController extends Controller
{
    public function index() {
        if (IS_POST) {
            $code = I('post.code');
            $verify = new \Think\Verify();
            $is_code = $verify->check($code);
            if (!$is_code) {
                $this->error('验证码错误');
            }
            $admin_user = I('post.admin_user');
            $admin_pass = I('post.admin_pass');
            $m = D('Manage');
            $res = $m->check_login($admin_user,$admin_pass);
            if ($res === false) {
                $this->error('sql语句错误');
            } else if ($res == null){
                $this->error('用户名或者密码错误');
            } else {
                //var_dump($res);
                session('tp_login_user',$res['admin_user']);
                $info['id'] = $res['id'];
                $login_count = $res['login_count'];
                $login_count++;
                $info['login_count'] = $login_count;
                 $info['last_ip']= $_SERVER['REMOTE_ADDR'];
                 $info['last_time'] = time();
                $m->update_manage($info);
                $this->success('登陆成功',U('Admin/Index/index'));
            }

        } else {
            $this->display("admin_login");
        }

    }

    public function v_code() {
        $config = array(
            'length' => 4, // 验证码位数
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function loginout() {
        session(null);
        $this->redirect('Admin/Login/index','',2,'已经退出，正在跳转...');
    }
}