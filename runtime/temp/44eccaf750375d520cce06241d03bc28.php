<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\xampp\htdocs\MessageBoard\public/../application/index\view\index\read.html";i:1497853294;s:79:"D:\xampp\htdocs\MessageBoard\public/../application/index\view\index\header.html";i:1497853492;s:76:"D:\xampp\htdocs\MessageBoard\public/../application/index\view\index\top.html";i:1497852782;s:79:"D:\xampp\htdocs\MessageBoard\public/../application/index\view\index\editor.html";i:1497832972;}*/ ?>
<!doctype html>
<html>
<!-- <head>
<meta charset="UTF-8">
<title>发布留言－Thinkphp 5.0 留言板</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="__STATIC__/um/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/css/comment.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/um/third-party/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/um/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/um.min.js"></script>
<script type="text/javascript" src="__STATIC__/um/lang/zh-cn/zh-cn.js"></script>
</head> -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>发布留言－Thinkphp 5.0 留言板</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="__STATIC__/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="__STATIC__/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="__STATIC__/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="__STATIC__/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="__STATIC__/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="__STATIC__/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="__STATIC__/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link href="__STATIC__/um/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/css/comment.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/um/third-party/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/um/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/um.min.js"></script>
<script type="text/javascript" src="__STATIC__/um/lang/zh-cn/zh-cn.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<div class="container" style="margin-top:20px;">
<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Leooman 留言本</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="__ROOT__">首页 <span class="sr-only">(current)</span></a></li>
        <li><a href="__ROOT__/add">发布留言</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if($name): ?>
        <li><a href="#">欢迎您！<?php echo $name; ?></a></li>
        <li><a href="__ROOT__/out">退出</a></li>
        <?php else: ?>
        <li><a href="__ROOT__/regist">注册</a></li>
        <li><a href="__ROOT__/login">登录</a></li>
        <?php endif; ?>
        <li><a href="#">QQ:351234955</a></li>
        
      </ul>
    </div>/.navbar-collapse
  </div>/.container-fluid
</nav> -->
<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>EO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LEO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="__STATIC__/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="__STATIC__/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="__STATIC__/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="__STATIC__/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="__STATIC__/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <?php if($name): ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="__STATIC__/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="__STATIC__/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="__ROOT__/out" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php else: ?>
          <!-- <li><a href="__ROOT__/regist">Regist</a></li> -->
          <li><a href="__ROOT__/login">Login</a></li>
          <?php endif; ?>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	<div class="panel panel-default">
  <div class="panel-heading"><?php echo $article->title; ?> <?php echo $article->create_time; ?></div>
  <div class="panel-body">
  	<?php echo $article->content; ?>
    <hr/>
    <?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
    <div class="well">
    <?php echo $c['content']; ?>
   <h6> <?php echo $c['username']; ?> 发表于 : <?php echo $c['create_time']; ?></h6>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<div class="panel panel-danger">
  <div class="panel-heading">发布评论</div>
  <div class="panel-body">
  	<form method="post" action="__ROOT__/addcomment/<?php echo $article['id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">姓名：</label>
    <input type="text" class="form-control" name='username' placeholder="请输入姓名">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">内容：</label>
    <input type="text" name="content" hidden class='contents'>
<script type="text/plain" id="myEditor" style="width: 100%"></script>
<script>
$opt={toolbar:[
			'source |',
            'undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor |',
            'horizontal | insertorderedlist insertunorderedlist | link unlink | selectall cleardoc' ,
            '| justifyleft justifycenter justifyright justifyjustify | paragraph fontfamily fontsize',
            '| emotion image video',
            ' | fullscreen'
    ]};
    var um = UM.getEditor('myEditor',$opt);
 function getContent(){
  return um.getContent();
 }
 $(function(){
  $('button[type="submit"]').on('click',function(){
    $('.contents').val(getContent())
  })
 })
</script>
  </div>
 
  
  <button type="submit" class="btn btn-primary">发布评论</button>
</form>
  </div>

</div>
</body>
</html>
