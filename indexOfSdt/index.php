<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- <div id="demo" style="position:fixed;left: 0px;top:0px;width:100%;height:80px;border: solid 1px gray;padding-left:20px;color:black;font-size:12px;line-height: 12px;text-align:left;background:#fff;"><br/>
	<form id="form2" runat="server" method="post" style="height:33px;border:solid 1px gray;width:555px">
		<input name="SrchText" type="text" class="srchBox" style="vertical-align:middle;margin:0px;height:100%;top:0px;padding:0px;border:0;width:333px"/>
		<input name="SSSubmit" type="submit" value="产度搜索" style="margin:0px;border:1px solid gray;vertical-align:middle;height:85%;width:211px;padding:0px;"/>
		<p>注：输入help获得帮助</p>
	</form>

	<?php
		// if(@$_POST["SSSubmit"]=="产度搜索") {    //变量前加@，让系统对没定义过的变量不要报错。
			// header("Location:./RtbData.php");
		// }
	?>
</div> -->


<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
	<!-- <meta charset="gb2312"> -->
	<title>生调台</title>
	<style type="text/css">
		.theHref  {
			line-height: 23px ;font-size:14px;
		}
		.theTitle{
			font-family:"幼圆";font-size:22px;color:#aaa;
		}
		.theSubText{
			font-family:"微软雅黑";font-size:14px;color:gray;
		}
	</style>
 
	<link rel="stylesheet" href="./layui/css/layui.css"  media="all">
</head>
	
<body>
<!-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
	<legend>生产调度办公室</legend>
</fieldset> -->

<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo theTitle" style="font-size:22px;color:#aaa;">生调台</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">自动化管理</a>
        <dl class="layui-nav-child">
			<dd><a href="">实时监控</a></dd>
			<dd><a href="">报表统计</a></dd>
			<dd><a href="">需求进度</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">用户管理</a></li>
	  <li class="layui-nav-item"><a href="">学习频道</a></li>
	  
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
			<dd><a href="">邮件管理</a></dd>
			<dd><a href="">消息管理</a></dd>
			<dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          太2真人
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退出 </a></li>
    </ul>
  </div>



<div class="layui-side layui-bg-black">
	<div class="layui-side-scroll">
	  <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
	  <ul class="layui-nav layui-nav-tree"  lay-filter="test">
		<li class="layui-nav-item layui-nav-itemed">
		  <a class="" href="javascript:;">对外服务</a>
		  <dl class="layui-nav-child">
			<dd><a href="javascript:setUrl('./contacts.php');">联络信息库</a></dd>
			<dd><a href="javascript:setUrl('./FormTest.php');">表单演示</a></dd>
			<dd><a href="javascript:setUrl('./Rtb_TimeLine.php');">日通报时间线</a></dd>
			<dd><a href="javascript:setUrl('./Ywl.php');">白皮书自动化</a></dd>
			<dd><a href="javascript:setUrl('./Kyl.php');">可用率自动报表</a></dd>
			<dd><a href="">超链接</a></dd>
		  </dl>
		</li>
		<li class="layui-nav-item">
		  <a href="javascript:;">应急管理</a>
		  <dl class="layui-nav-child">
			<dd><a href="javascript:;">列表一</a></dd>
			<dd><a href="javascript:;">列表二</a></dd>
			<dd><a href="">超链接</a></dd>
		  </dl>
		</li>
		<li class="layui-nav-item">
		  <a href="javascript:;">问题管理</a>
		  <dl class="layui-nav-child">
			<dd><a href="javascript:;">列表一</a></dd>
			<dd><a href="javascript:;">列表二</a></dd>
			<dd><a href="">超链接</a></dd>
		  </dl>
		</li>
		<li class="layui-nav-item">
		  <a href="javascript:;">变更管理</a>
		  <dl class="layui-nav-child">
			<dd><a href="javascript:;">列表一</a></dd>
			<dd><a href="javascript:;">列表二</a></dd>
			<dd><a href="">超链接</a></dd>
		  </dl>
		</li>
		<li class="layui-nav-item"><a href="">产度搜索</a></li>
		<li class="layui-nav-item"><a href="./FormTest.php">产品发布</a></li>
	  </ul>
	</div>
</div>

<div class="layui-body">
	<!-- 内容主体区域 -->
	<div style="padding: 15px;">

<iframe name="main" src="./TopPage.php" frameborder="0" width="100%" scrolling="no" id="bodyiFrame" onload="changeFrameHeight()" >

</iframe>
	
<!-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
	<legend>信息公告</legend>
</fieldset>
	
