<?php
/**
 * Created by PhpStorm.
 * User: LX
 * Date: 2017/9/26
 * Time: 20:13
 */

function subText($len,$str) {
    if (mb_strlen($str,'utf-8')>$len) {
        return mb_substr($str,0,$len,'utf-8').'...';
    } else {
        return $str;
    }
}