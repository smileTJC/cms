<?php
namespace Home\Controller;
use Think\Controller;
use Think\Think;

class IndexController extends Controller {
    public function index(){
        //\Think\Build::buildAppDir("Admin");
       /* $m = M('nav');
        $arr= $m->where('pid=0')->select();*/
        //var_dump($arr);
        $m = D('nav');
        /*获取导航栏信息*/
        $arr = $m->getNav();
        //var_dump($arr);
        $this->assign('navs',$arr);
        /*四大类nav*/
        $four = $m->getFourNav();
        //var_dump($four);
        $this->assign('four',$four);

        /*显示分类新闻信息*/
        foreach ($four as $value) {
            $news[] = $m->getAllNews($value['id'],'index');
        }
        //var_dump($news);
        $this->assign('news',$news);
        $this->display('index');
    }



}