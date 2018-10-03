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

	<table class="layui-table" lay-skin="line">
	  <colgroup>
		<col width="10%">
		<col width="20%">
		<col width="17%">
		<col width="17%">
		<col width="17%">
		<col>
	</colgroup>
		<thead><tr><th>#</th><th>姓名</th><th>积分</th><th>出题</th><th>答题</th><th>利率</th></tr></thead>
		<tr><td>1</td><td>纲哥</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>2</td><td>李梁</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>3</td><td>钱老师</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>4</td><td>宋胖子</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>5</td><td>大茅</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>6</td><td>王昊</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>7</td><td>陈健</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>8</td><td>许万三</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>9</td><td>小蔡</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>10</td><td>波波</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>11</td><td>杜涵琪</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>12</td><td>空哥</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>13</td><td>鹏哥</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>14</td><td>邹宇</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>15</td><td>戴磊</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>16</td><td>瞿展堂</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>17</td><td>马司令</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>18</td><td>朱力</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
		<tr><td>19</td><td>武老峰</td><td>0</td><td>0</td><td>0</td><td>0%</td></tr>
	</table>
  </div>
  
          
<script src="./layui/layui.js" charset="utf-8"></script>
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