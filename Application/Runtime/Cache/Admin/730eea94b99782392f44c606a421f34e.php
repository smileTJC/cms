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

<form name="content" method="post" action="">
    <input type="hidden" name="id" value="<?php echo ($res["id"]); ?>"/>
     <table cellspacing="0" class="content">
        <tr><th><strong>发布一条新文档</strong></th></tr>
        <tr><td>文档标题：<input type="text" name="title" class="text" value="<?php echo ($res["title"]); ?>"/> <span class="red">[必填]</span> ( * 标题2-50字符之间)</td></tr>
        <tr><td>栏　　目：<select name="nav"><option value="" style="padding:0;">请选择一个栏目类别</option><?php echo ($navList); ?></select> <span class="red">[必选]</span></td></tr>
        <tr><td>定义属性：
            <input type="checkbox" name="attr[]" value="头条" <?php echo strpos($res['attr'],'头条')!==false?"checked='checked'":'';?>/>头条
            <input type="checkbox" name="attr[]" value="推荐" <?php echo strpos($res['attr'],'推荐')!==false?"checked='checked'":'';?>/>推荐
            <input type="checkbox" name="attr[]" value="加粗" <?php echo strpos($res['attr'],'加粗')!==false?"checked='checked'":'';?>/>加粗
            <input type="checkbox" name="attr[]" value="跳转" <?php echo strpos($res['attr'],'跳转')!==false?"checked='checked'":'';?>/>跳转
        </td></tr>

        <tr><td>关 键 字：<input type="text" name="keyword" class="text" value="<?php echo ($res["keyword"]); ?>"/> ( * 每个关键字用','隔开，总长30位之内)</td></tr>
        <tr><td>缩 略 图：<input type="text" name="thumbnail" class="text" readonly="readonly" value="<?php echo ($res["thumbnail"]); ?>"/>
            <input type="button" value="上传缩略图" onclick="centerWindow('upfile.php?type=content','upfile','400','130')" />
            <img name="pic" style="display:none;" /> ( * 必须是jpg,gif,png，并且200k内)
        </td></tr>
        <tr><td>文章来源：<input type="text" name="source" class="text" value="<?php echo ($res["source"]); ?>"/> ( * 文章来源20位之内)</td></tr>
        <tr><td>作　　者：<input type="text" value="<?php echo ($res["author"]); ?>" name="author" class="text"  /> ( * 作者10位之内)</td></tr>
        <tr><td><span class="middle">内容摘要：</span><textarea name="info"><?php echo ($res["info"]); ?></textarea> <span class="middle">( * 内容摘要200之内)</span></td></tr>
        <tr class="ckeditor"><td>
            <script type="text/plain" id="container" name="content"><?php echo ($res["content"]); ?></script>
        </td></tr>
        <tr><td>
            　
            　 　　标题颜色：<select name="color">
            <option value="" <?php echo ($res['color']==""?'selected':''); ?>>默认颜色</option>
            <option value="red" style="color:red;" <?php echo ($res['color']=="red"?'selected':''); ?>>红色</option>
            <option value="blue" style="color:blue;" <?php echo ($res['color']=="blue"?'selected':''); ?>>蓝色</option>
            <option value="orange" style="color:orange;" <?php echo ($res['color']=="orange"?'selected':''); ?>>橙色</option>
        </select>
        </td></tr>
        <tr><td><input type="submit" name="send" onclick="return checkAddContent();" value="发布文档" /> <input type="reset" value="重置" /></td></tr>
        <tr><td></td></tr>
    </table>
</form>


</body>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</html>