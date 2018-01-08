<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/10/10
 * Time: 14:30
 */

namespace Admin\Model;

use Think\Model;
class ContentModel extends Model
{
    protected $_auto = array(
        array('attr','str_Array',3,'callback'),
        array('content','htmlspecialchars_decode',3,'function'),
        array('date','time',3,'function'),
    );

    public function getContent($id) {
        $field = "n.nav_name,c.id,c.title,c.date,c.attr,c.count,n.id nid";
        $join = "cms_nav n on n.id=c.nav";
        if ($id == 0) {
            return $this->field($field)->alias('c')->join($join)->select();
        } else {
            $where = "n.id={$id}";
            return $this->field($field)->alias('c')->join($join)->where($where)->select();
        }

    }

    public function getOneContent($id) {
        $field = "n.nav_name,c.id,c.title,c.attr,n.id nid,c.keyword,c.source,c.info,c.content,c.thumbnail,c.color,c.author";
        $join = "cms_nav n on n.id=c.nav";
        $where = "c.id={$id}";
        return $this->field($field)->alias('c')->join($join)->where($where)->find();
    }

    public function deleteContent($id) {
        return $this->delete($id);
    }

    /*将数组转换为字符串*/
    public function str_Array($arr) {
        return implode(',',$arr);
    }
}