<p style="padding: 15px;">今日无信息公告</p>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>通用工具</legend>
</fieldset>
 
<div class="layui-tab">
	<ul class="layui-tab-title">
		<li class="layui-this">快捷工具</li>
		<li>变更管理月通报</li>
		<li>问题管理月通报</li>
		<li>业务量月通报</li>
		<li>其他通报</li>
	</ul>
<div class="layui-tab-content">
    <div class="layui-tab-item layui-show">
	  	<table>
			<tr>
				<td style="width:30%;"><a href="./境外分行应用分拣工具 2018-03-05.xls" class="theHref">◆ 境外分行应用分拣工具</a></td>
				<td style="width:30%;"><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27kefu%27%5d%2ffolder%5b%40name%3d%27dccs-qiansc%27%5d%2freport%5b%40name%3d%27A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85%27%5d&ui.name=A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3di3775AAE567CE478BA784109496D05CF7%26m_folder2%3dm-iE5A1A56EAB014AB1808123DC24733B89" class="theHref">
					◆ A岗紧急变更单号扩展包</td> 
				<td style="width:30%;"><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27kefu%27%5d%2ffolder%5b%40name%3d%27dccs-qiansc%27%5d%2freport%5b%40name%3d%27A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85_%e4%b8%93%e4%b8%9a%e7%89%88%27%5d&ui.name=A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85_%e4%b8%93%e4%b8%9a%e7%89%88&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3di3775AAE567CE478BA784109496D05CF7" class="theHref">
					◆ A岗紧急变更单号扩展包(专业版)</td>
			</tr>
			<tr>
				<td style="width:30%;"><a href="http://76.7.35.31/sep/" class="theHref">◆ SEP软件安装包下载</a><a href="http://76.7.35.31/patch/" class="theHref">（◆ 补丁）</a></td>
				<td style="width:30%;"><a href="http://76.34.14.51/hrm/index.php" class="theHref">◆ 上数e办公</a></td>
				<td style="width:30%;"><a href="http://84.10.95.101/PolicySearch/" class="theHref">◆ 制度搜</a></td>
			</tr> 
			<tr>
				<td style="width:30%;"><a href="https://80.37.241.11/icbc/newperbank/perbank3/frame/frame_index.jsp" class="theHref">◆ 工银融E行</a></td>
				<td style="width:30%;"><a href="http://76.10.175.21:1981/dccshresource/index.php" class="theHref">◆ 资源下载中心</a></td>
				
			</tr>
		</table>	
    </div>
	
    <div class="layui-tab-item">
		<a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%e3%80%81P15%e3%80%81P57%e3%80%81P58%e3%80%81P59%ef%bc%89%e5%8f%98%e6%9b%b4%e7%ae%a1%e7%90%86%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%e3%80%81P15%e3%80%81P57%e3%80%81P58%e3%80%81P59%ef%bc%89%e5%8f%98%e6%9b%b4%e7%ae%a1%e7%90%86&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
			◆ 月通报（P4、P5、P15、P57、P58、P59）变更管理</a><sub class='theSubText'>（需输年月：YYYYMM）</sub>
	</div>
	
    <div class="layui-tab-item">
				<table>
			<tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%ef%bc%89%e4%ba%8b%e4%bb%b6%e9%97%ae%e9%a2%98-2017-11-10%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%ef%bc%89%e4%ba%8b%e4%bb%b6%e9%97%ae%e9%a2%98-2017-11-10&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref"> 
					◆ 月通报（P4、P5）事件问题</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P13%e3%80%81P53%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e6%8a%a5%e5%91%8a%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P13%e3%80%81P53%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e6%8a%a5%e5%91%8a&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
					◆ 月通报（P13、P53）问题统计报告</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
			</tr><tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P52%e3%80%81P54%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e5%a4%84%e7%90%86%e8%80%97%e6%97%b6%20New%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P52%e3%80%81P54%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e5%a4%84%e7%90%86%e8%80%97%e6%97%b6%20New&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
					◆ 月通报（P52、P54）问题统计处理耗时</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e9%83%a8%e9%97%a8%e4%ba%8b%e4%bb%b6%e5%85%b3%e9%97%ad%e8%80%97%e6%97%b6%e8%a1%a8%27%5d&ui.name=%e9%83%a8%e9%97%a8%e4%ba%8b%e4%bb%b6%e5%85%b3%e9%97%ad%e8%80%97%e6%97%b6%e8%a1%a8&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 部门事件关闭耗时表</a></td>
			</tr><tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e5%90%84%e5%88%86%e8%a1%8c%e4%ba%8b%e4%bb%b6%e5%88%86%e5%b8%83%e7%bb%9f%e8%ae%a1%e6%b8%85%e5%8d%95%27%5d&ui.name=%e5%90%84%e5%88%86%e8%a1%8c%e4%ba%8b%e4%bb%b6%e5%88%86%e5%b8%83%e7%bb%9f%e8%ae%a1%e6%b8%85%e5%8d%95&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 各分行事件分布统计清单</a></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e4%b8%8d%e5%90%8c%e7%8e%af%e8%8a%82%e7%9a%84%e5%81%9c%e7%95%99%e6%97%b6%e9%97%b4%e8%a1%a8%27%5d&ui.name=%e4%b8%8d%e5%90%8c%e7%8e%af%e8%8a%82%e7%9a%84%e5%81%9c%e7%95%99%e6%97%b6%e9%97%b4%e8%a1%a8&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 不同环节的停留时间表</a><sup><font color=red><marquee width=33 behavior=alternate>New</marquee> </font></sup></td>
			</tr><tr>
				
			</tr>
		</table>
	</div>
    <div class="layui-tab-item">
		<a href="./Ywl.php" class="theHref">◆ 业务量月通报（P7、P46、P47）</a><sub class='theSubText'>（需输年月：YYYYMM）</sub>
	</div>
    <div class="layui-tab-item">
		<a href="./TiKu2018-03-19.html" class="theHref" >◆ 题库：纠正错误的选项并提交</a>
		<br><a href="./BlackBoard.php" class="theHref">◆ 我的小黑板</a>
	</div>
  </div>
