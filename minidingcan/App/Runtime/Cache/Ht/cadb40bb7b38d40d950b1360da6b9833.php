<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minidingcanapi/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minidingcanapi/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minidingcanapi/Public/ht/js/action.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 程序配置信息 】</div>

<div class="aaa_pts_show_2">
    

    <div class="aaa_pts_3">
      <form action="<?php echo U('More/setup');?>" method="post" onsubmit="return ac_from();"  enctype="multipart/form-data">
      <ul class="aaa_pts_5">
        <li class="product"><div class="d1 dx2" style="color:green;font-weight:blod;font-size:20px;">配置信息</div></li>
         <li>
            <div class="d1">小程序名称:</div>
            <div>
              <input class="inp_1" name="title" id="title" value="<?php echo ($info["title"]); ?>"/>
            </div>
         </li>
         <!-- <li>
            <div class="d1">小程序简介:</div>
            <div>
              <input class="inp_1" name="describe" id="describe" value="<?php echo ($info["describe"]); ?>"/>
            </div>
         </li> -->
         <!-- <li>
            <div class="d1">客服微信号:</div>
            <div>
              <input class="inp_1" name="service_wx" id="service_wx" value="<?php echo ($info["service_wx"]); ?>"/>
            </div>
         </li> -->
         <li>
            <div class="d1">联系电话:</div>
            <div>
              <input class="inp_1" name="tel" id="tel" value="<?php echo ($info["tel"]); ?>"/>
            </div>
         </li>
         <li>
            <div class="d1">版权信息:</div>
            <div>
              <input class="inp_1" name="copyright" id="copyright" value="<?php echo ($info["copyright"]); ?>"/>
            </div>
         </li>
         <li class="product"><div class="d1 dx2" style="color:green;font-weight:blod;font-size:20px;">平台信息</div></li>
         <li>
            <div class="d1">配送费:</div>
            <div>
              <input class="inp_1" name="yunfei" id="yunfei" value="<?php echo ($info["yunfei"]); ?>"/>
            </div>
         </li>
         <li>
            <div class="d1">配送时间:</div>
            <div>
              <input class="inp_1" name="ptime" id="ptime" value="<?php echo ($info["ptime"]); ?>"/>
            </div><span style="font-size:14px;color:red;">&nbsp;*&nbsp;分钟</span>
         </li>
         <li>
            <div class="d1">首页栏目名:</div>
            <div>
              <input class="inp_1" name="classname" id="classname" value="<?php echo ($info["classname"]); ?>"/>
            </div>
         </li>

         <li><input type="submit" name="submit" value="提交" class="aaa_pts_web_3" border="0"></li>
      </ul>
      </form>
         
    </div>
    
</div>
<script>
function ac_from(){
  var title=document.getElementById('title').value;
  if(!title){
	  alert('请输入小程序名称！');
	  return false;
	}
}
</script>
</body>
</html>