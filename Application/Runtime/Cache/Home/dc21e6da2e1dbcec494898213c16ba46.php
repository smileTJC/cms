<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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
        <div class="container text-center">
            <p class="list_title">
                <b>当前位置</b>
                    <b class="glyphicon glyphicon-menu-right"></b>
                    <b>搜索：</b>
                     <b><?php echo ($_GET['search']); ?></b>
            </p>
            <?php if(is_array($search)): foreach($search as $key=>$searchI): ?><div class="media news_info">
                    <div class="media-left">
                        <a href="<?php echo U('Home/Detail/index',array('id'=>$searchI['id']));?>">
                            <img src="/cms/Public/img/none.jpg" alt="" class="media-object">
                        </a>
                    </div>
                    <div class="media-right">
                        <div class="media-heading">
                            <b>[<?php echo ($searchI['nav_name']); ?>]</b>
                            <a href="<?php echo U('Home/Detail/index',array('id'=>$searchI['id']));?>"><?php echo ($searchI["title"]); ?></a>
                        </div>
                        <p>
                            <time>日期: <?php echo (date("Y-m-d H:i:s",$searchI["date"])); ?></time>
                            <span>点击率：<?php echo ($searchI["count"]); ?> </span>
                            <span>关键字：[<?php echo ($searchI["keyword"]); ?>]</span>
                        </p>
                        <p><?php echo (subText(100,$searchI["info"])); ?></p>
                    </div>
                </div><?php endforeach; endif; ?>
            <ul class="pagination ">
                <?php echo ($page); ?>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Copyright (C) 2004-2011 antvv.com 版权所有</p>
        </div>
    </footer>
</body>
</html>