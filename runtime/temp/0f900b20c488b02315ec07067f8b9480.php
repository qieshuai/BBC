<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\BBC\public/../application/index\view\login\index.html";i:1503566676;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
      <meta charset="utf-8">
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- CSS -->
      <link rel="stylesheet" href="__STATIC__/css/reset.css">
      <link rel="stylesheet" href="__STATIC__/css/supersized.css">
      <link rel="stylesheet" href="__STATIC__/css/style.css">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <body oncontextmenu="return false">
      <div class="page-container">
        <h1>Login</h1>
        <form action='login_submit' method="post">
          <div>
            <input type="text" name="user_name" class="username" placeholder="Username" autocomplete="off"/>
          </div>
          <div>
            <input type="password" name="user_passwd" class="password" placeholder="Password" oncontextmenu="return false" onpaste="return false" />
          </div>
          <button id="submit" type="submit">Sign in</button>
        </form>
        <div class="connect">
          <p>If we can only encounter each other rather than stay with each other,then I wish we had never encountered.</p>
          <p style="margin-top:20px;">如果只是遇见，不能停留，不如不遇见。</p>
        </div>
      </div>
      <div class="alert" style="display:none">
        <h2>Error Message</h2>
        <div class="alert_con">
          <p id="ts"></p>
          <p style="line-height:70px"><a class="btn">Confirm</a></p>
        </div>
      </div>
    <script src="__STATIC__/plugins/jQuery/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script src="__STATIC__/js/supersized.3.2.7.min.js"></script>
        <script src="__STATIC__/js/supersized-init.js"></script>
    <script>
    $(".btn").click(function(){
      is_hide();
    })
    var u = $("input[name=user_name]");
    var p = $("input[name=user_passwd]");
    $("#submit").live('click',function(){
      if(u.val() == '' || p.val() =='')
      {
        $("#ts").html("用户名或密码不能为空~");
        is_show();
        return false;
      }
      else{
        var reg = /^[0-9A-Za-z]+$/;
        if(!reg.exec(u.val()))
        {
          $("#ts").html("用户名错误");
          is_show();
          return false;
        }
      }
    });
    window.onload = function()
    {
      $(".connect p").eq(0).animate({"left":"0%"}, 600);
      $(".connect p").eq(1).animate({"left":"0%"}, 400);
    }
    function is_hide(){ $(".alert").animate({"top":"-40%"}, 300) }
    function is_show(){ $(".alert").show().animate({"top":"45%"}, 300) }
    </script>
    </body>

</html>

