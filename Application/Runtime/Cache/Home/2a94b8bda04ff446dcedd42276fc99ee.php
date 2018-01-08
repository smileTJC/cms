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
    <!--<link rel="stylesheet" type="text/css" href="/cms/Public/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/cms/Public/css/index.css" />
    <script type="text/javascript" src="/cms/Public/js/jquery-3/2/1.js"></script>
    <script type="text/javascript" src="/cms/Public/js/bootstrap/min.js"></script>-->
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
                <?php if(is_array($four)): foreach($four as $k=>$fourNav): ?><div class="col-lg-6">
                        <div class="list">
                            <p class="list_title">
                                <b><?php echo ($fourNav["nav_name"]); ?></b>
                                <a href="<?php echo u('Home/List/index',array('id'=>$fourNav['id']));?>" class="pull-right more">更多</a>
                            </p>
                            <ul class="list-unstyled list_wrapper">
                                <?php if(is_array($news[$k])): foreach($news[$k] as $key=>$newsI): ?><li>
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                        <a href="<?php echo U('Home/Detail/index',array('id'=>$newsI['id']));?>" class="list_info"><?php echo ($newsI["title"]); ?></a>
                                        <time class="pull-right list_info"><?php echo (date('m-d',$newsI["date"])); ?></time>
                                    </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div><?php endforeach; endif; ?>
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