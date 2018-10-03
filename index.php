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
					  <dd><a href="javascript:setUrl('./BigQuery/League_Inquiries.php');">赛事查询</a></dd>
					  <dd><a href="javascript:setUrl('./BigQuery/Team_Inquiries.php'  );">球队查询</a></dd>
					  <dd><a href="">我的竞猜</a></dd>
					  <dd><a href="">别人出题</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item"><a href="">用户</a></li>
				<li class="layui-nav-item">
					<a href="javascript:setUrl('./BigQuery/Replace_Competition_Page.php');">测试</a>
				</li>
			</ul>
			
			<ul class="layui-nav layui-layout-right">
			  <li class="layui-nav-item">
				<a href="javascript:;">
				  <!-- <img src="http://t.cn/RCzsdCq" class="layui-nav-img"> -->
				  未登陆
				</a>
				<dl class="layui-nav-child">
				  <dd><a href="">登入</a></dd>
				  <dd><a href="">登出</a></dd>
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

	<!-- <table class="layui-table" lay-skin="line"> -->
	  <!-- <colgroup> -->
		<!-- <col width="10%"> -->
		<!-- <col width="20%"> -->
		<!-- <col width="17%"> -->
		<!-- <col width="17%"> -->
		<!-- <col width="17%"> -->
		<!-- <col> -->
	<!-- </colgroup> -->
	<!-- <thead><tr><th>	#	</th><th>	姓名	</th><th>	积分	</th><th>	开盘	</th><th>	接盘	</th><th>	利率	</th></tr></thead> -->
	<!-- <tr><td>	1	</td><td>	纲哥	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	2	</td><td>	李梁	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	3	</td><td>	钱老师	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	4	</td><td>	宋胖子	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	5	</td><td>	大茅	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	6	</td><td>	王昊	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	7	</td><td>	陈健	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	8	</td><td>	许万三	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	9	</td><td>	小蔡	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	10	</td><td>	波波	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	11	</td><td>	杜涵琪	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	12	</td><td>	空哥	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	13	</td><td>	鹏哥	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	14	</td><td>	邹宇	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	15	</td><td>	戴磊	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	16	</td><td>	瞿展堂	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	17	</td><td>	马司令	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	18	</td><td>	朱力	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- <tr><td>	19	</td><td>	武老峰	</td><td>	0	</td><td>	0	</td><td>	0	</td><td>	0%	</td></tr> -->
	<!-- </table> -->
  <!-- </div> -->
  

	
		
		
		
		
	<!-- <ul class="layui-nav"> -->
		
		<!-- <li class="layui-nav-item"><a href="/Login.php">主页</a></li> -->
		<!-- <li class="layui-nav-item layui-this"> -->
			<!-- <a href="javascript:;">搞事</a> -->
			<!-- <dl class="layui-nav-child"> -->
				<!-- <dd><a href="./TanChuCeng.php">竞猜表</a></dd> -->
				<!-- <dd><a href="">选项2</a></dd> -->
				<!-- <dd><a href="">选项3</a></dd> -->
			<!-- </dl> -->
		<!-- </li> -->
		
		<!-- <li class="layui-nav-item"><a href="/LastSeason.php">配置</a></li> -->
		<!-- <li class="layui-nav-item layui-this"> -->
			<!-- <a href="javascript:;">测试</a> -->
			<!-- <dl class="layui-nav-child"> -->
				<!-- <dd><a href="./TanChuCeng.php">弹出层样例</a></dd> -->
				<!-- <dd><a href="">选项2</a></dd> -->
				<!-- <dd><a href="">选项3</a></dd> -->
			<!-- </dl> -->
		<!-- </li> -->
	<!-- </ul> -->
	
	
	
		<!-- </table> -->
	  <!-- </div> -->
		
	
	<!-- <div class="layui-form-item"> -->
		<!-- <div class="layui-input-block"> -->
		  
		<!-- </div> -->
	<!-- </div> -->
	<!-- </form> -->
	

	
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