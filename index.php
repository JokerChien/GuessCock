<!DOCTYPE html>
<html lang="zh-cn">
<!-- 上面lang记得改成 lang="zh-cn" -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>竞猜鸡超级联赛</title>
	<link rel="stylesheet" href="./layui/css/layui.css">
</head>
<!-- <body class="site-mobile"> -->
<body>
	
<div class=" layui-layout layui-layout-admin">
  <!-- <div class="layui-header " > -->
    <!-- <!-- 头部区域（可配合layui已有的水平导航） --> 
    <!-- <ul class="layui-nav"> -->
		<!-- <li class="layui-nav-item"><a id="animation-left-nav" href=".\index.php">主页</a></li> -->
		<!-- <li class="layui-nav-item"> -->
			<!-- <a href="javascript:;">操作</a> -->
			<!-- <dl class="layui-nav-child"> -->
				<!-- <dd><a href="">市场</a></dd> -->
				<!-- <dd><a href=""></a></dd> -->
				<!-- <dd><a href="">授权管理</a></dd> -->
			<!-- </dl> -->
		<!-- </li> -->
		<!-- <li class="layui-nav-item"><a href="">用户</a></li> -->
		<!-- <li class="layui-nav-item"> -->
        <!-- <a href="javascript:;">测试</a> -->
        <!-- <dl class="layui-nav-child"> -->
          <!-- <dd><a href="">邮件管理</a></dd> -->
          <!-- <dd><a href="">消息管理</a></dd> -->
          <!-- <dd><a href="">授权管理</a></dd> -->
        <!-- </dl> -->
      <!-- </li> -->
    <!-- </ul> -->
  <!-- </div> -->
  
  <div class="layui">
    <!-- 内容主体区域 -->
	<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
		<legend><p style="font-size:24px;font-family:Microsoft YaHei;font-weight:bold;font-style:italic;"><sup>2018赛季</sup>竞猜鸡超级联赛</p></legend>
	</fieldset>

	<div class="layui-header">
		<div class="layui-header" style="width:100%">
			<ul class="layui-nav">
				<li class="layui-nav-item"><a id="animation-left-nav" href="./index.php">主页</a></li>
				<li class="layui-nav-item">
					<a href="javascript:;">查询</a>
					<dl class="layui-nav-child">
					  <!-- <dd><a href="javascript:setUrl('./BigQuery/League_Inquiries.php');">赛事查询</a></dd> -->
					  <dd><a href="javascript:setUrl('./BigQuery/Team_Inquiries.php'  );">球队查询</a></dd>
					  <dd><a href="">我是考生</a></dd>
					  <dd><a href="">我是考官</a></dd>
					  <dd><a href="">其他考卷</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item"><a href="">用户</a></li>
				<li class="layui-nav-item">
					<a href="javascript:setUrl('./BigQuery/Replace_Competition_Page.php?<?php echo "ID_COMP=".urlencode('德甲09-2221:30霍芬海姆多特蒙德').""?>');">测试</a>
				</li>
			</ul>
			
			<ul class="layui-nav layui-layout-right">
			  <li class="layui-nav-item">
				<a href="javascript:;">
				  <!-- <img src="http://t.cn/RCzsdCq" class="layui-nav-img"> -->
				  <?php
					session_start();
					echo isset($_SESSION['user_nickname'])?$_SESSION['user_nickname']:'未登入';
				  ?>
				</a>
				<dl class="layui-nav-child">
					<?php
						echo isset($_SESSION['user_nickname'])?'<dd><a href="./userconf/logout_page.php">登出</a></dd>':'<dd><a href="./userconf/login_page.php" >登入</a></dd>';
					?>
				  <dd><a href="">用户设置</a></dd>
				</dl>
			  </li>
			</ul>
		</div>
	</div>
	
  <!-- <div class="layui-header"> -->
    
    <!-- <!-- 头部区域（可配合layui已有的水平导航） -->
    <!-- <ul class="layui-nav layui-layout-left"> -->
      <!-- <li class="layui-nav-item"><a href="">控制台</a></li> -->
      <!-- <li class="layui-nav-item"><a href="">商品管理</a></li> -->
      <!-- <li class="layui-nav-item"><a href="">用户</a></li> -->
      <!-- <li class="layui-nav-item"> -->
        <!-- <a href="javascript:;">其它系统</a> -->
        <!-- <dl class="layui-nav-child"> -->
          <!-- <dd><a href="">邮件管理</a></dd> -->
          <!-- <dd><a href="">消息管理</a></dd> -->
          <!-- <dd><a href="">授权管理</a></dd> -->
        <!-- </dl> -->
      <!-- </li> -->
    <!-- </ul> -->
    <!-- <ul class="layui-nav layui-layout-right"> -->
      <!-- <li class="layui-nav-item"> -->
        <!-- <a href="javascript:;"> -->
          <!-- <img src="http://t.cn/RCzsdCq" class="layui-nav-img"> -->
          <!-- 贤心 -->
        <!-- </a> -->
        <!-- <dl class="layui-nav-child"> -->
          <!-- <dd><a href="">基本资料</a></dd> -->
          <!-- <dd><a href="">安全设置</a></dd> -->
        <!-- </dl> -->
      <!-- </li> -->
      <!-- <li class="layui-nav-item"><a href="">退了</a></li> -->
    <!-- </ul> -->
  <!-- </div> -->
	
	<div style="left:0px;padding:10px">
		<iframe name="main" src="./TopPage.php" frameborder="0" width="100%" scrolling="no" id="bodyiFrame" onload="changeFrameHeight()"></iframe>
	</div>

	
<script src="./layui/layui.js" charset="utf-8"></script>
	<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>

	//以下是IFRAME相关的JS代码
	var setUrl=function(url){	//刷新iframe的页面
		main.location=url;
	}
	
	function changeFrameHeight(){	//改变iframe的高度
		var ifm=document.getElementById("bodyiFrame");
		//var src=document.getElementById("bodyiFrame").getAttribute("src");
		ifm.height=Math.max(ifm.contentWindow.document.body.clientHeight,document.documentElement.clientHeight);//需要去掉底部FOOTER的高度
		//window.alert(document.getElementById("bodyiFrame").getAttribute("src"));
	}
	
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