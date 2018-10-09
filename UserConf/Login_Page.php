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

<?php

// var_dump($_POST['username']);
// var_dump($_POST['password']);

$output='
<form class="layui-form" action="./Login_Page.php" lay-filter="example" method="POST">
	<div class="layui-form-item">
		<div style="padding:20px 20px 0px;">
			<input type="text" name="username" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
		</div>
	</div>
  
	<div class="layui-form-item">
		<div style="padding:0px 20px;">
			<input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
		</div>
	</div>
  
	<div class="layui-form-item">
		<div style="padding:0px 20px;">
			<button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1" style="width:100%;">立即提交</button>
			
		</div>
		
		<div style="padding:5px 20px;">
			<a class="layui-btn layui-btn-primary layui-btn-radius" lay-submit="" lay-filter="demo1" style="width:100%;">新用户注册</a>
		</div>
		
		<div style="padding:5px 20px;">
			<a class="layui-btn layui-btn-primary layui-btn-radius" lay-submit="" lay-filter="demo1" style="width:100%;" href="../">回到首页</a>
		</div>
	</div>
</form>';

session_start();
if(isset($_SESSION['user_id'])){
	var_dump( $_SESSION);
	echo '<a class="layui-btn layui-btn-radius" href="../index.php">回到首页</a>';
	// header("../index.php");
	return;
}else if(isset($_POST["username"]) and isset($_POST["password"])){
	
}else{
	echo $output;
	return;
}

$con = mysqli_connect("localhost","root","","guessing_league");
if (!$con){ die('Could not connect: '.mysqli_error()); return; }
	
//如果数据表不存在，则创建这个表。阿凡达数据和聚合数据的数据结构都是一样的。
mysqli_query($con,'create table if not exists user_list(user_id int primary key not null AUTO_INCREMENT, user_name varchar(20), user_password varchar(20), user_nickname varchar(20), user_mark varchar(20)) default charset=utf8');
mysqli_query($con,'set names utf8');	//极好地解决了中文乱码问题。

$result=mysqli_query($con,"select * from user_list where user_name='".$_POST["username"]."' and user_password='".$_POST["password"]."'");
if(mysqli_num_rows($result)){
	echo "登陆成功";
	while($row=mysqli_fetch_assoc($result)){
		var_dump( $row);
		$user_data=$row;
	}
	$_SESSION=$user_data;
	echo '<a class="layui-btn layui-btn-radius" href="../index.php">回到首页</a>';
	header("location:../index.php");
}else{
	echo $output;
	echo "登陆失败，反正不是用户就是密码错。来来来，重新输一下。";
}

mysqli_close($con);
return;

?>

<?php
	

	
// $_GET['ID_COMP']='德甲09-2221:30霍芬海姆多特蒙德';
// // echo $_GET['ID_COMP'];
// echo '<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"><legend><p style="font-size:24px;font-family:Microsoft YaHei;font-weight:bold;font-style:italic;">赛事信息</p></legend></fieldset>';
// $con = mysqli_connect("localhost","root","","guessing_league");

// if (!$con){ die('Could not connect: '.mysqli_error()); return;	}

// // mysqli_query($con,'create table if not exists Team_Competition_Data(id int auto_increment primary key not null, c1 varchar(20), c2 varchar(20), c3 varchar(20), c4T1 varchar(20), c4T1URL varchar(20), c4R varchar(20), c4T2 varchar(20), c4T2URL varchar(20), c51 varchar(20), c52 varchar(20), c52Link varchar(20), c53 varchar(20), c53Link varchar(20), c54 varchar(20), c54Link varchar(20)) default charset=utf8');
// mysqli_query($con,'set names utf8');	//极好地解决了中文乱码问题。
// $result=mysqli_query($con,"select c1,c2,c3,c4T1,c4R,c4T2 from team_competition_data where id='".$_GET['ID_COMP']."'");
// while($row = mysqli_fetch_assoc($result)){
	// var_dump($row);
// }

// //检查是否有一个创造考卷的表，没有则创建。
// mysqli_query($con,'create table if not exists Exam_Paper_Data(pp_id int auto_increment primary key not null, cmp_id varchar(20), pp_title varchar(20), pp_describe varchar(20), pp_creator varchar(20), pp_create_time varchar(20), competition_deadline_time varchar(20), revise_pp_time varchar(20), students_max_num int, score_max_num int, pp_status varchar(20) ) default charset=utf8');

// // echo '<br><a class="layui-btn" href="./Create_Exam_Paper_Page.php?ID_COMP='.urlencode($_GET['ID_COMP']).'">创建相关考卷</a>';

// mysqli_close($con);

// echo '创建考试相关表单 blablablablablabla...........'


?>
          
<script src="../layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //日期
  laydate.render({
    elem: '#date'
  });
  laydate.render({
    elem: '#date1'
  });
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
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
	
    <!-- layer.alert(JSON.stringify(data.field), { -->
      <!-- title: '最终的提交信息' -->
    <!-- }) -->
    <!-- return false; -->
  });
 
  //表单初始赋值
  form.val('example', {
    "username": "" // "name": "value"
    ,"password": ""
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