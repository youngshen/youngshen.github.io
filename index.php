<?php
define('ROOT', dirname(__FILE__).'/');
require_once(ROOT.'includes/common.php');
if($conf['ifweb']=='1'){
exit($conf['webcon']);
}
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
<meta charset="utf-8"/>
<title><?=$conf['name']?>-更强力的点赞神器,云Q助手 用户首选点赞系统</title>
<meta name="keywords" content="QQ空间动态赞 | 离线点赞 | 琉璃云点赞 | 墨梅Team | 点赞程序 | QQ云助手 | 离线云端点赞">
<meta name="description" content="琉璃云点赞, QQ离线点赞, 在线点赞, 云端点赞 24h点赞, QQ点赞, 免费点赞网"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="/static/index/css/app.v2.css" type="text/css"/>
<link rel="stylesheet" href="/static/index/css/font.css" type="text/css" cache="false"/>
<link rel="stylesheet" href="/static/index/css/landing.css" type="text/css" cache="false"/>
<!--[if lt IE 9]>
<script src="/static/index/js/ie/html5shiv.js" cache="false"></script>
<script src="/static/index/js/ie/respond.min.js" cache="false"></script>
<script src="/static/index/js/ie/excanvas.js" cache="false"></script>
<![endif]-->
</head>
<body>
<!-- header -->
<header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" data-spy="affix" data-offset-top="1">
<div class="container">
	<div class="navbar-header">
		<a href="#" class="navbar-brand"><img src="/static/index/images/logo.png" class="m-r-sm"><span class="text-muted">Coloured glaze cloud</span></a>
		<button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="index.php">首页</a></li>
			<?php
			if(!iflogin(DBQZ)){
				echo '
			<li>
			<a href="/login.php">登录</a></li>
			<li>
			<div class="m-t-sm">
				<a href="/login.php?do=reg" class="btn btn-sm btn-success m-l"><strong>注册</strong></a>
			</div>
			<li>';
			}else{
			echo '
			<li>
			<div class="m-t-sm">
				<a href="/user" class="btn btn-sm btn-danger m-l"><strong>用户中心</strong></a>
			</div>
			</li>
			';
			}
		?>
		</ul>
	</div>
</div>
</header>
<!-- / header -->
<section id="content">
<div class="bg-primary dk">
	<div class="text-center wrapper">
		<div class="m-t-xl m-b-xl">
			<div class="text-uc h1 font-bold inline">
				<div class="pull-left m-r-sm text-white">
					Coloured glaze cloud <span class="font-thin text-muted">免费</span>
				</div>
				<div class="carousel slide carousel-fade inline auto aside text-left pull-left pull-none-xs" data-interval="2000">
					<div class="carousel-inner">
						<div class="item active text-warning">
							 简约
						</div>
						<div class="item text-dark">
							 高效
						</div>
						<div class="item">
							 稳定
						</div>
					</div>
				</div>
			</div>
			<div class="h4 text-muted m-t-sm">
				现在, 简约 & 干净 和平坦的用户界面 ,简约的欧美风格
			</div>
		</div>
		<p class="text-center m-b-xl">
		<?php
			if(!iflogin(DBQZ)){
				echo '<a href="/login.php" target="_blank" class="btn btn-lg btn-dark m-sm">账号登录</a><a href="/login.php?do=reg" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">账号注册</a>';
			}else{
			echo '<a href="/user" target="_blank" class="btn btn-lg btn-default m-sm">用户中心</a>';
			}
		?>
		</p>
	</div>
	<div class="padder">
		<div class="hbox">
			<aside class="col-md-3 v-bottom text-right">
			<div class="hidden-sm hidden-xs">
				<section class="panel bg-dark inline m-b-n-lg m-r-n-lg aside-sm no-border device phone animated fadeInLeftBig">
				<header class="panel-heading text-center"><i class="fa fa-minus fa-2x m-b-n-xs block"></i></header>
				<div>
					<div class="m-l-xs m-r-xs">
						<img src="/static/index/images/phone-2.png" class="img-full">
					</div>
				</div>
				</section>
			</div>
			</aside>
			<aside class="col-sm-10 col-md-6">
			<section class="panel bg-dark m-b-n-lg no-border device animated fadeInUp">
			<header class="panel-heading text-left"><i class="fa fa-circle fa-fw"></i><i class="fa fa-circle fa-fw"></i><i class="fa fa-circle fa-fw"></i></header>
			<img src="/static/index/images/main.png" class="img-full"></section>
			</aside>
			<aside class="col-md-3 v-bottom">
			<div class="hidden-sm hidden-xs">
				<section class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
				<header class="panel-heading text-center"><i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i></header>
				<div class="">
					<div class="m-l-xs m-r-xs">
						<img src="/static/index/images/phone-1.png" class="img-full">
					</div>
				</div>
				</section>
			</div>
			</aside>
		</div>
	</div>
	<div class="dker pos-rlt">
		<div class="container wrapper">
			<div class="m-t-lg m-b-lg text-center">
				 For your faster and easier web development.
			</div>
		</div>
	</div>
