<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="./layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>  

<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
  <ul class="layui-tab-title">
    <li class="layui-this">境内分行</li>
    <li>境外分行</li>
    <li>券商</li>
    <li>合作方</li>
    <li>人行</li>
	<li>重点联系网点</li>
  </ul>
  <div class="layui-tab-content" style="height: 100px;">
    <div class="layui-tab-item layui-show"><table class="layui-table" lay-data="{height:'full-200',url:'aaa.json', id:'test3'}" lay-filter="test3">
		  <thead>
			<tr>
			  <th lay-data="{type:'checkbox'}">ID</th>
			  <th lay-data="{field:'id', width:80, sort: true}">ID</th>
			  <th lay-data="{field:'username', width:120, sort: true, edit: 'text'}">用户名</th>
			  <th lay-data="{field:'email', edit: 'text', minWidth: 150}">邮箱</th>
			  <th lay-data="{field:'sex', width:80, edit: 'text'}">性别</th>
			  <th lay-data="{field:'city', edit: 'text', minWidth: 100}">城市</th>
			  <th lay-data="{field:'experience', sort: true, edit: 'text'}">电话</th>
			</tr>
		  </thead>
		</table>
	</div>
  

  </div>
</div>


          
<script src="./layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use('table', function(){
  var table = layui.table;
  
  //监听单元格编辑
  table.on('edit(test3)', function(obj){
    var value = obj.value //得到修改后的值
    ,data = obj.data //得到所在行所有键值
    ,field = obj.field; //得到字段
    layer.msg('[ID: '+ data.id +'] ' + field + ' 字段更改为：'+ value);
  });
});
</script>

<script>
//以下是IFRAME相关的JS代码
var setUrl=function(url){	//刷新iframe的页面
	main.location=url;
}

function changeFrameHeight(){	//改变iframe的高度
	var ifm=document.getElementById("bodyiFrame");
	//var src=document.getElementById("bodyiFrame").getAttribute("src");
	ifm.height=Math.max(ifm.contentWindow.document.body.clientHeight,document.documentElement.clientHeight);
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