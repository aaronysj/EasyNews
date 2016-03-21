<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>搜索结果</title>
	<link href="/mynews/Application/Home/View//Public/static/css/reset.css" rel="stylesheet">
	<link href="/mynews/Application/Home/View//Public/static/css/style.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
	<div class="banner"><a href="<?php echo U('post/index');?>">MyNews新闻发布系统</div>
		<div class="navigation">
			<ul>
				<li>
					<a href="<?php echo U('post/index');?>">首页</a>
				</li>
				<li>
					<a href="<?php echo U('post/classify?type=2');?>">热门新闻</a>
				</li>
				<li>
					<a href="<?php echo U('post/classify?type=15');?>">校内新闻</a>
				</li>
				<li>
					<a href="<?php echo U('post/classify?type=16');?>">国内新闻</a>
				</li>
				<li>
					<a href="<?php echo U('post/classify?type=17');?>">国际新闻</a>
				</li>
			</ul>
		</div>

		<div class="search">
            <form action="<?php echo U('post/search');?>" method="post">
                    <input type="text" class="form-control" name="key" placeholder="输入文章标题、作者或者分类关键词搜索">
            </form>
        </div>

<div class="classify">

<div class="clearfix">
        <div class="newslist">
            <div class="blockclassify">
                
                <?php if(is_array($search)): foreach($search as $key=>$s): ?><ul>
                    	<li><a href="<?php echo U('post/detail?id='); echo ($s["id"]); ?>"><?php echo ($s["title"]); ?></a><span class="indextime"><?php echo (date("[Y-m-d]",$s["time"])); ?></span></li>
                	</ul><?php endforeach; endif; ?>
            </div>
        </div>
</div>

</div>

		<div class="footer">
			Copyright &copy;2015 By AaronYE Powered by ThinkPHP...<a href="admin.php">后台</a>
		</div>
	</div>

</body>
</html>