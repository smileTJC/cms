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

<form method="post" action="">
    <table cellspacing="0">
        <tr>
            <th>编号</th>
            <th>导航名称</th>
            <th>描述</th>
            <th>子类</th>
            <th>操作</th>
            <th>排序</th>
        </tr>
        <?php if(is_array($nav)): foreach($nav as $key=>$navs): ?><tr>
                <td>
                    <?php echo ($navs["id"]); ?>
                </td>
                <td><?php echo ($navs["nav_name"]); ?></td>
                <td><?php echo ($navs["info"]); ?></td>
                <td><a href="<?php echo U('Admin/Index/nav',array('id'=>$navs['id']));?>">查看</a> | <a href="<?php echo U('Admin/Index/add_nav',array('id'=>$navs['id']));?>">增加子类</a>
                </td>
                <td><a href="<?php echo U('Admin/Index/modify_nav',array('id'=>$navs['id']));?>">修改</a> | <a href="<?php echo U('Admin/Index/delete_nav',array('id'=>$navs['id']));?>"
                                                                     onclick="return confirm('你真的要删除这个导航吗？') ? true : false">删除</a>
                </td>
                <td><input type="text" name="sort" value="<?php echo ($navs["sort"]); ?>" class="text sort"/></td>
            </tr><?php endforeach; endif; ?>
    </table>
</form>
<div id="page"><span class="me">1</span> <span class="disabled">上一页</span><span class="disabled">下一页</span></div>


</body>
<script type="text/javascript">
    $(function(){
        $("input[name='sort']").blur(function () {
            var val = $(this).val();
            var id = $(this).parent().siblings('td:first').html();
            //console.log(id);
            $.ajax({
               url: "<?php echo U('Admin/Index/change_sort');?>",
                type: "post",
                data: {"id":id,"val":val},
                dataType: "json",
                success: function (data) {
                    if (data.status == -1) {
                        alert(data.info);
                    } else if (data.status == 1) {
                        location.reload();
                    } else {
                        alert(data.info);
                    }
                }
            });
        });
    });
</script>
</html>