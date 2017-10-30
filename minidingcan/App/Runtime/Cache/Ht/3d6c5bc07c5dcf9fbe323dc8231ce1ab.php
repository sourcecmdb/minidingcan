<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minidingcanapi/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minidingcanapi/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minidingcanapi/Public/ht/js/action.js"></script>
<script type="text/javascript" src="/minidingcanapi/Public/plugins/xheditor/xheditor-1.2.1.min.js"></script>
<script type="text/javascript" src="/minidingcanapi/Public/plugins/xheditor/xheditor_lang/zh-cn.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 活动管理 】</div>

<div class="aaa_pts_show_2">
    
    <div>
       <div class="aaa_pts_4"><a href="<?php echo U('index');?>">全部活动</a></div>
       <div class="aaa_pts_4"><?php if($_GET['news_id']) { ?><a href="#">修改活动</a><?php }else{ ?><a href="<?php echo U('add');?>">添加活动</a><?php } ?></div>
    </div>
    <div class="aaa_pts_3">
      <form action="<?php echo u('save');?>" method="post" enctype="multipart/form-data" onsubmit="return ac_from();">
      <ul class="aaa_pts_5">
         <li>
            <div class="d1">活动标题:</div>
            <div>
              <input class="inp_1" name="name" id="name" style="width:400px;" value="<?php echo $news['name']; ?>"/>
            </div>
         </li>
         <!-- <li>
            <div class="d1">所属类别:</div>
            <div>
              <select class="inp_1" name="cid" id="cid">
			         <option value="">选择类别</option>
                <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if($cate["id"] == $news['cid']): ?><option value="<?php echo ($cate["id"]); ?>" selected="selected" >- <?php echo ($cate["name"]); ?></option>
                  <?php else: ?>
                  <option value="<?php echo ($cate["id"]); ?>" >- <?php echo ($cate["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </div>
         </li> -->
         <li>
            <div class="d1">活动摘要:</div>
            <div>
              <textarea class="inp_1 inp_2" name="digest" id="digest" style="height:80px; width:400px;"/><?php echo $news['digest']; ?></textarea>
            </div>
         </li>
         <li>
            <div style="color:#c00; font-size:14px; padding-left:20px;">上传图片大小：370px*160px,格式为jpg、jpeg、png</div>
         </li>
         <li data-index="'.$key.'">
            <div class="d1">列表图:</div>
            <div>
              <?php if($news['photo'] != ''): ?><img src="/minidingcanapi/Data/<?php echo $news['photo']; ?>" /><?php endif; ?>
              <input type="hidden" name="photo" id="photo" value="<?php echo $news['photo']; ?>"/>
			        <input type="file" name="file" id="photo" />
            </div>
         </li>
		 <!--add by yangwei as 20160224-->
         <li>
            <div class="d1">活动内容:</div>
            <div>
              <textarea class="inp_1 inp_2" name="content" id="content"/><?php echo $news['content']; ?></textarea>
            </div>
         </li>
         <li>
            <div class="d1">发布来源:</div>
            <div>
              <input class="inp_1" name="source" id="source" value="<?php echo $news['source']; ?>"/> &nbsp;&nbsp;默认：本网
            </div>
         </li>
         <li>
            <div class="d1">排序:</div>
            <div>
              <input class="inp_1" name="sort" id="sort" value="<?php echo (int)$news['sort']?>"/> &nbsp;&nbsp;排序数量越大，排名越靠前
            </div>
         </li>
         
         <li>
            <div class="d1">浏览次数:</div>
            <div>
              <input class="inp_1" name="renqi" id="renqi" value="<?php echo (int)$news['renqi']?>"/> 
            </div>
         </li>
         <input type="hidden" name="news_id" value="<?php echo (int)$news['id']; ?>"/>
         <li><input type="submit" name="submit" value="提交" class="aaa_pts_web_3" border="0"></li>
      </ul>
      </form>
         
    </div>
    
</div>
<script>
function ac_from(){

  var name=document.getElementById('name').value;
  
  if(name.length<2){
	  alert('名称不能少于2');
	  return false;
	  } 
  
  // var pid=parseInt(document.getElementById('pid').value);
  // if(isNaN(pid) || pid<1){
	 //  alert('请选择分类');
	 //  return false;
	 //  } 
	  
}

//初始化编辑器
$('#content').xheditor({
	skin:'nostyle' ,
	upImgUrl:'<?php echo U("Upload/xheditor");?>'
});
</script>
</body>
</html>