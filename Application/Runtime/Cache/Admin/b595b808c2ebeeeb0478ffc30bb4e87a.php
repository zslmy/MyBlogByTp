<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>首页展示</title>
<
	<style type="text/css">
#left-top span{
	margin-right: 5px;
}

dl dd{
	float: left;
	margin-left: 10px;
}
	</style>

	  <link rel="stylesheet" href="/Public/qqface/lib/css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" href="/Public/qqface/dist/css/jquery.emoji.css"/>
    <link rel="stylesheet" href="/Public/qqface/lib/css/railscasts.css"/>
    <link rel="stylesheet" href="/Public/qqface/dist/css/index.css"/>
     <link rel="stylesheet" type="text/css" href="/Public/css/uploadify.css">
	<link rel="stylesheet" type="text/css" href="/Public/Uploadify/uploadify.css">
	<!-- 表情 -->
	<link rel="stylesheet" type="text/css" href="/Public/css/time.css">
	<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">

	<script src="/Public/jquery-3.1.1/jquery-3.1.1.js" type="text/javascript"></script>	
	
	
		<script src="/Public/bootstrap/js/bootstrap.js" type="text/javascript"></script>

<!-- 文本输入框 -->
<link rel="stylesheet" type="text/css" href="/Public/simditor-1.0.5/styles/font-awesome.css" /> 
<link rel="stylesheet" type="text/css" href="/Public/simditor-1.0.5/styles/simditor.css" />
<!-- 文本输入框 -->
</head>
<body style="background-image: url('/Public/image/backimage.jpg');">

<?php include (THEME_PATH.'nav.html'); ?>

<!-- 首页body -->
<div class="container" style="background-color: white;">
	<!-- 左边的 -->
	<div class="col-md-3">
 <?php include(THEME_PATH.'left.html'); ?>

	</div>
	<!-- 中间的部分 -->
	<?php include(THEME_PATH.'index_center.html'); ?>

	<!-- 右边的部分 -->
	<?php include(THEME_PATH.'index_right.html'); ?>
	
	
	<!-- 右边结束 -->
</div>

		<div class="container" style="margin-top:5px; text-align:center;">
		
			   <ul class="pagination">
			    <li>
			     <?php echo $pageweibo; ?>
			    </li>
			  </ul>
	
		 </div>

 <?php include(THEME_PATH.'bottom.html'); ?>

</body>
</html>