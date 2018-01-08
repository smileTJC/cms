<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻系统-CMS内容管理系统</title>
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/index.css">
    <script type="text/javascript" src="/cms/Public/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/cms/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/cms/Public/js/index.js"></script>
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
        <div class="row">
            <div class="col-lg-8">
                <div class="news_list">
                    <p class="list_title">
                        <b>当前位置</b>
                        <?php if(is_array($navName)): foreach($navName as $key=>$nav): ?><b class="glyphicon glyphicon-menu-right"></b>
                            <a href="<?php echo U('Home/List/index',array('id'=>$nav['id']));?>"
                               class="more"><?php echo ($nav['nav_name']); ?></a><?php endforeach; endif; ?>
                    </p>
                    <?php if(is_array($list)): foreach($list as $key=>$list_news): ?><div class="media news_info">
                            <div class="media-left">
                                <a href="<?php echo U('Home/Detail/index',array('id'=>$list_news['id']));?>">
                                    <img style="width: 120px" src="/cms/<?php echo ((isset($list_news['thumbnail']) && ($list_news['thumbnail'] !== ""))?($list_news['thumbnail']):'Public/img/none.jpg'); ?>" alt="" class="media-object">
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="media-heading">
                                    <b>[<?php echo ($list_news['nav_name']); ?>]</b>
                                    <a href="<?php echo U('Home/Detail/index',array('id'=>$list_news['id']));?>"><?php echo ($list_news["title"]); ?></a>
                                </div>
                                <p>
                                    <time>日期: <?php echo (date("Y-m-d H:i:s",$list_news["date"])); ?></time>
                                    <span>点击率：<?php echo ($list_news["count"]); ?> </span>
                                    <span>关键字：[<?php echo ($list_news["keyword"]); ?>]</span>
                                </p>
                                <p><?php echo (subText(100,$list_news["info"])); ?></p>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <ul class="pagination">
                        <?php echo ($page); ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="submenu">
                    <p class="list_title text-center"><b>子栏目列表</b></p>
                    <div class="submenu_list">
                        <?php if(is_array($subNav)): foreach($subNav as $key=>$submenu): ?><a href="<?php echo U('Home/List/index',array('id'=>$submenu['id']));?>" class="btn btn-success"><?php echo ($submenu["nav_name"]); ?></a><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
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