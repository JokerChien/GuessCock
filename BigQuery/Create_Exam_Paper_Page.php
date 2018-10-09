<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>题目信息</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="../layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>

<script src="../layui/layui.js" charset="utf-8"></script>
<script>
layui.use('layer', function(){ //独立版的layer无需执行这一句
  var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
  
  //触发事件
  var active = {
    confirmTrans: function(){
      //配置一个透明的询问框
      layer.msg('进一步操作请点击右上角<b style="color:green;">未登入=>登入</b>', {
        time: 20000, //20s后自动关闭
        btn: ['豁然开朗', '茅塞顿开', '如梦初醒'],
		skin: 'layer-ext-moon'
      });
    }
  };
  
  $('#layerDemo .layui-btn').on('click', function(){
    var othis = $(this), method = othis.data('method');
    active[method] ? active[method].call(this, othis) : '';
  });
  
});
</script>

<?php
session_start();
// $_GET['ID_COMP']=$_GET['ID_COMP'];
// echo $_GET['ID_COMP'];
echo '<fieldset class="layui-elem-field layui-field-title" style="margin-top: 15px;"><legend>比赛信息</legend></fieldset>';
$con = mysqli_connect("localhost","root","","guessing_league");

if (!$con){ die('Could not connect: '.mysqli_error()); return;	}

// mysqli_query($con,'create table if not exists Team_Competition_Data(id int auto_increment primary key not null, c1 varchar(20), c2 varchar(20), c3 varchar(20), c4T1 varchar(20), c4T1URL varchar(20), c4R varchar(20), c4T2 varchar(20), c4T2URL varchar(20), c51 varchar(20), c52 varchar(20), c52Link varchar(20), c53 varchar(20), c53Link varchar(20), c54 varchar(20), c54Link varchar(20)) default charset=utf8');
mysqli_query($con,'set names utf8');	//极好地解决了中文乱码问题。
$result=mysqli_query($con,"select c1,c2,c3,c4T1,c4R,c4T2 from team_competition_data where id='".$_GET['ID_COMP']."'");
while($row = mysqli_fetch_assoc($result)){
	var_dump($row);
}

//检查是否有一个创造考卷的表，没有则创建。
mysqli_query($con,'create table if not exists Exam_Paper_Data(pp_id int auto_increment primary key not null, cmp_id varchar(20), pp_title varchar(20), pp_describe varchar(4000), pp_creator varchar(20), pp_create_time varchar(20), competition_deadline_time varchar(20), revise_pp_time varchar(20), students_max_num int, score_max_num int, pp_status varchar(20) ) default charset=utf8');

// echo '<br><a class="layui-btn" href="./Create_Exam_Paper_Page.php?ID_COMP='.urlencode($_GET['ID_COMP']).'">创建相关考卷</a>';

mysqli_close($con);

echo '<fieldset class="layui-elem-field layui-field-title" style="margin-top: 15px;"><legend>创作界面</legend></fieldset>';

if(isset($_SESSION['user_id'])){
	var_dump($_SESSION);
	echo '<table class="layui-table"><tr><td><marquee><b>'.$_SESSION['user_nickname'].'</b><sup>考官</sup>在 '.date("Y-m-d H:i",time()).' 创作此考题，当时还说了一句：“'.$_SESSION['user_mark'].'。”</marquee></td></tr></table>';
	
}else{
	echo '<span class="site-demo-button" id="layerDemo" style="margin-bottom:0;text-align: center;">';
	echo '<button style="width:100%" data-method="confirmTrans" class="layui-btn layui-btn-radius">请先登入再创作</button></span>';
	// include '../UserConf/Login_Page.php';
	return;
}

?>

