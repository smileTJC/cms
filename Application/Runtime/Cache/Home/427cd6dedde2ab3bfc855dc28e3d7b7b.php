<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻系统-CMS内容管理系统</title>
    <link rel="stylesheet" href="/cms/Public/css/bootstrap.css">
    <link rel="stylesheet" href="/cms/Public/css/index.css">
    <script src="/cms/Public/js/jquery-3.2.1.js"></script>
    <script src="/cms/Public/js/bootstrap.min.js"></script>
</head>
<body>
     <header>
    <div class="container">
        <div class="top">
            <p class="pull-right">欢迎来自地区的朋友，您的IP地址为58.39.53.247。</p>
        </div>
    </div>
</header>
<nav class="container">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
                <span class="icon-bar bar"></span>
                <span class="icon-bar bar"></span>
                <span class="icon-bar bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav nav-pills">
                <li><a href="/cms/">首页</a></li>
                <?php if(is_array($navs)): foreach($navs as $key=>$values): ?><li><a href="<?php echo u('Home/List/index',array('id'=>$values['id']));?>"><?php echo ($values['nav_name']); ?></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
    <form action="<?php echo U('Home/Search/index');?>" class="form-inline" method="get">
        <select name="type" class="pull-left find">
            <option value="1" selected>按标题</option>
            <option value="2">按关键字</option>
        </select>
         
        <div class="form-group pull-left">
            <input type="search" class="form-control" name="search">
            <button class="btn btn-default" type="submit">搜索</button>
        </div>
    </form>
</nav>
    <section>
        <div class="container">
            <p class="list_title">
                <b>当前位置</b>
                <?php if(is_array($navName)): foreach($navName as $key=>$val): ?><b class="glyphicon glyphicon-menu-right"></b>
                    <a href="<?php echo U('Home/List/index',array('id'=>$val['id']));?>" class="more"><?php echo ($val['nav_name']); ?></a><?php endforeach; endif; ?>
            </p>
            <div class="news">
                <h3 class="text-center"><?php echo ($newsInfo["title"]); ?></h3>
                <p class="text-center">
                    <time>时间：<?php echo (date('Y-m-d H:i:s',$newsInfo["date"])); ?></time>
                    <span>来源：<?php echo ($newsInfo["source"]); ?></span>
                    <span> 作者：<?php echo ($newsInfo["author"]); ?> </span>
                    <span> 点击量：<?php echo ($newsInfo["count"]); ?> 次</span>
                </p>
                <p class="news_intro"><?php echo ($newsInfo["info"]); ?></p>
                <p class="news_content"><?php echo ($newsInfo["content"]); ?></p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Copyright (C) 2004-2011 antvv.com 版权所有</p>
        </div>
    </footer>
</body>
</html>