<!DOCTYPE html>
<html lang="zh-cn">
<!-- 上面lang记得改成 lang="zh-cn" -->
<head>
    <!-- <meta charset="GBK"> -->
	<meta charset="UTF-8">

<!-- 作者名 -->
    <meta name="author" content="此处为作者">

<!-- 指定网页的兼容性模式设置 -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!-- #以上代码IE=edge告诉IE使用最新的引擎渲染网页，chrome=1则可以激活Chrome Frame.***记得加上这句 -->

<!-- 移动端meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"> <!-- 尺寸大小，禁止缩放 -->
    <meta name="apple-mobile-web-app-capable" content="yes">  <!-- safar浏览器全屏显示 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> <!-- 浏览器顶部颜色 -->
    <meta name="format-detection" content="telephone=no, address=no">   <!-- 数字号码不被显示为拨号链接 -->
    <meta name="apple-mobile-web-app-title" content="SEVEN">
    <meta name="aplus-terminal" content="1">

    <!-- UC默认竖屏，UC强制全屏 -->
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <!-- QQ浏览器强制竖屏 QQ浏览器强制全屏 -->
    <meta name="x5-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">

    <!-- 网页不缓存 -->
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">

<!-- 搜索优化 -->
    <meta name="description" content="网页的描述">
    <meta name="Keywords" content="搜索关键字">

    <title>2018赛季钱教授竞猜超级联赛</title>
    <link rel="icon" href="favicon.ico" sizes="32x32">
	
	<link rel="stylesheet" href="/layui/css/layui.css"  media="all">
	<!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
	<ul class="layui-nav">
	  <!-- <li class="layui-nav-item"><input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input"></li> -->
	<!-- <!-- </div> --> -->
	<!-- <li class="layui-nav-item"><button class="layui-btn" lay-submit="" lay-filter="demo1">搜索</button></li> -->
	<!-- <li class="layui-nav-item"><button type="reset" class="layui-btn layui-btn-primary">重置</button></li> -->

		<li class="layui-nav-item"><a href="/index.php">返回</a></li>
		
		<li class="layui-nav-item layui-this">
			<a href="javascript:;">搜索</a>
			<dl class="layui-nav-child">
				<dd><a href="">选项1</a></dd>
				<dd><a href="">选项2</a></dd>
				<dd><a href="">选项3</a></dd>
			</dl>
		</li>
		<!-- <li class="layui-nav-item"><a href="/index.php">返回</a></li> -->
	</ul>
	
	<!-- <img src="/2016赛季末存档.png"/> -->
	<?php
		
		$file = fopen('./csvLastSeason.csv','r');   
		while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容  
			$goods_list[] = $data;
		}
		
		print('<table class="layui-table">');
		foreach($goods_list as $i=>$row){
			print($i==0?'<thead><tr>':'<tr>');
			foreach($row as $j=>$value){
				print($i==0?'<th>':'<td>');
				print($value);
				print($i==0?'</th>':'</td>');
			}
			print($i==0?'</thead></tr>':'</tr>');
			// var_dump($row);
		}
		print('</table>');
		
		// var_dump($goods_list);
		 fclose($file);
	?>
	
	
	
<script src="/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
	layui.use('element', function(){
	  var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块
	  
	  //监听导航点击
	  element.on('nav(demo)', function(elem){
		//console.log(elem)
		layer.msg(elem.text());
	  });
	});
</script>
</body>
</html>