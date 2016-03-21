<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻-详情</title>
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
    <div class="detail" >
        <?php if(is_array($preshow)): foreach($preshow as $key=>$pre): ?><div class="pre"><a href="<?php echo U('post/detail?id='); echo ($pre["id"]); ?>"><<上一篇：<?php echo (mb_substr($pre["title"],0,10)); ?></a></div><?php endforeach; endif; ?>
        <?php if(is_array($nextshow)): foreach($nextshow as $key=>$next): ?><div class="next"><a href="<?php echo U('post/detail?id='); echo ($next["id"]); ?>">下一篇：<?php echo (mb_substr($next["title"],0,10)); ?>>></a></div><?php endforeach; endif; ?>

        <?php if(is_array($model)): foreach($model as $key=>$v): ?><h2><?php echo ($v["title"]); ?></h2>
            <div class="date"><?php echo (date("Y/m/d",$v["time"])); ?></div>
            <?php echo (stripslashes(htmlspecialchars_decode($v["content"]))); ?><br/><?php endforeach; endif; ?> 
    </div>


		<div class="footer">
			Copyright &copy;2015 By AaronYE Powered by ThinkPHP...<a href="admin.php">后台</a>
		</div>
	</div>

</body>
</html>