<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的新闻</title>
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
    <div class="slide clearfix">
        <div class="slideimg"><a href="<?php echo U('post/detail?id=25');?>">
        <img src="/mynews/Application/Home/View//Public/static/img/2.jpg" />
        </div>
        <div class="slidecontent">
            <h1>国家主席习近平访英</h1>
            <p>国家主席习近平宣告同英国"全球全面战略伙伴关系"，第一步将是中方对英国一代人以来首座新建核电厂投资60亿英镑。各方期待已久的这笔投资将启动欣克利角(Hinkley Point)反应堆建设。与此同时，习近平昨日下午与英国首相戴维•卡梅伦(David Cameron)在唐宁街首相府会晤。在会后举行的新闻发布会上，英国首相和中国国家主席发表了事先准备好的简短讲话，聚焦于两国构建更紧密关系的经济效益。卡梅伦宣告英中关系进入“新时代”，两国在多个项目上开展合作，包括廉价钢材供应过度问题...</p></a>
        </div>
    </div>

    <div class="clearfix">
        <div class="newslist">
            <div class="block1 block">
                <div class="subtitle">热门</div>
                <hr>
                <?php if(is_array($hot)): foreach($hot as $key=>$h): ?><ul>
                    <li><a href="<?php echo U('post/detail?id='); echo ($h["id"]); ?>"><?php echo (mb_substr($h["title"],0,20)); ?></a><span class="indextime"><?php echo (date("[m-d]",$h["time"])); ?></span></li>
                </ul><?php endforeach; endif; ?>
            </div>
        </div>
        
        <div class="newslist">
            <div class="block2 block">
                <div class="subtitle">校内</div>
                <hr>
                <?php if(is_array($school)): foreach($school as $key=>$s): ?><ul>
                    <li><a href="<?php echo U('post/detail?id='); echo ($s["id"]); ?>"><?php echo (mb_substr($s["title"],0,20)); ?></a><span class="indextime"><?php echo (date("[m-d]",$s["time"])); ?></span></li>
                </ul><?php endforeach; endif; ?>
            </div>
        </div>

        <div class="newslist">
            <div class="block3 block">
                <div class="subtitle">国内</div>
                <hr>
                <?php if(is_array($domestic)): foreach($domestic as $key=>$d): ?><ul>
                    <li><a href="<?php echo U('post/detail?id='); echo ($d["id"]); ?>"><?php echo (mb_substr($d["title"],0,20)); ?></a><span class="indextime"><?php echo (date("[m-d]",$d["time"])); ?></span></li>
                </ul><?php endforeach; endif; ?>
            </div>
        </div>

        <div class="newslist">
            <div class="block4 block">
                <div class="subtitle">国际</div>
                <hr>
                <?php if(is_array($abroad)): foreach($abroad as $key=>$a): ?><ul>
                    <li><a href="<?php echo U('post/detail?id='); echo ($a["id"]); ?>"><?php echo (mb_substr($a["title"],0,20)); ?></a><span class="indextime"><?php echo (date("[m-d]",$a["time"])); ?></span></li>
                </ul><?php endforeach; endif; ?>
            </div>
        </div>
    </div>


		<div class="footer">
			Copyright &copy;2015 By AaronYE Powered by ThinkPHP...<a href="admin.php">后台</a>
		</div>
	</div>

</body>
</html>