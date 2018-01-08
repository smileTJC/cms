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
                <li><a href="/cms/Home/Index/">首页</a></li>
                <?php if(is_array($navs)): foreach($navs as $key=>$values): ?><li><a href="<?php echo u('Home/List/index',array('id'=>$values['id']));?>"><?php echo ($values['nav_name']); ?></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
    <form action="" class="form-inline">
        <div class="dropdown pull-left search">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                搜索方式 <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="">按标题</a></li>
                <li><a href="">按关键字</a></li>
            </ul>
        </div>
        <div class="form-group pull-left">
            <input type="search" class="form-control">
            <button class="btn btn-default">搜索</button>
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
                            <b class="glyphicon glyphicon-menu-right"></b>
                            <a href="" class="more"><?php echo ($navName['nav_name']); ?></a>
                        </p>
                        <?php if(is_array($list)): foreach($list as $key=>$list_news): ?><div class="media news_info">
                            <div class="media-left">
                                <a href="">
                                    <img src="/cms/Public/img/none.jpg" alt="" class="media-object">
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="media-heading">
                                    <b>[<?php echo ($list_news['nav_name']); ?>]</b>
                                    <a href=""><?php echo ($list_news["title"]); ?></a>
                                </div>
                                <p>
                                    <time>日期: <?php echo (date("Y-m-d H:i:s",$list_news["date"])); ?> </time>
                                    <span>点击率：<?php echo ($list_news["count"]); ?> </span>
                                    <span>关键字：[<?php echo ($list_news["keyword"]); ?>]</span>
                                </p>
                                <p><?php echo (subText(100,$list_news["info"])); ?></p>
                            </div>
                            </div><?php endforeach; endif; ?>

                        <ul class="pagination">
                            <li><span>共 4 条新闻</span></li>
                            <li><a href="">上一页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">下一页</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="submenu">
                        <p class="list_title text-center"><b>子栏目列表</b></p>
                        <div class="submenu_list">
                            <?php if(is_array($subNav)): foreach($subNav as $key=>$submenu): ?><a href="<?php echo U('Home/List/index',array('id'=>$submenu['id'],'nav_name'=>$submenu['nav_name']));?>" class="btn btn-success"><?php echo ($submenu["nav_name"]); ?></a><?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>