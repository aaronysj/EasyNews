<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加用户</title>

    <!-- Bootstrap core CSS -->
    <link href="/mynews/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/mynews/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/mynews/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>">管理后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav">
    <li><a href="<?php echo U('index/index');?>"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
    <li class="dropdown">
        <a href="<?php echo U('category/index');?>"><i class="fa fa-reorder"></i> 分类管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('post/index');?>"><i class="fa fa-edit"></i> 文章管理</a>
    </li>
    <!-- <li class="dropdown">
        <a href="<?php echo U('page/index');?>"><i class="fa fa-file-text-o"></i> 单页管理 </a>
    </li> -->
    <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  
    </li>
     <!-- <li class="dropdown">
        <a href="<?php echo U('links/index');?>"><i class="fa fa-link"></i> 链接管理</a>
    </li> -->
    <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('setting/index');?>">自定义字段</a></li>
            <li><a href="#">系统优化</a></li>
            <li><a href="#">缓存管理</a></li>
        </ul>
    </li> -->
</ul>

            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 你好,<?php echo session('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<div id="page-wrapper">
<form action="<?php echo U('member/add');?>" method="post">
	<div class="form-group">
		<label>用户名</label>
		<input class="form-control" type="text" name="username" placeholder="username">
	</div>
	<div class="form-group">
		<label>邮箱</label>
		<input class="form-control" type="text" name="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label>密码</label>
		<input class="form-control" type="password" name="password" placeholder="password">
	</div>
	<div class="form-group">
		<label>确认密码</label>
		<input class="form-control" type="password" name="repassword" placeholder="repassword">
	</div>
	<div class="form-group">
        <label>用户类型</label>
        <label class="radio-inline">
          <input type="radio" name="type" id="type" value="1" checked="checked">前台用户
        </label>
        <label class="radio-inline">
          <input type="radio" name="type" id="type" value="2">管理员
        </label>
    </div>
	<div class="form-group">
        <label>用户状态</label>
        <label class="radio-inline">
          <input type="radio" name="status" id="status" value="0">禁止登陆
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" id="status" value="1"  checked="checked">正常
        </label>
    </div>
	<div class="form-group">
		<button class="btn btn-success" type="submit" >添加</button>
	</div>


</form>
</div>

<!-- JavaScript -->
<script src="/mynews/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/mynews/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/mynews/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>