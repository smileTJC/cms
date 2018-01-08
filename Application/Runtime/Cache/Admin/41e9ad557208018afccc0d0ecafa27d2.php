<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>main</title>
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/admin.css" />
    <script type="text/javascript" src="/cms/Public/js/admin_nav.js"></script>
    <script src="/cms/Public/js/jquery-3.2.1.js"></script>
</head>
<body id="main">

<div class="map">
    内容管理 &gt;&gt; 设置网站导航 &gt;&gt; <strong id="title">导航列表</strong>
</div>

<ol>
    <li><a href="<?php echo U('Admin/Index/nav');?>" class="selected">导航列表</a></li>
    <li><a href="<?php echo U('Admin/Index/add_nav');?>">新增导航</a></li>
</ol>
<form method="post" >
    <input type="hidden" value="<?php echo ($nav_info["id"]); ?>" name="id" />
    <table cellspacing="0" class="left">
        <tr><td>导航名称：<input type="text" name="nav_name" value="<?php echo ($nav_info["nav_name"]); ?>" class="text" /> (* 导航名称不得小于两位，不得大于20位！)</td></tr>
        <tr><td><textarea name="nav_info"><?php echo ($nav_info["nav_info"]); ?></textarea> (* 描述不得大于200位！)</td></tr>
        <tr><td><input type="submit" name="send" value="修改导航" onclick="return checkForm();" class="submit level" /> [ <a href="<?php echo U('Admin/Index/nav');?>">返回列表</a> ]</td></tr>
    </table>
</form>
</body>
</html>