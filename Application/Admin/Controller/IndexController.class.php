<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct()
    {
        parent::__construct();
        if (!session('?tp_login_user')) {
            $this->error('你还没有登陆，请先登陆',U('Login/index'));
        }
    }

    public function index()
    {
        $this->display("admin");
    }

    public function top() {
        $this->display();
    }

    public function sidebar() {
        $this->display();
    }

    public function sidebarn() {
        $this->display();
    }

    public function manage() {
        $m = D("Manage");

        $total = $m->getTotalManage();
//        echo $total;die;
        $page = new \Think\Page($total,5);
        $page->setConfig('header','<li><span>共 %TOTAL_ROW% 个用户</span></li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $page->show();
        $this->assign("page",$show);
        $manages = $m->getManage($page->firstRow,$page->listRows);
//        var_dump($manages);
        $this->assign("manages",$manages);
        $this->display("manage");
    }

    public function updateManage() {
        $m = D("Manage");
        $id = I("get.id");
        $info = $m->getManageInfo($id);
        //var_dump($info);
        $this->assign("info",$info);

        if (IS_POST) {
            //$admin_id = I("post.id");
            //$admin_user = I("post.admin_user");
            $admin_pass = I("post.admin_pass");
            $admin_notpass = I("post.pass"); //原密码
            if ($admin_notpass == sha1($admin_pass)) {
                $this->error("原密码与新密码一致");
            } else {
                $data['id'] = $id;
                $data['admin_pass']=sha1($admin_pass);
                $res = $m->updateManage($data);
                if ($res === false) {
                    $this->error("sql出错");
                } else {
                    if ($res > 0) {
                        $this->success("修改成功",U('Admin/Index/manage'));
                    } else {
                        $this->error("修改失败");
                    }
                }
            }

        } else {
            $this->display("manage_update");
        }
    }

    public function addManage() {
        $m = D("Manage");

        if (IS_POST) {
            /*$username = I("post.admin_user");
            $pwd = I("post.admin_pass");
            $notpwd = I("post.admin_notpass"); //确认密码
            if (!empty($username) && $pwd == $notpwd) {
                 $data['admin_user'] = $username;
                 $data['admin_pass'] = sha1($pwd);
                 $data['reg_time'] = time();
                 $data['last_time'] = '';
                if ($this->check_Name($username)) {
                   $this->error("用户名已存在");*/
                if (!$m->create()) {
                    $this->error($m->getError());
                } else {
                    //$res = $m->addManage($data);
                    $res = $m->add();
                    if ($res === false) {
                        $this->error("sql语句出错");
                    } else {
                        if ($res > 0) {
                            $this->success("添加成功",U('Admin/Index/manage'));
                        } else {
                            $this->error("添加失败");
                        }
                    }
                }
           // }
        } else {
            $this->display("manage_add");
        }
    }

    public function deleteManage() {
        $m = D("Manage");
        $id = I("get.id/d");
        $res = $m->deleteManage($id);
        if ($res === false) {
            $this->error("sql语句出错");
        } else {
            if ($res > 0) {
                $this->success("删除成功",U('Admin/Index/manage'));
            } else {
                $this->error("删除失败");
            }
        }
    }

    /*检测用户名*/
    public function check_Name($name) {
        $m = D("Manage");
        $res = $m->check_useName($name);
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function nav() {
        $m = D("Nav");
        $id = I("get.id",0);
        $res = $m->getNav($id);
        //dump($res);
        $this->assign("nav",$res);
        $this->display("nav");
    }

    public function change_sort() {
        $id = I('post.id');
        $sort = I('post.val');
        $data['id'] = $id;
        $data['sort'] = $sort;
        $m = D("Nav");
        $res = $m->updateSort($data);
        if ($res === false) {
            $arr['status'] = -1;
            $arr['info'] = "sql语句出错";
        } else if ($res > 0) {
            $arr['status'] = 1;
            $arr['info'] = "修改成功";
        } else {
            $arr['status'] = 0;
            $arr['info'] = "没有做任何修改";
        }
        $this->ajaxReturn($arr);
    }

    /*新增导航*/
    public function add_nav() {

        //dump($arr);
        $m = D("Nav");
        if (IS_POST) {
            //$arr = I("post.");
            if (!$m->create()) {
                $this->error($m->getError());
            }
            $res = $m->add();
            //echo $res;
            if ($res === false) {
                $this->error("sql语句出错");
            } else {
                if ($res > 0) {
                    $this->success("添加成功",U('Admin/Index/nav'));
                } else {
                    $this->error("添加失败");
                }
            }
           /* if ($this->check_nav($arr['nav_name'])) {
                $this->error("导航名已存在");
            } else {
                $insert = $m->addNav($arr);
                if ($insert === false) {
                    $this->error("sql语句出错");
                } else {
                    if ($insert > 0) {
                        $this->success("添加成功",U('Admin/Index/nav'));
                    } else {
                        $this->error("添加失败");
                    }
                }
            }*/

        } else {
            $this->display("nav_add");
        }

    }

    /*修改导航*/
    public function modify_nav() {
        $m = D("Nav");
        if (IS_POST) {
            if (!$m->autoCheckToken($_POST)) {
                $this->error("表单不能重复提交");
                exit();
            }
            $arr = I("post.");
            //dump($arr);
            $res = $m->modifyNav($arr);
            if ($res === false) {
                $this->error("sql语句执行错误");
            } else if ($res > 0) {
                $this->success("修改成功",U("Index/nav"));
            } else {
                $this->error("没有做任何修改");
            }
        } else {
            $id = I("get.id");
            $nav = $m->modNav($id);
            //dump($nav);
            $this->assign("nav_info",$nav);
            $this->display("nav_update");
        }

    }

    /*删除导航*/
    public function delete_nav() {
        $id = I("get.id");
        $m = D("Nav");
        $res = $m->deleteNav($id);
        if ($res === false) {
            $this->error("sql语句出错");
        } else {
            if ($res > 0) {
                $this->success("删除成功",U('Admin/Index/nav'));
            } else {
                $this->error("删除失败");
            }
        }
    }

    /*检测导航名*/
    public function check_nav($name) {
        $m = D("Nav");
        $res = $m->check_navName($name);
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function content() {
        $m = D("Content");
        $id = I('get.nav',0);
        $res = $m->getContent($id);
       // var_dump($res);
        $this->assign("content",$res);
        $navList = $this->navList($id);
        $this->assign("navList",$navList);
        C('TOKEN_ON',false); //临时关闭hash方法
        $this->display("content");
    }

    /*获取导航列表*/
    public function navList($id) {
        $m = D("Nav");
        $res = $m->getNav(0);
        //var_dump($res);
        $str = '';
        foreach ($res as $value) {
            $str .= '<optgroup label="'.$value['nav_name'].'">';
            $res1 = $m->getNav($value['id']);
            foreach ($res1 as $val) {
                if ($id == $val['id']) {
                    $str .= '<option selected="selected" value="'.$val['id'].'">'.$val['nav_name'].'</option>';
                } else {
                    $str .= '<option value="'.$val['id'].'">'.$val['nav_name'].'</option>';
                }

            }
            $str .='</optgroup>';
        }
        return $str;

    }

    /*添加内容*/
    public function addContent() {
        $m = D("Content");
        if (IS_POST) {
            if (!$m->create()) {
                $this->error($m->getError());
            }
            $content = $m->add();
            if ($content === false) {
                $this->error("sql语句出错");
            } else {
                if ($content > 0) {
                    $this->success("添加成功",U('Admin/Index/content'));
                } else {
                    $this->error("添加失败");
                }
            }


        } else {
            $navList = $this->navList();
            $this->assign("navList",$navList);
            $this->display("content_add");
        }
    }

    public function uploadFile() {
        if (IS_POST) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录 // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else {// 上传成功
                //$this->success('上传成功！');
                //var_dump($info);
                $path = 'Uploads/'.$info['file']['savepath'].$info['file']['savename'];
                $image = new \Think\Image();
                $image->open($path);
                $image->thumb(120,80,2)->save($path);
                echo "<script type='text/javascript'>
                    var thumb = window.opener.document.getElementById('thumb');
                    thumb.value = '{$path}';
                    window.close();
                </script>";

            }
        }
        $this->display("upload");
    }

    /*修改内容*/
    public function modifyContent() {
        $m = D('Content');
        if (IS_POST) {
            if (!$m->create()) {
                $this->error($m->getError());
                exit();
            }
            $content = $m->save();
            //var_dump($content);
            if ($content === false) {
                $this->error("sql语句出错");
            } else {
                if ($content > 0) {
                    $this->success("修改成功",U('Admin/Index/content'));
                } else {
                    $this->error("修改失败");
                }
            }
        } else {
            $id = I('get.id/d');
            $res = $m->getOneContent($id);
            $navList = $this->navList($res['nid']);
            $this->assign("navList",$navList);
            //$res['attr']= explode(',',$res['attr']);
            var_dump($res);
            $this->assign('res',$res);
            $this->display("content_update");
        }

    }

    /*删除内容*/
    public function deleteContent() {
        $id = I('get.id/d');
        $m = D('Content');
        $res = $m->deleteContent($id);
        if ($res === false) {
            $this->error("sql语句出错");
        } else {
            if ($res > 0) {
                $this->success("删除成功",U('Admin/Index/content'));
            } else {
                $this->error("删除失败");
            }
        }
    }
}