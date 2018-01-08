<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/26
 * Time: 11:49
 */

namespace Home\Model;

use Think\Model;
class NavModel extends Model
{
    public function getNav() {
        //select * from cms_nav where pid=0 order by asc;
        return $this->where('pid=0')->order('sort asc')->select();
    }

    public function getFourNav() {
        //select * from cms_nav where pid=0 order by asc limit 4;
        return $this->where('pid=0')->order('sort asc')->limit(4)->select();
    }

    public function getAllNews($id,$who,$firstRow,$limit) {
        //select * from cms_nav n inner join cms_content c on n.id=c.nav where n.pid=0
        if ($who == 'list') {
            $field = "n.nav_name,c.id,c.title,c.date,c.thumbnail,c.keyword,c.count,c.info";
        } else if ($who == 'index') {
            $field = "c.id,title,date";
        }
        $join = "cms_content c on n.id=c.nav";
        //select pid from cms_nav where id=$id
        if ($this->isBigNav($id)) {
            $where = "n.pid={$id}";
        } else {
            $where = "c.nav={$id}";
        }
        return $this->field($field)->alias('n')->join($join)->where($where)->limit($firstRow,$limit)->select();
    }

    public function getSubNav($id) {
        //select * from cms_nav where pid = 1;
        $where = "pid={$id}";
        $field = "id,nav_name";
        return $this->field($field)->where($where)->select();
    }

    /*统计某个分类下新闻条数*/
    public function getTotalRows($id) {
        $join = "cms_content c on n.id=c.nav";
        //select pid from cms_nav where id=$id
        if ($this->isBigNav($id)) {
            $where = "n.pid={$id}";
        } else {
            $where = "c.nav={$id}";
        }
        return $this->field('c.id')->alias('n')->join($join)->where($where)->count();
    }

    /*判断是否是大分类*/
    public function isBigNav($id) {
        $pid = $this->field('pid')->where("id={$id}")->find();
        if ($pid['pid'] == 0) {
             return true;
        } else {
             return false;
        }
    }

    /*获取当前导航分类*/
    public function getCurrentNav($id) {
        //select nav_name from cms_nav where id = {$id}
        $res = $this->where("id={$id}")->find();
        if ($res['pid'] != 0) {
            $where['id'] = $res['pid'];
            $res1 = $this->where($where)->find();
             $arr[0] = $res1;
             $arr[1] = $res;
        } else {
            $arr[0] = $res;
        }
        //var_dump($arr);
        return $arr;
    }


    /*获取搜索的新闻信息*/
    public function getSearchaNews($type,$search,$first,$limit) {
        $field = "n.nav_name,c.id,c.title,c.date,c.thumbnail,c.keyword,c.count,c.info";
        $join = "cms_content c on n.id=c.nav";
        if ($type == 1) {
            $where = "c.title like '%{$search}%'";
        } else if ($type == 2) {
            $where = "c.keyword like '%{$search}%'";
        }
        return $this->field($field)->alias('n')->join($join)->where($where)->limit($first,$limit)->select();
    }

    /*计算搜索的总条数*/
    public function getSearchTotal($type,$search) {
        $field = "c.id ";
        $join = "cms_content c on n.id=c.nav";
        if ($type == 1) {
            $where = "c.title like '%{$search}%'";
        } else if ($type == 2) {
            $where = "c.keyword like '%{$search}%'";
        }
        return $this->field($field)->alias('n')->join($join)->where($where)->count();
    }
}