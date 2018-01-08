<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>top</title>
	<link rel="stylesheet" type="text/css" href="/cms/Public/css/admin.css" />
	<script type="text/javascript" src="/cms/Public/js/admin_top_nav.js"></script>
</head>
<body id="top">


<ul>
	<li><a href="<?php echo U('Index/sidebar');?>" target="sidebar" id="nav1" class="selected" onclick="admin_top_nav(1)">首页</a></li>
	<li><a href="<?php echo U('Index/sidebarn');?>" target="sidebar" id="nav2" onclick="admin_top_nav(2)">内容</a></li>
</ul>

<p>
	您好，<strong><?php echo (session('tp_login_user')); ?></strong>   [ <a href="<?php echo U('Home/Index/index');?>" target="_blank">去首页</a> ] [ <a href="<?php echo U('Admin/Login/loginout');?>" target="_parent">退出</a> ]
</p>

</body>
</html>