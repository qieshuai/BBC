<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:69:"D:\xampp\htdocs\BBC\public/../application/index\view\article\add.html";i:1503566675;s:71:"D:\xampp\htdocs\BBC\public/../application/index\view\common\header.html";i:1503566675;s:68:"D:\xampp\htdocs\BBC\public/../application/index\view\common\top.html";i:1503566676;s:69:"D:\xampp\htdocs\BBC\public/../application/index\view\common\left.html";i:1503631285;s:72:"D:\xampp\htdocs\BBC\public/../application/index\view\article\editor.html";i:1503566675;s:74:"D:\xampp\htdocs\BBC\public/../application/index\view\article\markdown.html";i:1503566675;s:71:"D:\xampp\htdocs\BBC\public/../application/index\view\common\footer.html";i:1503566675;s:72:"D:\xampp\htdocs\BBC\public/../application/index\view\common\sidebar.html";i:1503566676;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | LEO</title>
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
  <!-- <link rel="stylesheet" href="__STATIC__/plugins/morris/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="__STATIC__/plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="__STATIC__/plugins/datepicker/datepicker3.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="__STATIC__/plugins/daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="__STATIC__/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script type="text/javascript" src="__STATIC__/um/third-party/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
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
                  <?php echo $name; ?> - Web Developer
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
                    <a href="<?php echo url('profile'); ?>">Profile</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="<?php echo url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-left">
                  <a href="<?php echo url('lockscreen'); ?>" class="btn btn-default btn-flat">LockScreen</a>
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
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin fa-fw" style="font-size: 18px;"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="__STATIC__/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <?php if($name): ?>
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        <?php endif; ?>  
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="__ROOT__">
            <i class="fa fa-cubes text-info"></i> <span>Map</span>
          </a>
        </li>
        <li class="treeview">
          <a href=''>
            <i class="fa fa-edit text-aqua"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='__ROOT__/add'><i class="fa fa-circle-o text-aqua"></i> News</a></li>
            <li><a href=''><i class="fa fa-circle-o text-danger"></i> Angular</a></li>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href=''>
            <i class="fa fa-video-camera text-warning"></i> <span>Vedio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=''><i class="fa fa-list"></i> Video List</a></li>
            <li><a href=''><i class="fa fa-edit"></i> Add New Video</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href=''>
            <i class="fa fa-music text-green"></i> <span>Music</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=''><i class="fa fa-list"></i> Music List</a></li>
            <li><a href=''><i class="fa fa-edit"></i> Add New Music</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href=''>
            <i class="fa fa-github-alt text-danger"></i> <span>Code</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='__ROOT__/index/material/command'><i class="fa fa-circle-o text-info"></i> Command</a></li>
            <li><a href='__ROOT__/index/material/album3D'><i class="fa fa-circle-o text-warning"></i> 3D Album</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href=''>
            <i class="fa fa-book text-blue"></i> <span>Bookmark</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://github.com/Leooman"><i class="fa fa-github"></i> <span>Github</span></a></li>
            <li><a href="http://blog.csdn.net/qq_33797888/article/"><i class="fa fa-share-alt"></i> <span>CSDN</span></a></li>
            <li><a href="#"><i class="fa fa-facebook-official"></i> <span>Facebook</span></a></li>
            <li><a href="#"><i class="ion ion-social-twitter"></i> <span>Twitter</span></a></li>
            <li><a href="#"><i class="ion ion-social-googleplus"></i> <span>Google+</span></a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Article
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Article</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="panel panel-info">
  <div class="panel-heading">发布文章</div>
  <div class="panel-body">
    <form method="post" action="__ROOT__/addarticle">
  <div class="form-group">
    <label for="title">标题：</label>
    <input type="text" class="form-control" name='title' placeholder="请输入文章标题">
  </div>
  <div class="form-group">
    <ul id="myTab" class="nav nav-pills" role="tablist">
     <li class="active"><a href="#UMEditor" role="tab" data-toggle="tab">UMEditor</a></li>
     <li><a href="#Markdown" role="tab" data-toggle="tab">Markdown</a></li>
    </ul>
    <!-- 选项卡面板 -->
    <div id="myTabContent" class="tab-content">
     <div class="tab-pane fade in active" id="UMEditor">
      <!-- umeditor start -->
