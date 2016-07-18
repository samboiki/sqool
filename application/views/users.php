
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>sqoolz</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url();?>/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Scroller/css/scroller.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
        
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-without-sidebar page-header-fixed page-with-top-menu">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
                                    <a href="index.html" class="navbar-brand text-white f-s-14"><span class="navbar-logo"></span><strong>sqoolz</strong></a>
					<button type="button" class="navbar-toggle" data-click="top-menu-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url();?>/assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Sam Schwartz</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #top-menu -->
		<div id="top-menu" class="top-menu">
                <!-- begin top-menu nav -->
                <ul class="nav">
                    <li><a href="<?php echo base_url('index');?>"><i class="fa fa-laptop"></i><span>Dashboard</span></a></li>
                    <li class="has-sub active"><a href="<?php echo base_url('users');?>"> <i class="fa fa-user"></i> <span>System users</span></a></li>
                    <li><a href="<?php echo base_url('settings');?>"><i class="fa fa-cog"></i><span>System environment</span></a></li>
                    <li class="menu-control menu-control-left">
                        <a href="#" data-click="prev-menu"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="menu-control menu-control-right">
                    <a href="#" data-click="next-menu"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            <!-- end top-menu nav -->
		</div>
		<!-- end #top-menu -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
                        <div class="row">
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Dashboard</a></li>
			</ol>
			<!-- end breadcrumb -->
                        </div>
                        <!-- begin page-header -->
		
			<!-- end page-header -->
                        
			<!-- begin row -->
			<div class="row">
				    <!-- begin col-3 -->
				<div class="col-md-1 col-sm-6">
                                   
				</div>
				<!-- end col-3 -->
                                <!-- begin col-10 -->
                                    <div class="col-md-10">
                                        <!-- begin panel -->
                                        <div class="panel panel-inverse">
                                            <div class="panel-heading">
                                                <div class="panel-heading-btn">
                                                    <button type="button" class="btn btn-labeled btn-success btn-xs">
                                                    <span class="btn-label">
                                                     <i class="fa fa-plus"></i>
                                                    </>Add user
                                                   </button>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                                <h4 class="panel-title">DataTable - Scroller</h4>
                                            </div>
                                            <div class="panel-body">

                                                <table id="data-table" class="table table-condensed table-striped table-bordered display" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Date of birth</th>
                                                            <th>Gender</th>
                                                            <th>Role</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- end panel -->
                                    </div>
                                <!-- end col-10 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
                          
                                
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		<!-- begin #footer -->
		<div id="footer" class="footer">
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-twitter"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-facebook-f"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-google-plus"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-linkedin"></i></a>&nbsp;
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-youtube-play"></i></a>&nbsp;
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>sqoolz blog</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>about sqoolz</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>privacy policy</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>terms & conditions</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="shoshialt f-s-13 f-w-600  pull-right">&copy; 2016 sqoolz island, inc.</p>
		</div>
		<!-- end #footer -->
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/table-manage-scroller.demo.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url();?>/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
                        TableManageScroller.init();
		});
	</script>
        <script>
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        </script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>