<form class="layui-form layui-form-pane" action="./Add_Exam_Selection_Page.php" method="POST">
	<?php
		echo '<input type="hidden" name="user_id" 		value="'.$_SESSION["user_id"].		'">';
		echo '<input type="hidden" name="user_nickname" value="'.$_SESSION["user_nickname"].'">';
		echo '<input type="hidden" name="ID_COMP" 		value="'.$_GET['ID_COMP'].			'">';
	?>

	<div class="layui-form-item">
		<label class="layui-form-label">考卷标题</label>
		<div class="layui-input-block">
			<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
		</div>
	</div>
  
	<div class="layui-form-item">
		<label class="layui-form-label">截止时间</label>
		<div class="layui-input-block">
			<input type="text" name="DeadlineTime" id="Deadline" lay-verify="date" placeholder="yyyy-MM-dd HH:mm:ss" autocomplete="off" class="layui-input">
		</div>
	</div>
	
	<div class="layui-form-item">
		<label class="layui-form-label">结算时间</label>
		<div class="layui-input-block">
			<input type="text" name="ReviseTime" id="ReviseTime" lay-verify="date1" placeholder="yyyy-MM-dd HH:mm:ss" autocomplete="off" class="layui-input">
		</div>
	</div>
	
	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">考题简述</label>
		<div class="layui-input-block">
			<textarea placeholder="请输入内容" class="layui-textarea" name="Desc"></textarea>
		</div>
	</div>
	
	<div class="layui-form-item">
		<label class="layui-form-label">考生数上限</label>
		<div class="layui-input-block">
			<input type="number" name="Students_Max_Num" lay-verify="" autocomplete="off" placeholder="默认无上限" class="layui-input">
		</div>
	</div>
	
	<div class="layui-form-item">
		<label class="layui-form-label">成本分上限</label>
		<div class="layui-input-block">
			<input type="number" name="Score_Max_Num" lay-verify="" autocomplete="off" placeholder="默认无上限" class="layui-input">
		</div>
	</div>
	
	<div class="layui-form-item">
		<div style="padding:0px 20px;">
			<!-- <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1" style="width:100%;">创建</button> -->
			<button class="layui-btn layui-btn-radius" lay-submit="" style="width:100%;" onclick="javascript:parent.scrollTo(0,0);">创建</button>
		</div>
		
		<div style="padding:5px 20px;">
			<!-- <a class="layui-btn layui-btn-primary layui-btn-radius" lay-submit="" lay-filter="demo1" style="width:100%;">取消</a> -->
			<a class="layui-btn layui-btn-primary layui-btn-radius" href='./Replace_Competition_Page.php?ID_COMP=<?PHP echo urlencode($_GET['ID_COMP']);?>' style="width:100%;" onclick="javascript:parent.scrollTo(0,0);">取消</a>
		</div>
	</div>
	
	<br>
<form>
          
<script src="../layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
	//日期
	// laydate.render({
		// elem: '#date'
	// });
	// laydate.render({
		// elem: '#date1'
	// });
	
	//日期时间范围选择
	laydate.render({ 
		elem: '#Deadline'
		,type: 'datetime'
		,range: false //或 range: '~' 来自定义分割字符
	});
	//日期时间范围选择
	laydate.render({ 
		elem: '#ReviseTime'
		,type: 'datetime'
		,range: false //或 range: '~' 来自定义分割字符
	});
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 2){
        parent.scrollTo(0,333);
		return '标题至少2个字';
      }
    }
	,date: function(value){			//日期就不校验了。
    }
	,date1: function(value){		//日期就不校验了。
		if( document.getElementById('Deadline').value>value){
			return '截止时间应<b>不晚于</b>结算时间';
		}
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,content: function(value){
		layedit.sync(editIndex);
    }
  });
  
  //监听指定开关
  form.on('switch(switchTest)', function(data){
    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
      offset: '6px'
    });
    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
	
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
 
  //表单初始赋值
  form.val('example', {
    "username": "贤心" // "name": "value"
    ,"password": "123456"
    ,"interest": 1
    ,"like[write]": true //复选框选中状态
    ,"close": true //开关状态
    ,"sex": "女"
    ,"desc": "我爱 layui"
  })
});

</script>

</body>
</html>