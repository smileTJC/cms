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

<table cellspacing="0">
    <tr>
        <th>编号</th>
        <th>用户名</th>
        <th>登录次数</th>
        <th>最近登录ip</th>
        <th>最近登录时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($manages)): foreach($manages as $key=>$manageI): ?><tr>
            <td><?php echo ($manageI["id"]); ?></td>
            <td><?php echo ($manageI["admin_user"]); ?></td>

            <td><?php echo ($manageI["login_count"]); ?></td>
            <td><?php echo ($manageI["last_ip"]); ?></td>
            <td><?php echo ($manageI['last_time']?date('Y-m-d H:i:s'):'暂无'); ?></td>
            <td><a href="<?php echo U('Admin/Index/updateManage',array('id'=>$manageI['id']));?>">修改</a> | <a href="<?php echo U('Admin/Index/deleteManage',array('id'=>$manageI['id']));?>"
                                                                     onclick="return confirm('你真的要删除这个管理员吗？') ? true : false">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>


</table>
<div class="text-center">
    <div class="pagination"><?php echo ($page); ?></div>
</div>



</body>
</html>