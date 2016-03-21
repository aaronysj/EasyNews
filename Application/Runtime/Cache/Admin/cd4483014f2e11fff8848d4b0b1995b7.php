<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表</title>

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
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo U('member/add');?>" class="btn btn-success">添加用户</a>
        </div>
        <div class="col-md-6">
            <form action="<?php echo U('member/index');?>" method="post">
                <div class="form-group input-group">
                    <input type="text" class="form-control" name="key" placeholder="输入用户名或者邮箱关键词搜索">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <td>编号</td>
                <td>用户名</td>
                <td>邮箱</td>
                <td>注册时间</td>
                <td>上次登陆</td>
                <td>登陆IP</td>
                <td>类型</td>
                <td>状态</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($member)): foreach($member as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo ($v["email"]); ?></td>
                <td><?php echo (date("Y/m/d H:i:s",$v["create_at"])); ?></td>
                <td><?php echo (date("Y/m/d H:i:s",$v["update_at"])); ?></td>
                <td><?php echo ($v["login_ip"]); ?></td>
                <td>
                    <?php if($v["type"] == 1): ?><span class="label label-success">会员</span>
                    <?php elseif($v["type"] == 2): ?><span class="label label-danger">管理员</span><?php endif; ?>
                </td> 
                <td><?php if($v["status"] == 1): ?>正常<?php else: ?><span style="color:red">禁用</span><?php endif; ?></td>
                <?php if($v["status"] == 1): ?><td><a href="<?php echo U('member/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('member/delete?id='); echo ($v["id"]); ?>" style="color:red;" onclick="javascript:return del('禁用后用户将不能登陆后台!\n\n请确认!!!');">禁用</a></td>
            	<?php else: ?>
            		<td><a href="<?php echo U('member/update?id='); echo ($v["id"]); ?>">编辑</a> | <a href="<?php echo U('member/delete?id='); echo ($v["id"]); ?>" style="color:#50AD1E;">启用</a></td><?php endif; ?>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>

<!-- JavaScript -->
<script src="/mynews/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/mynews/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/mynews/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>