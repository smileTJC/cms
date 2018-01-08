<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/28
 * Time: 14:00
 */

namespace Home\Controller;

use Think\Controller;
use Think\Think;

class SearchController extends Controller
{
    public function index() {
        $m = D('nav');
        /*获取导航栏信息*/
        $arr = $m->getNav();
        //var_dump($arr);
        $this->assign('navs',$arr);

        /* 显示搜索到的新闻信息*/
        $type = I('get.type',1);
        $keyword = I('get.search');
        //echo $type.$keyword;
        $total = $m->getSearchTotal($type,$keyword);
       // echo $total;
        $page = new \Think\Page($total,2);
        $page->setConfig('header','<li><span>共 %TOTAL_ROW% 条新闻</span></li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $page->show();
        $this->assign('page',$show);
       $res = $m->getSearchaNews($type,$keyword,$page->firstRow,$page->listRows);
      // var_dump($res);
        $this->assign('search',$res);
        $this->display('search');
    }
}