</div> -->



<!-- 	<table>
		<tr>
			<td style="width:30%;"><a href="./境外分行应用分拣工具 2018-03-05.xls" class="theHref">境外分行应用分拣工具</a></td>
			<td style="width:30%;"><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27kefu%27%5d%2ffolder%5b%40name%3d%27dccs-qiansc%27%5d%2freport%5b%40name%3d%27A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85%27%5d&ui.name=A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3di3775AAE567CE478BA784109496D05CF7%26m_folder2%3dm-iE5A1A56EAB014AB1808123DC24733B89" class="theHref">
				A岗紧急变更单号扩展包</td> 
			<td style="width:30%;"><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27kefu%27%5d%2ffolder%5b%40name%3d%27dccs-qiansc%27%5d%2freport%5b%40name%3d%27A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85_%e4%b8%93%e4%b8%9a%e7%89%88%27%5d&ui.name=A%e5%b2%97%e7%b4%a7%e6%80%a5%e5%8f%98%e6%9b%b4%e5%8d%95%e5%8f%b7%e6%89%a9%e5%b1%95%e5%8c%85_%e4%b8%93%e4%b8%9a%e7%89%88&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3di3775AAE567CE478BA784109496D05CF7" class="theHref">
				A岗紧急变更单号扩展包(专业版)</td>
		</tr>
		<tr>
			<td style="width:30%;"><a href="http://76.7.35.31/sep/" class="theHref">SEP软件安装包下载</a><a href="http://76.7.35.31/patch/" class="theHref">（补丁）</a></td>
			<td style="width:30%;"><a href="http://76.34.14.51/hrm/index.php" class="theHref">上数e办公</a></td>
			<td style="width:30%;"><a href="http://84.10.95.101/PolicySearch/" class="theHref">制度搜</a></td>
		</tr> 
		<tr>
			<td style="width:30%;"><a href="https://80.37.241.11/icbc/newperbank/perbank3/frame/frame_index.jsp" class="theHref">工银融E行</a></td>
			<td style="width:30%;"><a href="http://76.10.175.21:1981/dccshresource/index.php" class="theHref">资源下载中心</a></td>
			
		</tr>
	</table>
 -->		
