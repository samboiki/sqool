<!-- light-blue - v3.1.0 - 2014-12-06 -->
<!DOCTYPE html>
<html>
<head>
    <title>M&E Database</title>

        <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
    
        <div class="logo">
        <h4><a href="index.html">Sta</a><strong>tz</strong>&nbsp;&nbsp;
        </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-institution"></i> <span class="name">Organization</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Basic Stats</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('stat_charts');?>"><i class="fa fa-line-chart"></i> <span class="name">Chart Stats</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('users');?>"><i class="fa fa-users"></i> <span class="name">Users</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('orgsettings');?>"><i class="fa fa-cogs"></i> <span class="name">Settings</span></a>
                </li>
                <li class="visible-xs">
                    <a href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
       
        
        </nav>   
        <div class="wrap">
        <div class="content container">
        <h2 class="page-title"> <small>Dashboard Statistics</small></h2>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h4>
                            #Students
                            <small>
                                Attendance
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body no-margin">
                        <div id="visits-chart" class="chart visits-chart">
                            <svg></svg>
                        </div>
                    </div>
                </section>
                
                <section class="widget">
                    <header>
                        <h4>
                            HIV Test Results
                            <small>
                                May 2015
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <table class="table table-striped no-margin sources-table">
                            <thead>
                            <tr>
                                <th class="source-col-header">Facility</th>
                                <th>Total</th>
                                <th>Positive</th>
                                <th class="hidden-xs">Negative</th>
                                <th>Target</th>
                                <th class="chart-col-header hidden-xs">Year Trend</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Andara Hospital</strong></td>
                                <td>50</td>
                                <td><strong class="color-green">25</strong></td>
                                <td><strong class="color-red">25</strong></td>
                                <td>900</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="direct-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Katutura Hospital</strong></td>
                                <td>562</td>
                                <td><strong>+84</strong></td>
                                <td class="hidden-xs">+64</td>
                                <td>500</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="refer-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Nyangana Hospital</strong></td>
                                <td>148</td>
                                <td><strong class="color-red">-12</strong></td>
                                <td class="hidden-xs">+3</td>
                                <td>180</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="social-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Odibo Hospital</strong></td>
                                <td>653</td>
                                <td><strong class="color-green">+23</strong></td>
                                <td class="hidden-xs">+43</td>
                                <td>876</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="search-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Windhoek Central Hospital</strong></td>
                                <td>976</td>
                                <td><strong>+101</strong></td>
                                <td class="hidden-xs">-7</td>
                                <td>844</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="internal-trend"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="description">
                        <strong>150</strong> total students |<i class="fa fa-female"></i><strong>76</strong> |<i class="fa fa-male"></i><strong>74</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="description">
                        <strong>20</strong> total teachers |<i class="fa fa-female"></i><strong>6</strong> |<i class="fa fa-male"></i><strong>14</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="description">
                        <strong>643</strong> Parents
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="description">
                        <strong>643</strong> total text messages
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/jquery-pjax/jquery.pjax.js"></script>
<script src="assets/lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="assets/lib/widgster/widgster.js"></script>
<script src="assets/lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/lib/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/jquery.sparkline/index.js"></script>

<script src="assets/lib/d3/d3.min.js"></script>
        <script src="assets/lib/nvd3/nv.d3.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/index.js"></script>
<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
    
        <!-- page application js -->
  
<script>
       // var dataset = [20, 40, 50, 600 ];
     //   var canvas = d3.select("body")
            .append("svg")
            .attr("width", 100)
            .attr("height", 100);
    
        var bars = canvas.selectAll("rect")
                   .data(dataset)
                   .enter()
                        .append("rect")
                        .attr("width", function(d) {return d * 10; })
                        .attr("height", 50)
                        .attr("y", function(d, i) {return i * 100 });
                
           
    </script>
</body>
</html>