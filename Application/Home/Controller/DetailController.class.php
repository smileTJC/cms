<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/27
 * Time: 16:51
 */

namespace Home\Controller;

use Think\Controller;
class DetailController extends Controller
{
    public function index() {
        $m = D('nav');
        /*获取导航栏信息*/
        $arr = $m->getNav();
        //var_dump($arr);
        $this->assign('navs',$arr);

        /*获取当前分类下的新闻详细信息*/
        $n = D('content');
        $id = I('get.id/d');
        $newsInfo = $n->getDetailNews($id);
        //var_dump($newsInfo);
        $this->assign('newsInfo',$newsInfo);

        /*获取新闻分类*/
         $navName = $n->getNav($id);
         //var_dump($navName);
         $this->assign('navName',$navName);

         /*添加点击量*/
         session_start();
         if (empty($_SESSION['new_id'])) {
             $count = $newsInfo['count'];
             $count++;
             //echo $count;
             $n->upadteCount($id,$count);
             $_SESSION['new_id'] = $id;
         } else {
             $arr = explode('_',$_SESSION['new_id']);
             //var_dump($arr);
             if (!in_array($id,$arr)) {
                 $count = $newsInfo['count'];
                 $count++;
                 //echo $count;
                 $n->upadteCount($id,$count);
                 $_SESSION['new_id'] = $_SESSION['new_id'].'_'.$id;
             }

         }
         //var_dump($res);
        $this->display('news');


    }
}