<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册页面</title>
<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/Public/css/register.css">
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/Public/jquery-3.1.1/jquery-3.1.1.js" type="text/javascript"></script>
<script type="text/javascript">
var checkUser="<?php echo U('/Home/Index/checkUser') ; ?>";
var  checkImg="<?php echo U('/Home/Index/index_imgck') ; ?>";
</script>
<script src="/Public/js/jquery.validate.js" type="text/javascript"></script>
<script src="/Public/js/register.js" type="text/javascript"></script>
<script src="/Public/bootstrap/js/bootstrap.js" type="text/javascript"></script>

</head>
<body style="background-image: url('/Public/image/welcome.jpg');">

		<div class="container">
			<div class="row" style="margin-top:150px;">
				<div class="col-md-6 col-md-offset-3">

					<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">

  
		<form method="post" action="<?php echo U('/Admin/Register/register');?>" class="form-horizontal" name="register">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Account</label>
    <div class="col-sm-10">
      <input type="text" name="user" class="form-control" id="username" placeholder="账号">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">name</label>
    <div class="col-sm-10">
      <input type="text" name="names" class="form-control"  placeholder="your name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
		 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password_again" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 

   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 control-label">checked</label>
    <span class="col-sm-5">
    <input id="image" name="image" type="text" class="form-control" id="inputPassword3" placeholder="请输入验证码！"> 
    </span>
    <span class="col-sm-5">
    
    <img id="img" name="img" src="<?php echo U('/Home/Index/Imag');?>">
  
   </span>
  </div>
	

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">注册</button>
    </div>
  </div>
</form>
					</h3>

				</div>
			</div>	
		</div>


  
</body>
</html>