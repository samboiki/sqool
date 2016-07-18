<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Page with Two Sidebar</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?=base_url()?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
  
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-header-fixed page-sidebar-fixed page-with-two-sidebar page-right-sidebar-collapsed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-inverse navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle pull-left" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<button type="button" class="navbar-toggle pull-right" data-click="right-sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                                    <a href="index.html" class="navbar-brand"><span class=""></span><strong>MoHSS</strong><small> epms</small> </a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
                                <!-- begin navbar-collapse -->
                                <div class="collapse navbar-collapse pull-left" id="top-navbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-lg">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 12px;"><span class="btn-wrapper" ">
                                <button class="btn btn-inverse  btn-xs"><i class="fa fa-th-large fa-fw"></i><strong>  ART Therapy &nbsp;&nbsp;&nbsp;</strong><b class="caret"></b></button>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">UI Kits</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> FontAwesome</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Ionicons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Simple Line Icons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Typography</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Media Object</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Widget Boxes</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Tabs & Accordions</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Unlimited Nav Tabs</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Modal & Notification</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Buttons</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Page Options <span class="label label-inverse">11</span></h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Blank Page</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Footer <span class="badge badge-success">NEW</span></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page without <!-- end #header --><!-- end #header --></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Right Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Minified Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Two Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Line Icons</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Full Height Content</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Mega Menu</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Light Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Large Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Paragraph</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis libero purus, fermentum at libero convallis, auctor dignissim mauris. Nunc laoreet pellentesque turpis sodales ornare. Nunc vestibulum nunc lorem, at sodales velit malesuada congue. Nam est tortor, tincidunt sit amet eros vitae, aliquam finibus mauris.
                                        </p>
                                        <p>
                                            Fusce ac ligula laoreet ante dapibus mattis. Nam auctor vulputate aliquam. Suspendisse efficitur, felis sed elementum eleifend, ipsum tellus sodales nisi, ut condimentum nisi sem in nibh. Phasellus suscipit vulputate purus at venenatis. Quisque luctus tincidunt tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-lg">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 12px;"><span class="btn-wrapper" ">
                                <button class="btn btn-inverse  btn-xs"><i class="fa fa-plus-square fa-fw"></i><strong>  ART Therapy &nbsp;&nbsp;&nbsp;</strong><b class="caret"></b></button>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">UI Kits</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> FontAwesome</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Ionicons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Simple Line Icons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Typography</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Media Object</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Widget Boxes</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Tabs & Accordions</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Unlimited Nav Tabs</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Modal & Notification</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Buttons</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Page Options <span class="label label-inverse">11</span></h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Blank Page</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Footer <span class="badge badge-success">NEW</span></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page without <!-- end #header --><!-- end #header --></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Right Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Minified Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Two Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Line Icons</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Full Height Content</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Mega Menu</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Light Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Large Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Paragraph</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis libero purus, fermentum at libero convallis, auctor dignissim mauris. Nunc laoreet pellentesque turpis sodales ornare. Nunc vestibulum nunc lorem, at sodales velit malesuada congue. Nam est tortor, tincidunt sit amet eros vitae, aliquam finibus mauris.
                                        </p>
                                        <p>
                                            Fusce ac ligula laoreet ante dapibus mattis. Nam auctor vulputate aliquam. Suspendisse efficitur, felis sed elementum eleifend, ipsum tellus sodales nisi, ut condimentum nisi sem in nibh. Phasellus suscipit vulputate purus at venenatis. Quisque luctus tincidunt tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-lg">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 12px;"><span class="btn-wrapper" ">
                                <button class="btn btn-inverse  btn-xs"><i class="fa fa-heartbeat fa-fw"></i><strong>  TB Therapy &nbsp;&nbsp;&nbsp;</strong><b class="caret"></b></button>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">UI Kits</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> FontAwesome</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Ionicons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Simple Line Icons</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Typography</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Media Object</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Widget Boxes</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Tabs & Accordions</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Unlimited Nav Tabs</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Modal & Notification</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Buttons</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Page Options <span class="label label-inverse">11</span></h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Blank Page</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Footer <span class="badge badge-success">NEW</span></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page without <!-- end #header --><!-- end #header --></a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Right Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Minified Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Two Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Line Icons</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <ul class="nav">
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Full Height Content</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Mega Menu</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Light Sidebar</a></li>
                                                    <li><a href="#" class="text-ellipsis"><i class="fa fa-angle-right fa-fw fa-lg text-inverse"></i> Page with Large Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <h4 class="dropdown-header">Paragraph</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis libero purus, fermentum at libero convallis, auctor dignissim mauris. Nunc laoreet pellentesque turpis sodales ornare. Nunc vestibulum nunc lorem, at sodales velit malesuada congue. Nam est tortor, tincidunt sit amet eros vitae, aliquam finibus mauris.
                                        </p>
                                        <p>
                                            Fusce ac ligula laoreet ante dapibus mattis. Nam auctor vulputate aliquam. Suspendisse efficitur, felis sed elementum eleifend, ipsum tellus sodales nisi, ut condimentum nisi sem in nibh. Phasellus suscipit vulputate purus at venenatis. Quisque luctus tincidunt tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
				<!-- end navbar-collapse -->
                                
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
							<img src="<?=base_url()?>assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
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
					<li class="divider hidden-xs"></li>
					<li class="hidden-xs">
					    <a href="javascript:;" data-click="right-sidebar-toggled" class="f-s-14">
					        <i class="fa fa-th"></i>
					    </a>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar sidebar-grid">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile"style="padding-bottop: 0px;">
                                            <div class="profiles-image" style="background-color: white;">
                                                   
							<a href="javascript:;"><img src="<?=base_url()?>assets/img/male.png" alt="" /></a>
                                                         
						</div>
						<div class="info">
                                                    <strong><?php echo $row->firstname?> <?php echo $row->lastname?></strong><br>
                                                    <small><strong><i class="fa fa-hashtag fa-fw"></i><?php echo $row->id?></strong></small>
                                                    <small><strong><div> 28 years 3 months old</div></strong></small>
                                                    
                                                    
						</div>
                                        
					</li>
                                        <li class="nav-profile" style="padding-top: 0px;">
                                            <div class="pulse-loader " style="float: left;" ></div>
                                        </li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="has-sub">
						<a href="<?php echo base_url('index');?>">
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li class="has-sub ">
						<a href="javascript:;">
                                                    <b class="caret pull-right"></b>
							<i class="fa fa-medkit"></i> 
							<span>Patients</span>
						</a>
                                               <ul class="sub-menu">
						    <li><a href="<?php echo base_url('patients');?>"> <i class="fa fa-users m-l-8"></i> View Patients</a></li>
						    <li><a href="<?php echo base_url('adda');?>"><i class="fa fa-user-plus text-default m-l-8"></i> Add Adult Patient</a></li>
                                                    <li><a href="<?php echo base_url('addp');?>"><i class="fa fa-user-plus text-default m-l-8"></i> Add Paediatric Patient</a></li>
						</ul>
					</li>
                                        <li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-area-chart"></i>
						    <span>Reports</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="chart-flot.html">Flot Chart</a></li>
						    <li><a href="chart-morris.html">Morris Chart</a></li>
							<li><a href="chart-js.html">Chart JS</a></li>
						    <li><a href="chart-d3.html">d3 Chart <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
                                        <li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-envelope"></i>
					        <span>Messages</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_system.html">Reminders</a></li>
							<li><a href="email_newsletter.html">User </a></li>
						</ul>
					</li>
                                        <li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
							<i class="fa fa-star"></i> 
							<span>Quality Control</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="../../frontend/one-page-parallax/index.html" target="_blank">One Page Parallax</a></li>
						    <li><a href="../../frontend/blog/index.html" target="_blank">Blog</a></li>
						    <li><a href="../../frontend/forum/index.html" target="_blank">Forum</a></li>
						</ul>
					</li>
                                        <li class="has-sub">
						<a href="javascript:;">
						    <i class="fa fa-cogs"></i>
						    <span>Settings </span>
						</a>
					</li>
					
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #sidebar-right -->
		<div id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav m-t-10">
				    <li class="nav-widget">
				        <p>Server Status</p>
				        <div class="pull-left m-b-10 m-t-5">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="44" data-fgColor="#00acac" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="67" data-fgColor="#348fe2" data-bgColor="#242a30" />
                            </div>
                        </div>
				        <div class="pull-left">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="70" data-fgColor="#ff5b57" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="52" data-fgColor="#727cb6" data-bgColor="#242a30" />
                            </div>
                        </div>
				    </li>
				    <li class="nav-widget">
				        <p class="m-b-5">Total Visitors</p>
				        <div id="sidebar-sparkline-1" class="m-b-10"></div>
				        <p class="m-b-5">Total Page Views</p>
				        <div id="sidebar-sparkline-2" class="m-b-10"></div>
				        <p class="m-b-5">Total Unique Visitors</p>
				        <div id="sidebar-sparkline-3" class="m-b-10"></div>
				        <p class="m-b-5">Bounce Rate</p>
				        <div id="sidebar-sparkline-4"></div>
				    </li>
					<li class="nav-widget">
                        <div class="panel-group m-b-0" id="accordion">
                            <div class="panel panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <i class="fa fa-plus-circle pull-right text-success"></i> 
                                            Accordion #1
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <i class="fa fa-plus-circle pull-right text-success"></i> 
                                            Accordion #2
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <i class="fa fa-plus-circle pull-right text-success"></i> 
                                            Accordion #3
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                        </div>
					</li>
				</ul>
				<!-- end sidebar user -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
		
		<!-- begin #content -->
		<div id="content" class="content ">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Patients</a></li>
				<li class="active">Patient</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
                        <h1 class="page-headers" style="padding-bottom: 5px;"></h1>
			<!-- end page-header -->
			<!-- begin panel -->
                    <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                        <div class="panel-heading p-0">
                            <div class="panel-heading-btn m-r-10 m-t-10">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            </div>
                            <!-- begin nav-tabs -->
                            <div class="tab-overflow">
                                <ul class="nav nav-tabs nav-tabs-inverse">
                                    <li class="prev-button"><a href="javascript:;" data-click="prev-tab" class="text-success"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#nav-tab-1" data-toggle="tab">Nav Tab 1</a></li>
                                    <li class=""><a href="#nav-tab-2" data-toggle="tab">Nav Tab 2</a></li>
                                    <li class=""><a href="#nav-tab-3" data-toggle="tab">Nav Tab 3</a></li>
                                    <li class=""><a href="#nav-tab-4" data-toggle="tab">Nav Tab 4</a></li>
                                    <li class=""><a href="#nav-tab-5" data-toggle="tab">Nav Tab 5</a></li>
                                    <li class=""><a href="#nav-tab-6" data-toggle="tab">Nav Tab 6</a></li>
                                    <li class=""><a href="#nav-tab-7" data-toggle="tab">Nav Tab 7</a></li>
                                    <li class=""><a href="#nav-tab-8" data-toggle="tab">Nav Tab 8</a></li>
                                    <li class=""><a href="#nav-tab-9" data-toggle="tab">Nav Tab 8</a></li>
                                    <li class=""><a href="#nav-tab-10" data-toggle="tab">Nav Tab 10</a></li>
                                    <li class=""><a href="#nav-tab-11" data-toggle="tab">Nav Tab 11</a></li>
                                    <li class=""><a href="#nav-tab-12" data-toggle="tab">Nav Tab 12</a></li>
                                    <li class=""><a href="#nav-tab-13" data-toggle="tab">Nav Tab 13</a></li>
                                    <li class=""><a href="#nav-tab-14" data-toggle="tab">Nav Tab 14</a></li>
                                    <li class=""><a href="#nav-tab-15" data-toggle="tab">Nav Tab 15</a></li>
                                    <li class="next-button"><a href="javascript:;" data-click="next-tab" class="text-success"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="nav-tab-1">
                                <h3 class="m-t-10">Nav Tab 1</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-2">
                                <h3 class="m-t-10">Nav Tab 2</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-<?php echo "3";?>">
                                <h3 class="m-t-10">Nav Tab 3</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-4">
                                <h3 class="m-t-10">Nav Tab 4</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-5">
                                <h3 class="m-t-10">Nav Tab 5</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-6">
                                <h3 class="m-t-10">Nav Tab 6</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-7">
                                <h3 class="m-t-10">Nav Tab 7</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-8">
                                <h3 class="m-t-10">Nav Tab 8</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-9">
                                <h3 class="m-t-10">Nav Tab 9</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-10">
                                <h3 class="m-t-10">Nav Tab 10</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-11">
                                <h3 class="m-t-10">Nav Tab 11</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-12">
                                <h3 class="m-t-10">Nav Tab 12</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-13">
                                <h3 class="m-t-10">Nav Tab 13</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-14">
                                <h3 class="m-t-10">Nav Tab 14</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-15">
                                <h3 class="m-t-10">Nav Tab 15</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-16">
                                <h3 class="m-t-10">Nav Tab 16</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-17">
                                <h3 class="m-t-10">Nav Tab 17</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-18">
                                <h3 class="m-t-10">Nav Tab 18</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-19">
                                <h3 class="m-t-10">Nav Tab 19</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-tab-20">
                                <h3 class="m-t-10">Nav Tab 20</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                                    est diam sagittis orci, a ornare nisi quam elementum tortor. 
                                    Proin interdum ante porta est convallis dapibus dictum in nibh. 
                                    Aenean quis massa congue metus mollis fermentum eget et tellus. 
                                    Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
                                    nec eleifend orci eros id lectus.
                                </p>
                                <p>
                                    Aenean eget odio eu justo mollis consectetur non quis enim. 
                                    Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
                                    Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
                                    at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
                                    Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
                                    Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
                                    Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
                                </p>
                            </div>
                        </div>
                    </div>
			        <!-- end panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Panel Title here</h4>
			    </div>
			    <div class="panel-body panel-success ">
                                <div class="col-md-2 col-sm-3">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p>3,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
			    </div>
                         
			</div>
                        
                        
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog fa-spin"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active">
                        <a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
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
	<script src="<?=base_url()?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url()?>assets/plugins/jquery-knob/js/jquery.knob.js"></script>
	<script src="<?=base_url()?>assets/js/page-with-two-sidebar.demo.min.js"></script>
        <script src="<?=base_url()?>assets/js/chart-js.demo.js"></script>
	<script src="<?=base_url()?>assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			PageWithTwoSidebar.init();
		});
	</script>
        
      
         <h6>No records </h6>
   
</body>
</html>
