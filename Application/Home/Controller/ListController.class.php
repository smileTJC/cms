<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/25
 * Time: 12:01
 */

namespace Home\Controller;
use Think\Controller;

class ListController extends Controller
{
    public function index() {
        $m = D('nav');
        /*获取导航栏信息*/
        $arr = $m->getNav();
        //var_dump($arr);
        $this->assign('navs',$arr);

        /*获取某一个分类下的所有信息*/
        $id = I('get.id/d');
        $total = $m->getTotalRows($id); //获取总条数
         $page = new \Think\Page($total,2); // 实例化分页类 传入总记录数和每页显示的记录数(2)
        $page->setConfig('header','<li><span>共 %TOTAL_ROW% 条新闻</span></li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $page->show();
        //var_dump($show);
        $this->assign('page',$show);
        $list = $m->getAllNews($id,'list',$page->firstRow,$page->listRows);
        //var_dump($list);
        $this->assign('list',$list);


        /*获取某一个大分类下的子分类*/
        $subNav = $m->getSubNav($id);
        //var_dump($subNav);
        $this->assign('subNav',$subNav);

        /*获取当前位置的分类名字*/
        $navName = $m->getCurrentNav($id);
        //var_dump($navName);
        $this->assign('navName',$navName);

        $this->display('list');

    }



}