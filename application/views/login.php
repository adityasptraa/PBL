<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_login/assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_login/assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_login/assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_login/assets/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_login/assets/dist/css/responsivelogin.css');?>">

  <!-- Google Font -->
  
  </head>
<body class="hold-transition login-page" style="overflow-y: hidden;background:url(
	'<?php echo base_url('assets/assets_login/image/login.jpg');?>')no-repeat;background-size:100%;">
<div class="login-box">
	<br/>
  <div class="login-logo">
    <a href="index.php" style="color: #226bbf ;"><b>SISTEM INFORMASI<br/><b>PERPUSTAKAAN</b></a>
  </div>
  <div id="tampilalert"></div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border:2px solid #226bbf;">
    <p class="login-box-msg" style="font-size:16px;"></p>
    <form action="<?= base_url('login/cek_login');?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="user" name="user" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        <!-- /.col
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember" value="R1"> Remember Me
            </label>
          </div>-->
          <!-- /.social-auth-links -->
        </div>
        <div class="col-xs-4">
          <button type="submit" id="loding" class="btn btn-primary btn-block btn-flat">Sign In</button>
          <div id="loadingcuy"></div>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
  <br/>
</div>
<!-- /.login-box -->
<!-- Response Ajax -->
<div id="tampilkan"></div>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/assets_login/assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/assets_login/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/assets_login/assets/plugins/iCheck/icheck.min.js');?>"></script>
</body>
</html>
