<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>考题创作界面</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="../layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>

<?php
var_dump($_POST);
$con = mysqli_connect("localhost","root","","guessing_league");
if (!$con){ die('Could not connect: '.mysqli_error()); return;	}	//检查连接是否靠谱。



mysqli_query($con,'create table if not exists Team_Competition_Data(id int auto_increment primary key not null, c1 varchar(20), c2 varchar(20), c3 varchar(20), c4T1 varchar(20), c4T1URL varchar(20), c4R varchar(20), c4T2 varchar(20), c4T2URL varchar(20), c51 varchar(20), c52 varchar(20), c52Link varchar(20), c53 varchar(20), c53Link varchar(20), c54 varchar(20), c54Link varchar(20)) default charset=utf8');

mysqli_close($con);


// $_GET['ID_COMP']='德甲09-2221:30霍芬海姆多特蒙德';
// // echo $_GET['ID_COMP'];
// echo '<fieldset class="layui-elem-field layui-field-title" style="margin-top: 5px;"><legend>比赛信息</legend></fieldset>';
// $con = mysqli_connect("localhost","root","","guessing_league");

// if (!$con){ die('Could not connect: '.mysqli_error()); return;	}

// // mysqli_query($con,'create table if not exists Team_Competition_Data(id int auto_increment primary key not null, c1 varchar(20), c2 varchar(20), c3 varchar(20), c4T1 varchar(20), c4T1URL varchar(20), c4R varchar(20), c4T2 varchar(20), c4T2URL varchar(20), c51 varchar(20), c52 varchar(20), c52Link varchar(20), c53 varchar(20), c53Link varchar(20), c54 varchar(20), c54Link varchar(20)) default charset=utf8');
// mysqli_query($con,'set names utf8');	//极好地解决了中文乱码问题。
// $result=mysqli_query($con,"select c1,c2,c3,c4T1,c4R,c4T2 from team_competition_data where id='".$_GET['ID_COMP']."'");
// while($row = mysqli_fetch_assoc($result)){
	// var_dump($row);
// }

// //检查是否有一个创造考卷的表，没有则创建。
// mysqli_query($con,'create table if not exists Exam_Paper_Data(pp_id int auto_increment primary key not null, cmp_id varchar(20), pp_title varchar(20), pp_describe varchar(4000), pp_creator varchar(20), pp_create_time varchar(20), competition_deadline_time varchar(20), revise_pp_time varchar(20), students_max_num int, score_max_num int, pp_status varchar(20) ) default charset=utf8');

// // echo '<br><a class="layui-btn" href="./Create_Exam_Paper_Page.php?ID_COMP='.urlencode($_GET['ID_COMP']).'">创建相关考卷</a>';

// mysqli_close($con);

// echo '<fieldset class="layui-elem-field layui-field-title" style="margin-top: 5px;"><legend>创建详单</legend></fieldset>';
// session_start();
// if(isset($_SESSION['user_id'])){
	// var_dump($_SESSION);
	// echo '<table class="layui-table"><tr><td><b>'.$_SESSION['user_nickname'].'</b><sup>考官</sup>在 '.date("Y-m-d H:i",time()).' 创建此考题。</td></tr></table>';
// }else{
	// echo '先登陆再创建';
// }
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