<link href="__STATIC__/um/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/css/comment.css" type="text/css" rel="stylesheet">
<link href="__STATIC__/css/material.css" media="screen" type="text/css" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/um/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/um/um.min.js"></script>
<script type="text/javascript" src="__STATIC__/um/lang/zh-cn/zh-cn.js"></script>
<input type="text" name="content" hidden class='contents'>
<script type="text/plain" id="myEditor" style="width: 100%"></script>
<script>
$opt={toolbar:[
			'source |',
            'undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor |',
            'horizontal | insertorderedlist insertunorderedlist | link unlink | selectall cleardoc' ,
            '| emotion image video',
            '| justifyleft justifycenter justifyright justifyjustify | paragraph fontfamily fontsize',
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
     <div class="tab-pane fade" id="Markdown">
      <link rel="stylesheet" href="__STATIC__/css/markdown.css" />
<link rel="stylesheet" href="__STATIC__/plugins/markdown/css/editormd.css" />   
<div id="layout">
    <!-- <header>
        <h1>完整示例</h1>
        <p>Full example</p>
        <ul style="margin: 10px 0 0 18px;">
            <li>Enable HTML tags decode</li>
            <li>Enable TeX, Flowchart, Sequence Diagram, Emoji, FontAwesome, Task lists</li>
            <li>Enable Image upload</li>
            <li>Enable [TOCM], Search Replace, Code fold</li>
        </ul>            
    </header>
    <div class="btns">
        <button id="goto-line-btn">Goto line 90</button>
        <button id="show-btn">Show editor</button>
        <button id="hide-btn">Hide editor</button>
        <button id="get-md-btn">Get Markdown</button>
        <button id="get-html-btn">Get HTML</button>
        <button id="watch-btn">Watch</button>
        <button id="unwatch-btn">Unwatch</button>
        <button id="preview-btn">Preview HTML (Press Shift + ESC cancel)</button>
        <button id="fullscreen-btn">Fullscreen (Press ESC cancel)</button>
        <button id="show-toolbar-btn">Show toolbar</button>
        <button id="close-toolbar-btn">Hide toolbar</button>
        <button id="toc-menu-btn">ToC Dropdown menu</button>
        <button id="toc-default-btn">ToC default</button>
    </div> -->
    <div id="test-editormd"></div>
</div>
<script src="__STATIC__/plugins/markdown/examples/js/jquery.min.js"></script>
<script src="__STATIC__/plugins/markdown/editormd.js"></script>   
<script type="text/javascript">
    var testEditor;
    
    $(function() {
        
        $.get('static/plugins/markdown/examples/test.md', function(md){
            testEditor = editormd("test-editormd", {
                width: "100%",
                height: 740,
                path : '../lib/',
                theme : "dark",
                previewTheme : "dark",
                editorTheme : "pastel-on-dark",
                markdown : md,
                codeFold : true,
                //syncScrolling : false,
                saveHTMLToTextarea : true,    // 保存 HTML 到 Textarea
                searchReplace : true,
                //watch : false,                // 关闭实时预览
                htmlDecode : "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启    
                //toolbar  : false,             //关闭工具栏
                //previewCodeHighlight : false, // 关闭预览 HTML 的代码块高亮，默认开启
                emoji : true,
                taskList : true,
                tocm            : true,         // Using [TOCM]
                tex : true,                   // 开启科学公式TeX语言支持，默认关闭
                flowChart : true,             // 开启流程图支持，默认关闭
                sequenceDiagram : true,       // 开启时序/序列图支持，默认关闭,
                //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
                //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
                //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
                //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
                //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
                imageUpload : true,
                imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                imageUploadURL : "./php/upload.php",
                onload : function() {
                    console.log('onload', this);
                    //this.fullscreen();
                    //this.unwatch();
                    //this.watch().fullscreen();

                    //this.setMarkdown("#PHP");
                    //this.width("100%");
                    //this.height(480);
                    //this.resize("100%", 640);
                }
            });
        });
        
        $("#goto-line-btn").bind("click", function(){
            testEditor.gotoLine(90);
        });
        
        $("#show-btn").bind('click', function(){
            testEditor.show();
        });
        
        $("#hide-btn").bind('click', function(){
            testEditor.hide();
        });
        
        $("#get-md-btn").bind('click', function(){
            alert(testEditor.getMarkdown());
        });
        
        $("#get-html-btn").bind('click', function() {
            alert(testEditor.getHTML());
        });                
        
        $("#watch-btn").bind('click', function() {
            testEditor.watch();
        });                 
        
        $("#unwatch-btn").bind('click', function() {
            testEditor.unwatch();
        });              
        
        $("#preview-btn").bind('click', function() {
            testEditor.previewing();
        });
        
        $("#fullscreen-btn").bind('click', function() {
            testEditor.fullscreen();
        });
        
        $("#show-toolbar-btn").bind('click', function() {
            testEditor.showToolbar();
        });
        
        $("#close-toolbar-btn").bind('click', function() {
            testEditor.hideToolbar();
        });
        
        $("#toc-menu-btn").click(function(){
            testEditor.config({
                tocDropdown   : true,
                tocTitle      : "目录 Table of Contents",
            });
        });
        
        $("#toc-default-btn").click(function() {
            testEditor.config("tocDropdown", false);
        });
    });
</script>
     </div>
    </div>
  </div>

 
  
  <button type="submit" class="btn btn-primary saveContent">发布</button>
</form>
  </div>
    </section>
</div>


<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> beta
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="">kinglion.xyz</a>.</strong> All rights
    reserved.
  </footer>
<!-- jQuery 2.2.3 -->
<!-- <script src="__STATIC__/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="__STATIC__/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<!-- <script src="__STATIC__/plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="__STATIC__/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="__STATIC__/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="__STATIC__/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="__STATIC__/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="__STATIC__/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="__STATIC__/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="__STATIC__/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="__STATIC__/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="__STATIC__/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="__STATIC__/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="__STATIC__/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="__STATIC__/dist/js/demo.js"></script>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
