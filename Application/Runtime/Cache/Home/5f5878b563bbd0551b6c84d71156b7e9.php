<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>、

<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/Public/css/login.css">
<script src="/Public/jquery-3.1.1/jquery-3.1.1.js" type="text/javascript"></script>
<script src="/Public/js/jquery.validate.js" type="text/javascript"></script>
<script src="/Public/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="/Public/js/login.js" type="text/javascript"></script>
</head>
<body>
		<div class="container">
			<div class="row" style="margin-top:200px;">
				<div class="col-md-6 col-md-offset-3">

					<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">


			<form method="post" action="<?php echo U('/Admin/Login/login');;?>" name="login">
		  <div class="form-group">
		    <label for="exampleInputEmail1">账户:</label>
		    <input type="text" class="form-control" id="user" name="user" placeholder="请输入账户！">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码:</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码！">
		  </div>

		<div class="checkbox">
		    <label>
		      <input id="checkbox" name="checkbox" type="checkbox"> 记住密码
		    </label>
		  </div>

		  <a style="margin-left: 150px;" href="<?php echo U('/Home/Index/reg'); ?>" class="btn btn-default">注册</a>
		  <button style="margin-left: 40px;" type="submit" class="btn btn-default">登陆</button>

		</form>

					</h3>

					</div>
					<div class="panel-body text-center">
					版权所有,请勿模仿！
					</div>
					</div>

				</div>
			</div>	
		</div>
</body>
</html>