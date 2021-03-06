<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>途聆对讲移动应用后台管理系统</title>

		<!-- Bootstrap -->
		<link href="../userapp/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="../userapp/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="../userapp/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="../userapp/build/css/custom.min.css" rel="stylesheet">		

		<?php if(isset($this->blocks['myCss'])):?>
		<?=$this->blocks['myCss'];?>
		<?php endif; ?>		

	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="index.html" class="site_title"><span>管理系统</span></a>
						</div>

						<div class="clearfix"></div>

						<!-- menu profile quick info -->
						<div class="profile">
							<div class="profile_pic">
								<img src="../userapp/img/a.png" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>欢迎,管理员</span>
								<h2 id="username"></h2>
							</div>
						</div>
						<!-- /menu profile quick info -->

						<br />

						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>您的头像</h3>
								<ul class="nav side-menu">
									<li><a><i class="fa fa-home"></i> 用户信息管理 <span class="fa fa-chevron-down"></span></a> 	 
										<ul class="nav child_menu">
											<li><a href="<?=Url::to(['user/index']);?>">用户基本信息</a></li>
											<li><a href=<?=Url::to(['user/chatinfo']);?>>用户聊天信息</a></li>
											<li><a href=<?=Url::to(['user/userregister']);?>>用户注册分布</a></li>	
											<li><a href=<?=Url::to(['user/userarea']);?>>用户在线分布</a></li>																					
										</ul>
									</li>
									<li><a><i class="fa fa-edit"></i> 统计数据查询 <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href=<?=Url::to(['home/index']);?>>系统数据列表</a></li>
											<li><a href=<?=Url::to(['home/chart']);?>>实时在线人数</a></li>
											<li><a href=<?=Url::to(['home/dataanalyse']);?>>后台数据分析</a></li>										
										</ul>
									</li>
									<li><a href=<?=Url::to(['home/pushed']);?>><i class="fa fa-home"></i> 系统推送 <span class="fa"></span></a></li>
									<li><a href=<?=Url::to(['home/backup']);?>><i class="fa fa-home"></i> 数据备份与恢复 <span class="fa"></span></a></li>
								</ul>
							</div>

						</div>
						<!-- /sidebar menu -->
					</div>
				</div>

				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>

							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<img src="../userapp/img/a.png" alt="">操作
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li>
											<a href="javascript:;">帮助</a>
										</li>
										<li>
											<a href="http://127.0.0.1/basic/web/index.php?r=login/logout"><i class="fa fa-sign-out pull-right"></i> 登出</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->

				<!-- page content -->
				<?=$content?>
				<!-- /page content -->

				<!-- footer content -->
				<footer>
					<div class="pull-right">
						<a href="http://dean.swjtu.edu.cn/" target="_blank">西南交通大学官网</a>
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
		</div>

		<!-- jQuery -->
		<script src="../userapp/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="../userapp/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="../userapp/vendors/fastclick/lib/fastclick.js"></script>
		
		<script src="../userapp/vendors/moment/min/moment.min.js"></script>
		
		<!-- NProgress -->
		<script src="../userapp/vendors/nprogress/nprogress.js"></script>					
	    
	    <script src="../userapp/build/js/custom.min.js"></script>
	    
	    <script src="../userapp/vendors/jszip/dist/jszip.min.js"></script>
		<script>
			document.getElementById('username').innerText = localStorage.getItem('username');
		</script>
		
		<?php if(isset($this->blocks['myJs'])):?>
		<?=$this->blocks['myJs'];?>	
		<?php endif; ?>																																


	</body>

</html>
