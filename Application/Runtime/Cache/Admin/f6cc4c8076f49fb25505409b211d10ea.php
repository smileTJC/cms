<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>main</title>
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/admin.css" />
    <script type="text/javascript" src="/cms/Public/js/admin_content.js"></script>
    <script src="/cms/Public/ueditor/ueditor.config.js"></script>
    <script src="/cms/Public/ueditor/ueditor.all.js"></script>
</head>
<body id="main">


<div class="map">
    内容管理 &gt;&gt; 查看文档列表 &gt;&gt; <strong id="title">文档列表</strong>
</div>

<ol>
    <li><a href="<?php echo U('Admin/Index/content');?>" class="selected">文档列表</a></li>
    <li><a href="<?php echo U('Admin/Index/addContent');?>">新增文档</a></li>
</ol>

<form action="?" method="get" style="float: right;margin-right: 30px;">
        <select name="nav" class="select">
            <option value="0">默认全部</option>
            <?php echo ($navList); ?>

        </select>
        <input value="查询" type="submit"/>
</form>
<table cellspacing="0">
    <tr>
        <th>编号</th>
        <th>标题</th>
        <th>属性</th>
        <th>文档类别</th>
        <th>浏览次数</th>
        <th>发布时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($content)): foreach($content as $key=>$list): ?><tr>
                <td><?php echo ($list["id"]); ?></td>
                <td><a href="../details.php?id=57" title="<?php echo ($list["title"]); ?>" target="_blank"><?php echo ($list["title"]); ?></a>
                </td>
                <td><?php echo ($list["attr"]); ?></td>
                <td><a href="?action=show&nav=29"><?php echo ($list["nav_name"]); ?></a></td>
                <td><?php echo ($list["count"]); ?></td>
                <td><?php echo (date("Y-m-d H:i:s",$list["date"])); ?></td>
                <td><a href="<?php echo U('Admin/Index/modifyContent',array('id'=>$list['id']));?>">修改</a> | <a href="<?php echo U('Admin/Index/deleteContent',array('id'=>$list['id']));?>"
                                                                          onclick="return confirm('你真的要删除这个文档吗？') ? true : false">删除</a>
                </td>

        </tr><?php endforeach; endif; ?>


</table>
<div id="page">
    <span class="me">1</span> <a href="#">2</a> <span class="disabled">上一页</span>
    <a href="#">下一页</a>
</div>

</body>
</html>