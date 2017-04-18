<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>微博搜索</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="
	/Public/bootstrap/css/bootstrap.css">
	<script src="/Public/jquery-3.1.1/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="/Public/bootstrap/js/bootstrap.js" type="text/javascript"></script>
	
	<style type="text/css">
#info div{
	margin-top: 10px;
	font-size: 15px;
}
	</style>
}
</head>
<script type="text/javascript">
var AddgroupList="<?php echo U('/Admin/Common/AddgroupList');?>";
</script>
<body >
<!-- 导航条 -->
<?php include (THEME_PATH.'nav.html'); ?>
<div class="container">

	<!-- 左边 -->
	<div class="col-md-3">
		<?php include(THEME_PATH.'left.html'); ?>
	</div>

		<!-- 中间 -->
	<div class="col-md-9">

	 <div class="col-md-6 col-md-offset-3">
	
	<!-- 搜索字体 -->
		 <div  style="margin:10px 50px;font-size: 50px; width: auto;" class="glyphicon glyphicon-search " aria-hidden="true">微博<font style="margin:0px;" color="green">搜索</font>
		 <div class="text-center">
		<font style="margin:0px;"  size="3px;"> www.zscool.top</font></div>
		 </div>
	<!-- 搜索字体结束 -->

	 <!-- 搜索 -->
	 <div>
	  <form method="get" action="/index.php/Admin/Search/searchUser.html" class="navbar-form navbar-left">
        <span class="form-group">
          <input name="keyword" type="text" class="form-control" value="<?php echo $keyword; ?>">
        </span>
        <span>
        <button type="submit" class="btn btn-info">搜索</button>
        </span>
      </form>
</div>
		    <!-- /input-group -->
		    <!-- 找人,微博 -->
	   <div class="input-group">
		      	
		     <!--  <span>找人</span>
		        <span>微博</span> -->
		        <ul class="nav navbar-nav">
		        <li><a href="#">找人 </a></li>
		        <li><a href="#">微博</a></li>
		      </ul>
		   
		      </div>
		<!-- 找人,微博结束 -->
  	<!-- 搜索结果 -->

  		</div>
  
  	</div>
  	<h3 style="color:#C71585;margin:0 0;"><strong>用户：</strong></h3>
<hr style="margin:0 0;" color="red"/>
  	<div class="col-md-9">
		<?php
 $datas=M('user'); $rs=$datas->where(array('id'=>session('uid')))->find(); foreach ($data as $i => $value) { ?>
	<div class="panel panel-default">
		  <div class="panel-body row">
		 
			 <div class="col-md-2">
    <a href="#">
    <?php if(!$value['face50']){ ?>
      <img style="width:100px;height:100px;" src="/Public/image/face.jpg" alt="..." class="img-rounded">
      <?php }else{ ?>
       <img style="width:100px;height:100px;" src="/uploads/<?php echo $value['face50'];?>" alt="..." class="img-rounded">
      <?php };?>
    </a>
  			</div>
  			<div id="info" class="col-md-6">
				<div class="row"><font color="red">账户:</font><a href="#"><?php echo $value['username'];?></a></div>
				<div class="row">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		:&nbsp;<?php echo $value['location'];?>
				</div>
				<div class="row">
				<span>关注:<a href="#"><?php echo $value['follow'];?></a></span>|
				<span>粉丝:<a href="#"><?php echo $value['fans'];?></a></span>|
				<span>微博:<a href="#"><?php echo $value['weibo'];?></a></span>
				</div>
  			</div>
  			<div class="col-md-4">
				  <div class="input-group" style="margin:auto auto;">
				<!-- 相互关注移除 -->
			        <ul class="nav navbar-nav" id="aa">
				<?php if($value['attention']==1){ ?>
			        <li><a id="<?php echo ($value['uid']); ?>" class="btn btn-sm" role="button" >&hArr;互相关注</a></li>
			   <li><a id="<?php echo ($value['uid']); ?>" class="removefriend btn btn-sm" role="button" >移除</a></li>
			        <?php }else{ if($value['followed']==0){ ?>				
				<!-- ======关注开始===== -->
				
		<span class="main_nav">
			<a uid="<?php echo ($value['uid']); ?>" role="button" class="guanzhu">	&hearts;关注</a>
		</span>
	


				<!-- =======关注结束====== -->
			 <?php }else{ ?>

			<div class="demo">
		
			 <li><a id="<?php echo ($value['uid']); ?>" class="yiguanzhu btn btn-sm" role="button" >&radic;已关注</a></li>
			<li><a id="<?php echo ($value['uid']); ?>" class="removefriend btn btn-sm" role="button" >移除</a></li>

			</div>

			        <?php }} ?>
			     <!--    <li><a class="btn btn-warning btn-sm" href="#">移除</a></li> -->
			      </ul>
			      </div>
  			</div>

		  </div>
		</div>

		 <?php }; ?>
		 <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
     <?php echo $page; ?>
    </li>
  </ul>
</nav>
	

 
	</div>	
 <!-- 中间部分结束 -->

	
 <div >
			
		
	<!-- ======弹出框==== -->
	<div class="cd-user-modal" > 
		<div class="cd-user-modal-container">
			
				<form class="cd-form" name="fenzu" id="fenzu">

			
				分组:
				<select id="gid" name="gid" style="width:100%;">
					<option value="0">==默认分组==</option>
					<?php foreach($groups as $group){ ?>
					<option value="<?php echo ($group['id']); ?>"><?php echo ($group['name']); ?>
					<?php } ?></option>
				</select>	
					<p class="fieldset">
			<input type="hidden" name="followid" value="">
					<!-- <a class="btn" id="group_follow">关 注</a>
					<a class="btn">取 消</a> -->

				<input  class="follow_group full-width2 btn-info" type="button" value="关 注"></input>

					</p>
				</form>
			
		</div> 
	
</div>
	<!-- ====弹出框结束==== -->
</body>
</html>