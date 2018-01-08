<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/27
 * Time: 17:25
 */

namespace Home\Model;

use Think\Model;
class ContentModel extends Model
{
    public function getDetailNews($id) {
        // 根据小分类id查询新闻信息
        $field = "title,date,count,info,source,author,content";
        $where = "id={$id}";
        return $this->field($field)->where($where)->find();
    }

    /*获取详情页的分类名*/
    public function getNav($id) {
        //获取新闻所对应的nav
         //select pid,nav_name from cms_nav n inner join cms_content c on n.id = c.nav where c.id=$id;
        $field = "nav_name,pid,n.id";
        $join = "cms_nav n on n.id = c.nav";
        //查询新闻信息所属小分类和pid
        $res = $this->field($field)->alias('c')->join($join)->where("c.id={$id}")->find();
        //var_dump($res);
        //获取新闻信息所属大分类
        $res1 = $this->table('cms_nav n')->field('nav_name,n.id')->where("n.id={$res['pid']}")->find();
       // var_dump($res1);
        $arr[0] = $res1;
        $arr[1] = $res;
        //var_dump($arr);
        return $arr;
    }

    /*更新点击量*/
    public function upadteCount($id,$count) {
        $data['id'] = $id;
        $data['count'] = $count;
        return $this->save($data);
    }
}