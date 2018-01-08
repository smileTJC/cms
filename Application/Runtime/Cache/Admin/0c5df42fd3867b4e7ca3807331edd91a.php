<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>main</title>
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/bootstrap.css">
    <script type="text/javascript" src="/cms/Public/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/cms/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/admin.css" />
    <script type="text/javascript" src="/cms/Public/js/admin_manage.js"></script>
</head>
<body id="main">

<div class="map">
    管理首页 &gt;&gt; 管理员管理 &gt;&gt; <strong id="title">
    <?php switch(ACTION_NAME): case "manage": ?>管理员列表<?php break;?>
        <?php case "addManage": ?>新增管理员<?php break;?>
        <?php case "updateManage": ?>修改管理员<?php break; endswitch;?>
</strong>
</div>

<ol>
    <li><a href="<?php echo U('Admin/Index/manage');?>" class="selected">管理员列表</a></li>
    <li><a href="<?php echo U('Admin/Index/addManage');?>">新增管理员</a></li>
</ol>



<form method="post" name="update">
    <input type="hidden" value="<?php echo ($info["id"]); ?>" name="id"/>
    <input type="hidden" value="<?php echo ($info["admin_pass"]); ?>" name="pass"/>
    <table cellspacing="0" class="left">
        <tr>
            <td>用户名：<input type="text" name="admin_user" value="<?php echo ($info["admin_user"]); ?>" class="text" readonly="readonly"/></td>
        </tr>
        <tr>
            <td>密　码：<input type="password" name="admin_pass" class="text"/> (* 留空则不修改)</td>
        </tr>

        <tr>
            <td><input type="submit" name="send" value="修改管理员" onclick="return checkUpdateForm();" class="submit"/> [ <a
                    href="<?php echo U('Admin/Index/manage');?>">返回列表</a> ]
            </td>
        </tr>
    </table>
</form>


</body>
</html>