<!-- 		<p class="theTitle">变更管理月通报（P4、P5、P15、P57、P58、P59）</p>
		<a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%e3%80%81P15%e3%80%81P57%e3%80%81P58%e3%80%81P59%ef%bc%89%e5%8f%98%e6%9b%b4%e7%ae%a1%e7%90%86%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%e3%80%81P15%e3%80%81P57%e3%80%81P58%e3%80%81P59%ef%bc%89%e5%8f%98%e6%9b%b4%e7%ae%a1%e7%90%86&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
			◆ 月通报（P4、P5、P15、P57、P58、P59）变更管理</a><sub class='theSubText'>（需输年月：YYYYMM）</sub>
		<br/><p class="theTitle">问题管理</p>
		<table>
			<tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%ef%bc%89%e4%ba%8b%e4%bb%b6%e9%97%ae%e9%a2%98-2017-11-10%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P4%e3%80%81P5%ef%bc%89%e4%ba%8b%e4%bb%b6%e9%97%ae%e9%a2%98-2017-11-10&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref"> 
					◆ 月通报（P4、P5）事件问题</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P13%e3%80%81P53%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e6%8a%a5%e5%91%8a%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P13%e3%80%81P53%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e6%8a%a5%e5%91%8a&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
					◆ 月通报（P13、P53）问题统计报告</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
			</tr><tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27SCDDZH%27%5d%2freport%5b%40name%3d%27%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P52%e3%80%81P54%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e5%a4%84%e7%90%86%e8%80%97%e6%97%b6%20New%27%5d&ui.name=%e6%9c%88%e9%80%9a%e6%8a%a5%ef%bc%88P52%e3%80%81P54%ef%bc%89%e9%97%ae%e9%a2%98%e7%bb%9f%e8%ae%a1%e5%a4%84%e7%90%86%e8%80%97%e6%97%b6%20New&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diDBB2033DBAE84C648C2F037EA8473060" class="theHref">
					◆ 月通报（P52、P54）问题统计处理耗时</a><sub class='theSubText'>（需输年月：YYYYMM）</sub></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e9%83%a8%e9%97%a8%e4%ba%8b%e4%bb%b6%e5%85%b3%e9%97%ad%e8%80%97%e6%97%b6%e8%a1%a8%27%5d&ui.name=%e9%83%a8%e9%97%a8%e4%ba%8b%e4%bb%b6%e5%85%b3%e9%97%ad%e8%80%97%e6%97%b6%e8%a1%a8&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 部门事件关闭耗时表</a></td>
			</tr><tr>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e5%90%84%e5%88%86%e8%a1%8c%e4%ba%8b%e4%bb%b6%e5%88%86%e5%b8%83%e7%bb%9f%e8%ae%a1%e6%b8%85%e5%8d%95%27%5d&ui.name=%e5%90%84%e5%88%86%e8%a1%8c%e4%ba%8b%e4%bb%b6%e5%88%86%e5%b8%83%e7%bb%9f%e8%ae%a1%e6%b8%85%e5%8d%95&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 各分行事件分布统计清单</a></td>
				<td><a href="http://84.29.14.105:9080/p2pd/servlet/dispatch?b_action=cognosViewer&ui.action=run&ui.object=%2fcontent%2fpackage%5b%40name%3d%27sd_inc%27%5d%2ffolder%5b%40name%3d%27sdb%27%5d%2ffolder%5b%40name%3d%27SD%20INC%20ANALYSIS%27%5d%2freport%5b%40name%3d%27%e4%b8%8d%e5%90%8c%e7%8e%af%e8%8a%82%e7%9a%84%e5%81%9c%e7%95%99%e6%97%b6%e9%97%b4%e8%a1%a8%27%5d&ui.name=%e4%b8%8d%e5%90%8c%e7%8e%af%e8%8a%82%e7%9a%84%e5%81%9c%e7%95%99%e6%97%b6%e9%97%b4%e8%a1%a8&run.outputFormat=&run.prompt=true&ui.backURL=%2fp2pd%2fservlet%2fdispatch%3fb_action%3dxts.run%26m%3dportal%2fcc.xts%26m_folder%3diAEAC8F69BEBE458DB098CD7C175D6730" class="theHref"> 
					◇ 不同环节的停留时间表</a><sup><font color=red><marquee width=33 behavior=alternate>New</marquee> </font></sup></td>
			</tr><tr>
				
			</tr>
		</table>

		<br/><p class="theTitle">业务量月通报（P7、P46、P47）</p> 
			<a href="./Ywl.php" class="theHref">◆ 业务量月通报（P7、P46、P47）</a><sub class='theSubText'>（需输年月：YYYYMM）</sub> -->
    <!-- <form id="form1" runat="server" method="post">
		  <br/><input type="text" name="aaa" />
    	<input  type="submit" name="bbb" value="搜索" />

		</form>

    <?php
     	if(@$_POST["bbb"]=="搜索"){
     	 		echo $_POST['aaa'];
          echo "ssss";
      }
    ?> -->
	</div>
</div>  

<div class="layui-footer">
	<!-- 底部固定区域 -->
	©sdb.com - 台长：钱嗣超 021-28989307 13917292776 9991@dccsh.icbc.com.cn
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
	
	window.onresize=function(){  //当窗口发生变化时，也要触发高度的变化
		changeFrameHeight();  
	} 
	
	//以下是LAYUI相关的JS代码
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