<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge"/>
<meta charset="utf-8"/>
<title>Dashboard - Ace Admin</title>

<meta name="description" content="overview &amp; stats"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="/novel/Public/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/novel/Public/font-awesome/4.5.0/css/font-awesome.min.css"/>

<!-- page specific plugin styles -->

    <link rel="stylesheet" href="/novel/Public/css/jquery-ui.custom.min.css"/>
    <link rel="stylesheet" href="/novel/Public/css/chosen.min.css"/>


<!-- text fonts -->
<link rel="stylesheet" href="/novel/Public/css/fonts.googleapis.com.css"/>

<!-- ace styles -->
<link rel="stylesheet" href="/novel/Public/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

<!--[if lte IE 9]>
<link rel="stylesheet" href="/novel/Public/css/ace-part2.min.css" class="ace-main-stylesheet"/>
<![endif]-->
<link rel="stylesheet" href="/novel/Public/css/ace-rtl.min.css"/>

<!--[if lte IE 9]>
<link rel="stylesheet" href="/novel/Public/css/ace-ie.min.css"/>
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="/novel/Public/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
<!--[if lte IE 8]>
<script src="/novel/Public/js/html5shiv.min.js"></script>
<script src="/novel/Public/js/respond.min.js"></script>
<![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
        <a href="index.html" class="navbar-brand">
            <small>
                <i class="fa fa-leaf"></i>
                Ace Admin
            </small>
        </a>
    </div>

    <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
            <li class="grey dropdown-modal">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="ace-icon fa fa-tasks"></i>
                    <span class="badge badge-grey">4</span>
                </a>

                <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                        <i class="ace-icon fa fa-check"></i>
                        4 Tasks to complete
                    </li>

                    <li class="dropdown-content">
                        <ul class="dropdown-menu dropdown-navbar">
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>

                                    <div class="progress progress-mini">
                                        <div style="width:65%" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>

                                    <div class="progress progress-mini">
                                        <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>

                                    <div class="progress progress-mini">
                                        <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>

                                    <div class="progress progress-mini progress-striped active">
                                        <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">
                            See tasks with details
                            <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="purple dropdown-modal">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                    <span class="badge badge-important">8</span>
                </a>

                <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                        <i class="ace-icon fa fa-exclamation-triangle"></i>
                        8 Notifications
                    </li>

                    <li class="dropdown-content">
                        <ul class="dropdown-menu dropdown-navbar navbar-pink">
                            <li>
                                <a href="#">
                                    <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="btn btn-xs btn-primary fa fa-user"></i>
                                    Bob just signed up as an editor ...
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                        <span class="pull-right badge badge-info">+11</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">
                            See all notifications
                            <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="green dropdown-modal">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                    <span class="badge badge-success">5</span>
                </a>

                <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                        <i class="ace-icon fa fa-envelope-o"></i>
                        5 Messages
                    </li>

                    <li class="dropdown-content">
                        <ul class="dropdown-menu dropdown-navbar">
                            <li>
                                <a href="#" class="clearfix">
                                    <img src="/novel/Public/images/avatars/avatar.png" class="msg-photo"
                                         alt="Alex's Avatar"/>
                                    <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="clearfix">
                                    <img src="/novel/Public/images/avatars/avatar3.png" class="msg-photo"
                                         alt="Susan's Avatar"/>
                                    <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="clearfix">
                                    <img src="/novel/Public/images/avatars/avatar4.png" class="msg-photo"
                                         alt="Bob's Avatar"/>
                                    <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="clearfix">
                                    <img src="/novel/Public/images/avatars/avatar2.png" class="msg-photo"
                                         alt="Kate's Avatar"/>
                                    <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="clearfix">
                                    <img src="/novel/Public/images/avatars/avatar5.png" class="msg-photo"
                                         alt="Fred's Avatar"/>
                                    <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown-footer">
                        <a href="inbox.html">
                            See all messages
                            <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="light-blue dropdown-modal">
                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    <img class="nav-user-photo" src="/novel/Public/images/avatars/user.jpg" alt="Jason's Photo"/>
                    <span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                    <i class="ace-icon fa fa-caret-down"></i>
                </a>

                <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                    <li>
                        <a href="#">
                            <i class="ace-icon fa fa-cog"></i>
                            Settings
                        </a>
                    </li>

                    <li>
                        <a href="profile.html">
                            <i class="ace-icon fa fa-user"></i>
                            Profile
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="ace-icon fa fa-power-off"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="" id="Index">
            <a href="<?php echo U('Index/index');?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> 首页 </span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="" id="Category">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> 分类管理 </span>
                <b class="arrow fa fa-angle-left"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li id="Categoryadd">
                    <a href="<?php echo U('Category/add');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>分类添加</span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="" id="Novel">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> 小说管理 </span>
                <b class="arrow fa fa-angle-left"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li id="Noveladd">
                    <a href="<?php echo U('Novel/add');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>小说添加</span>
                    </a>
                    <b class="arrow"></b>
                </li>

                <li id="Novelindex">
                    <a href="<?php echo U('Novel/index');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>小说列表</span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="" id="Chapter">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> 章节管理 </span>
                <b class="arrow fa fa-angle-left"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li id="Chapteradd">
                    <a href="<?php echo U('Chapter/add');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>章节添加</span>
                    </a>
                    <b class="arrow"></b>
                </li>

                <li id="Chapterindex">
                    <a href="<?php echo U('Chapter/index');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>最新章节列表</span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="" id="Crawler">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> 抓取管理 </span>
                <b class="arrow fa fa-angle-left"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li id="Crawleradd">
                    <a href="<?php echo U('Crawler/add');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>抓取设置</span>
                    </a>
                    <b class="arrow"></b>
                </li>

                <li id="Crawlerindex">
                    <a href="<?php echo U('Crawler/index');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <span>抓取状态</span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="<?php echo U('Index/index');?>">首页</a>
        </li>
        <li class="active" id="Index2"></li>
    </ul><!-- /.breadcrumb -->
</div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title" id="Index4"></h4>
                    <span class="widget-toolbar">
                        <a href="#" data-action="reload">
                            <i class="ace-icon fa fa-refresh"></i>
                        </a>
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                    </span>
                </div>
                <div class="widget-body">
                    <div class="widget-main">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center"></th>
                                <th class="detail-col">Details</th>
                                <th>Domain</th>
                                <th>Price</th>
                                <th class="hidden-480">Clicks</th>
                                <th></th>
                                <th class="hidden-480">Status</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="center"></td>

                                <td class="center"></td>

                                <td></td>
                                <td>$45</td>
                                <td class="hidden-480">3,330</td>
                                <td>Feb 12</td>

                                <td class="hidden-480"></td>

                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.span -->
    </div>

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->
    <div class="footer">
        <div class="footer-inner">
    <div class="footer-content">
		<span class="bigger-120">
			<span class="blue bolder">Ace</span>Application &copy; 2013-2014
		</span>
        <span class="action-buttons">
			<a href="#"><i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i></a>
			<a href="#"><i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i></a>
			<a href="#"><i class="ace-icon fa fa-rss-square orange bigger-150"></i></a>
		</span>
    </div>
</div>
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<!-- basic scripts -->
<!--[if !IE]> -->
<script src="/novel/Public/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="/novel/Public/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="/novel/Public/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<!-- ace scripts -->
<script src="/novel/Public/js/ace-elements.min.js"></script>
<script src="/novel/Public/js/ace.min.js"></script>
<!-- inline scripts related to this page -->

<!-- active menu -->
<script>
    String.prototype.trim = function (char, type) {
        if (char) {
            if (type == 'left') {
                return this.replace(new RegExp('^\\' + char + '+', 'g'), '');
            } else if (type == 'right') {
                return this.replace(new RegExp('\\' + char + '+$', 'g'), '');
            }
            return this.replace(new RegExp('^\\' + char + '+|\\' + char + '+$', 'g'), '');
        }
        return this.replace(/^\s+|\s+$/g, '');
    };

    var url_array = document.location.pathname.trim('.html', 'right').split("/");
    len = url_array.length;
    s1 = url_array[len - 2];
    s2 = url_array[len - 1];
    if (s1 == '' || s1 == 'Index') {
        $('#Index').addClass('active')
    } else {
        var s1_obj = $("#" + s1);
        var s1_str = s1_obj.children("a").children("span").text();
        $("#Index2").text(s1_str);
        $("#Index3").text(s1_str);

        var s2_obj = $("#" + s1 + s2);
        var s2_str = s2_obj.children("a").children("span").text();
        $("#Index4").text(s2_str);
        s1_obj.addClass('active').addClass('open');
        s2_obj.addClass('active');
    }
</script>

    <script src="/novel/Public/js/jquery-ui.custom.min.js"></script>
    <script src="/novel/Public/js/chosen.jquery.min.js"></script>
    <script>
        $('.chosen-select').chosen({allow_single_deselect: true});
    </script>

</body>
</html>