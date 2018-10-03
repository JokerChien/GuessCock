<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="../layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>

<form class="layui-form" action="./Team_Inquiries.php" method="POST">
  <!-- <div class="layui-form-item layui-form-text"> -->
    <!-- <label class="layui-form-label">文本域</label> -->
    <!-- <div class="layui-input-block"> -->
      <!-- <textarea placeholder="请输入内容" class="layui-textarea" name="desc"></textarea> -->
    <!-- </div> -->
  <!-- </div> -->
 
  <div class="layui-form layui-form-pane">
	  <div class="layui-inline">
		  <label class="layui-form-label">球队</label>
		  <div class="layui-input-inline">
			<input type="text" name="team_Name" lay-verify="title" autocomplete="off" class="layui-input" placeholder="请输入标题">
		  </div>
	</div>
  
	  <div class="layui-inline layui-layout-right">
		<div class="layui-input-inline">
		  <button class="layui-btn" lay-submit="" lay-filter="demo1">提交</button>
		</div>
	  </div>
  </div>
</form>

<?php
	if(!isset($_POST['team_Name'])){
		return;
	}
	
	// echo isset($_POST['team_Name'])?$_POST['team_Name']:'';
	// $data=json_decode(file_get_contents("./data/team_Data.json"),true);
	// var_dump($data['result']['list']);
	
	$data=Team_Game_Query($_POST['team_Name']);
	if($data['result']==null){
		echo $data['reason'].' ['.$data['error_code'].']';
		return;
	}
	
	echo '<table class="layui-table" lay-size="sm">';
	foreach($data['result']['list'] as $i=>$j){
		// foreach($j as $k=>$l){
			// if(in_array($k,array("c1","c2","c3","c4T1","c4R","c4T2"))){
				// $m[]=$l;
			// }
		// }
		// echo "<tr><td>".implode("</td><td>",$m).'</td><td><a href="./topPage.php">查</a></td></tr>';
		// unset($m);
		$id_comp=$j["c1"].$j["c2"].$j["c3"].$j["c4T1"].$j["c4T2"];
		echo "<tr><td>".$j["c1"]." ".$j["c2"]." ".$j["c3"]."</td><td>".$j["c4T1"]."</td>";
		$style=$j["c4R"]=='VS'?'layui-btn-normal':'';	//已经结束的比赛和还未返回结果的比赛要有所区分。
		echo '<td><a class="layui-btn layui-btn-xs '.$style.'" href="./Replace_Competition_Page.php?ID_COMP='.urlencode($id_comp).'">'.$j["c4R"]."</a></td><td>".$j["c4T2"]."</td></tr>";
		
		// $query_string[]="insert into Team_Competition_Data values(null,'".implode("','",$j)."')";
		$query_string[]="replace into Team_Competition_Data values('".$id_comp."','".implode("','",$j)."')";
	}
	echo '</table>';
	
	// echo $query_string;
	// return;
	
	$con = mysqli_connect("localhost","root","","guessing_league");
	if (!$con){
		die('Could not connect: '.mysqli_error());
		return;
	}
	
	// $result=mysqli_query($con,'select * from user_list');
	// while($row = mysqli_fetch_array($result)){
		// foreach($row as $i){
			// echo $i;
		// }
	// }
	// var_dump($result);
	
	//如果数据表不存在，则创建这个表。阿凡达数据和聚合数据的数据结构都是一样的。
	mysqli_query($con,'create table if not exists Team_Competition_Data(id int auto_increment primary key not null, c1 varchar(20), c2 varchar(20), c3 varchar(20), c4T1 varchar(20), c4T1URL varchar(20), c4R varchar(20), c4T2 varchar(20), c4T2URL varchar(20), c51 varchar(20), c52 varchar(20), c52Link varchar(20), c53 varchar(20), c53Link varchar(20), c54 varchar(20), c54Link varchar(20)) default charset=utf8');
	mysqli_query($con,'set names utf8');	//极好地解决了中文乱码问题。
	foreach($query_string as $i){
		mysqli_query($con,$i);
	}
	
	mysqli_close($con);
	return;
	
	
function Team_Game_Query($team_Name){	//这是聚合函数的WEBAPI
	$appKey="c44c8cab0848d9e5fcc35809e45be3ec";
	$teamInquiry=urlencode($team_Name);
	
	$url ="http://op.juhe.cn/onebox/football/team?key=".$appKey."&team=".$teamInquiry; 
    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    // var_dump($output);
	
	return json_decode($output, true);	//返回一个JSON转化的数组。
	
	// var_dump($data);
	// foreach($data as $key=>$value){
		// if(count($value)<=1){
			// echo $value;
		// }else{
			// echo count($value);
			// var_dump($value);
		// }
	// }
	
	// $file=fopen("./data/team_Data.json","w");
	//file_put_contents("./data/team_Data.json",$output);
}
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