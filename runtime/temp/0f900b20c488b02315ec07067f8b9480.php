<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\BBC\public/../application/index\view\login\index.html";i:1497841950;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLEO | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="__STATIC__/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="__STATIC__/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="__STATIC__/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="__STATIC__/css/login.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b>LEO</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action='login_submit' method="post" class="content">
      <div class="form-group has-feedback">
        <input style="display:none" type="text" name="user_name"/>
        <input required="required"
               pattern="^\S{4,}$"
               title="请输入4位及以上的字符"
               type="text"
               name="user_name"
               autocomplete="off"
               autofocus="autofocus"
               class="form-control username"
               placeholder="Name"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input style="display:none" type="password" name="user_passwd"/>
        <input required="required"
               pattern="^\S{6,}$"
               title="请输入6位及以上的字符"
               type="password"
               name="user_passwd"
               autocomplete="off"
               class="form-control password"
               placeholder="Password"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group code">
        <input required="required"
               pattern="^\S{4}$"
               title="请输入4位字符"
               type="vertify"
               name="user_vertify"
               autocomplete="off"
               class="form-control vertify"
               placeholder="Vertify Code"/>
        <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?x='+Math.random();" />
      </div>

      <div class="row" style="clear: both;">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="__STATIC__/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="__STATIC__/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="__STATIC__/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
