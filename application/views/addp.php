<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Wizards + Validation</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
        
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
	<link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
	<link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
        <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />    
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
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
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/img/user-13.jpg" alt="" /> 
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
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							Sean Ngu
							<small>Front end developer</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
				<li class="has-sub">
						<a href="<?php echo base_url('index');?>">
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
                                                    <b class="caret pull-right"></b>
							<i class="fa fa-medkit"></i> 
							<span>Patients</span>
						</a>
                                               <ul class="sub-menu">
						    <li><a href="<?php echo base_url('patients');?>"> <i class="fa fa-users text-active m-l-8"></i> View Patients</a></li>
						    <li><a href="<?php echo base_url('adda');?>"><i class="fa fa-user-plus text-default m-l-8"></i> Add Adult Patient</a></li>
                                                    <li class="active"><a href="<?php echo base_url('addp');?>"><i class="fa fa-user-plus text-default m-l-8"></i> Add Paediatric Patient</a></li>
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
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Patients</a></li>
				<li class="active">Add Paediatric Patient</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add Patient <small>wizard to add patient system...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                                <div class="panel panel-inverse">
                                <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Patient</h4>
                        </div>
                                <div class="panel-body">
                                <form action="<?php echo base_url('pd');?>" method="POST" data-parsley-validate="true" name="form-wizard">
                                    <div id="wizard">
                                        <ol>
                                            <li>
                                                Basic patient details 
                                                <small>Record basic details about the patient in this section.</small>
                                            </li>
                                            <li>
                                                Contact Information
                                                <small>Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin.</small>
                                            </li>
                                            <li>
                                                Login
                                                <small>Phasellus lacinia placerat neque pretium condimentum.</small>
                                            </li>
                                            <li>
                                                Completed
                                                <small>Sed ssnunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                                            </li>
                                        </ol>

                                        <!-- begin wizard step-1 -->
                                        <div class="wizard-step-1">
                                        <fieldset>
                                            <!-- begin row -->
                                            <div class="row">
                                            <legend class="pull-left width-full">Basic Information</legend>
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group ">
                                                    <label><strong> First Name</strong></label>
                                                    <input type="text" name="firstname" placeholder="John" class="form-control input-sm" data-parsley-group="wizard-step-1" required />
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><strong>Middle Name</strong></label>
                                                    <input type="text" name="middle" placeholder="Spike" class="form-control input-sm" data-parsley-group="wizard-step-1"  />
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><strong>Last Name</strong></label>
                                                    <input type="text" name="lastname" placeholder="Shikongo" class="form-control input-sm" data-parsley-group="wizard-step-1" required />
                                                </div>
                                            </div>
                                                <!-- end col-3 -->
                                            </div>
                                            <!-- end row -->
                                            <!-- begin row -->
                                            <div class="row">
                                            <legend class="pull-left width-full"></legend>
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group block1">
                                                    <label><strong> Nationality</strong> </label>
                                                    <select name="nationality" class="form-control select input-sm" data-parsley-group="wizard-step-1" data-parsley-required="true" id="select-required" data-size="10" data-live-search="true" data-style="btn-white" >
                                                        <option value="" selected>Please select the nationality</option>
                                                        <option value="2">Angola</option>
                                                        <option value="4">Botswana</option>
                                                        <option value="1">Namibia</option>
                                                        <option value="3">South Africa</option>
                                                        <option value="5">Zambia</option>
                                                        <option value="6">Zimbabwe</option>
                                                        <option value="7">Swaziland</option>
                                                        <option value="8">Lesotho</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group block1">
                                                    <label><strong> Gender</strong></label>
                                                    <select name="gender" class="form-control select input-sm" data-parsley-group="wizard-step-1" data-parsley-required="true" id="select-required" data-size="10" data-live-search="true" data-style="btn-white" >
                                                        <option value="" selected>Please select the patient gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group block1">
                                                    <label><strong> Marital Status</strong></label>
                                                    <select name="marital" class="form-control select input-sm" data-parsley-group="wizard-step-1" data-parsley-required="true" id="select-required" data-size="10" data-live-search="true" data-style="btn-white" >
                                                        <option value="" selected>Please select the patient gender</option>
                                                        <option value="1">Single</option>
                                                        <option value="2">Married</option>
                                                        <option value="3">Separated</option>
                                                        <option value="4">Divorced</option>
                                                        <option value="5">Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <!-- begin col-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span class="fa fa-calendar fa-1x"></span><strong> Date of birth</strong></label>
                                                    <div class="input-group date " id="datetimepicker1" >
                                                        <input name="dob" type="text" class="form-control input-sm"  data-parsley-group="wizard-step-1" data-parsley-required="true" />
                                                        <span class="input-group-addon ">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- end col-3 -->
                                            </div>
                                            <!-- end row -->
                                                 <!-- begin row -->
                                                <div class="row">
                                                     <legend class="pull-left width-full"></legend>
                                                     <!-- begin col-3 -->
                                                    <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label><strong>Occupation</strong></label>
                                                        <input type="text" name="occupation" placeholder="e.g Plumber" class="form-control input-sm" data-parsley-group="wizard-step-1"  />
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <!-- begin col-3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group block1">
                                                            <label><strong>Passport Number</strong></label>
                                                            <input  name="passport" placeholder="1234" class="form-control input-sm" data-parsley-group="wizard-step-1" data-parsley-type="number" />
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <!-- begin col-3 -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label><strong>Identification Number</strong></label>
                                                        <input name="idnum" placeholder="5678" class="form-control input-sm" data-parsley-group="wizard-step-1" data-parsley-type="number" />
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                
                                            </div>
                                            <!-- end row -->
					</fieldset>
                                        </div>
                                        <!-- end wizard step-1 -->
                                        <!-- begin wizard step-2 -->
                                        <div class="wizard-step-2">
                                        <fieldset>  
                                            <!-- begin row -->
                                            <div class="row">
                                                <legend class="pull-left width-full">Contact Information</legend>
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"  />
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email"  />
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div class="wizard-step-3">
										<fieldset>
											<legend class="pull-left width-full">Login</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div class="controls">
                                                            <input type="text" name="username" placeholder="johnsmithy" class="form-control" data-parsley-group="wizard-step-3" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="wizard-step-3" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
									</div>
									<!-- end wizard step-3 -->
									<!-- begin wizard step-4 -->
									<div>
									    <div class="jumbotron m-b-0 text-center">
                                            <h1>Login Successfully</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                                            <p><a class="btn btn-success btn-lg" role="button">Proceed to User Profile</a></p>
                                            <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-save" style="color:white"></i>submit</button>
                                        </div>
									</div>
									<!-- end wizard step-4 -->
								</div>
							</form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
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
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/form-plugins.demo.min.js"></script>
        <script src="assets/plugins/parsley/dist/parsley.js"></script>
	<script src="assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
        
        
	
	<script>
		$(document).ready(function() {
			App.init();
                        FormWizardValidation.init();
                        FormPlugins.init();
                        
                        
		});
	</script>
</body>
</html>