</div>
<div id="about">
	<div class="container">
		<div class="m-t-xl m-b-xl text-center wrapper">
			<h3>响应web应用程序和后台管理模板设计</h3>
			<p class="text-muted">
				这个基于web的应用程序模板给你太多的权力构建你的应用程序。
			</p>
		</div>
		<div class="row m-t-xl m-b-xl text-center">
			<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
				<p class="h3 m-b-lg">
					<i class="fa fa-lightbulb-o fa-3x text-info"></i>
				</p>
				<div class="">
					<h4 class="m-t-none">Web应用程序</h4>
					<p class="text-muted m-t-lg">
						许多移动应用部件和组件,它充分响应,可以运行在所有屏幕的大小。简单的程序结构容易修复!
					</p>
				</div>
			</div>
			<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
				<p class="h3 m-b-lg">
					<i class="fa fa-signal fa-3x text-info"></i>
				</p>
				<div class="">
					<h4 class="m-t-none">后台管理模板</h4>
					<p class="text-muted m-t-lg">
						它还可以用作管理仪表板,它有表、图表和其他有用的组件对系统管理、图表数据显示和分析。
					</p>
				</div>
			</div>
			<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
				<p class="h3 m-b-lg">
					<i class="fa fa-rocket fa-3x text-info"></i>
				</p>
				<div class="">
					<h4 class="m-t-none">APP应用开发</h4>
					<p class="text-muted m-t-lg">
						这个模板也有一个前端网站,为您的应用程序,它的功能介绍,博客部分,包括表和价格。
					</p>
				</div>
			</div>
		</div>
		<div class="m-t-xl m-b-xl text-center wrapper">
			<p class="h5">
				您可以使用它来构建 <span class="text-primary">内容管理系统</span>, <span class="text-primary">APP应用程序</span>, <span class="text-primary">其他应用</span>...
			</p>
		</div>
	</div>
</div>
<div id="responsive" class="bg-dark">
	<div class="text-center">
		<div class="container">
			<div class="m-t-xl m-b-xl wrapper">
				<h3 class="text-white">您的应用程序将作品无论你在哪里</h3>
				<p>
					您可以使用您的应用程序在世界任何地方. <br>
            这个模板适用于 
					<span class="text-primary text-ul">移动设备</span>
				</p>
			</div>
			<div class="row m-t-xl m-b-xl">
				<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
					<p class="text-center h2 m-b-lg m-t-lg">
						<span class="fa-stack fa-2x"><i class="fa fa-circle fa-stack-2x text-dark"></i><i class="fa fa-mobile fa-stack-1x text-muted"></i></span>
					</p>
					<p>
						手机
					</p>
				</div>
				<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
					<p class="text-center h1 m-b-lg">
						<span class="fa-stack fa-2x"><i class="fa fa-circle fa-stack-2x text-dark"></i><i class="fa fa-tablet fa-stack-1x text-muted"></i></span>
					</p>
					<p>
						平板
					</p>
				</div>
				<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
					<p class="text-center h2 m-b-lg m-t-lg">
						<span class="fa-stack fa-2x"><i class="fa fa-circle fa-stack-2x text-dark"></i><i class="fa fa-desktop fa-stack-1x text-muted text-md"></i></span>
					</p>
					<p>
						电脑
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- footer -->
<footer id="footer">
<div class="bg-dark dker wrapper">
	<div class="container text-center m-t-lg">
		<div class="m-t-xl m-b-xl">
			<p>
				<a href="#" class="btn btn-icon btn-rounded btn-facebook bg-empty m-sm"><i class="fa fa-facebook"></i></a><a href="#" class="btn btn-icon btn-rounded btn-twitter bg-empty m-sm"><i class="fa fa-twitter"></i></a><a href="#" class="btn btn-icon btn-rounded btn-gplus bg-empty m-sm"><i class="fa fa-google-plus"></i></a>
			</p>
			<p>
				<a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
			</p>
		</div>
	</div>
</div>
</footer>
<!-- / footer -->
<script src="/static/index/js/app.v2.js"></script>
<!-- Bootstrap --><!-- App -->
<script src="/static/index/js/appear/jquery.appear.js" cache="false"></script>
<script src="/static/index/js/scroll/smoothscroll.js" cache="false"></script>
<script src="/static/index/js/landing.js" cache="false"></script>
</body>
</html>
