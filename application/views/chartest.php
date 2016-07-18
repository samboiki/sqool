<!DOCTYPE html>
<html>
<head>
    <title>MoHSS</title>

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
        <h4><a href="index.html">M&E</strong></a></h4>
    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Basic Stats</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('stat_charts');?>"><i class="fa fa-area-chart"></i> <span class="name">Chart Stats</span></a>
                </li>
                <li class="visible-xs">
                    <a href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
       
        
        </nav>   
    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                  
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="content container">
        <h2 class="page-title">Charts <small>Visual Charts & Graphs</small></h2>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <section class="widget large">
                    <header>
                        <h4><i class="fa fa-bar-chart-o"></i>My own chart</h4>
                    </header>
                    <div id="sources-chart-liness" class="body chart">
                        <svg></svg>
                    </div>
                </section>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
                <section class="widget large">
                    <header>
                        <h4><i class="fa fa-bar-chart-o"></i> Namibia HIV Positive Results By Age Group</h4>
                    </header>
                    <div class="body">
                        <div id="sources-chart-pie" class="chart pie-chart">
                            <svg></svg>
                        </div>
                    </div>
                    <footer id="data-chart-footer" class="pie-chart-footer">
                    </footer>
                </section>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
                <section class="widget large">
                    <header>
                        <h4><i class="fa fa-bar-chart-o"></i> Bar Chart <small style="display: inline !important;" class="hidden-xs">Refresh page to see different data</small></h4>
                    </header>
                    <div id="sources-chart-bar" class="body chart">
                        <svg></svg>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <section class="widget large">
                    <header>
                        <h4><i class="fa fa-bullhorn"></i> Stream Stacked Chart</h4>
                    </header>
                    <div id="sources-chart-stacked" class="body chart">
                        <svg></svg>
                    </div>
                </section>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
                <section class="widget large">
                    <header>
                        <h4><i class="fa fa-arrow-circle-o-right"></i> Line Chart</h4>
                    </header>
                    <div id="sources-chart-line" class="body chart">
                        <svg></svg>
                    </div>
                </section>
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
        <script src="assets/js/nvd3-custom-lb1.0/lib/d3.v2.min.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/nv.d3.custom.js"></script>

        <!-- nvd3 models -->
        <script src="assets/js/nvd3-custom-lb1.0/src/models/scatter.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/axis.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/legend.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/stackedArea.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/stackedAreaChart.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/line.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/pie.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/pieChartTotal.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/stream_layers.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/lineChart.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/multiBar.js"></script>
        <script src="assets/js/nvd3-custom-lb1.0/src/models/multiBarChart.js"></script>

        <!-- page application js -->
        <script src="assets/js/mychart.js"></script>
        <script src="assets/js/stat-charts.js"></script>
        

</body>
</html>