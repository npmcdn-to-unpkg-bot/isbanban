<!DOCTYPE html>
<html>

<head>
    <title>Dashboard &mdash; <?php echo $title; ?></title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/print.css">
    <style>
    .remove-margin {
        margin-bottom: 0px !important;
    }
    </style>

    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/themes/flat-blue.css">


    <!-- Javascript Libs -->
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/select2.full.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/ace/ace.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/ace/theme-github.js"></script>
    <!-- Javascript -->
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/app.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/index.js"></script>
</head>

<body class="flat-blue">
    <div class="app-container expanded">
        <div class="row content-container">
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo base_url() ?>">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">Isbanban Panel</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">

<!-- Dashboard -->
                            <li <?php if($role == 'dashboard') { echo "class=active"; } ?>>
                                <a href="<?php echo base_url() ?>admin/dashboard">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>

<!-- Blog -->
                            <li <?php if($role == 'blog') { echo "class=active"; } ?>>
                                <a href="<?php echo base_url() ?>admin/blog">
                                    <span class="icon fa fa-pencil"></span><span class="title">Blog</span>
                                </a>
                            </li>

<!-- Event -->
                             <li <?php if($role == 'event') { echo "class=active"; }?>>
                                <a href="<?php echo base_url() ?>admin/event">
                                    <span class="icon fa fa-calendar-o"></span><span class="title">Event</span>
                                </a>
                            </li>

<!-- Relawan -->
                            <li <?php if($role == 'volunteer') { echo "class=active"; }?>>
                                <a href="<?php echo base_url() ?>admin/volunteer">
                                    <span class="icon fa fa-group"></span><span class="title">Relawan</span>
                                </a>
                            </li>

                            <li <?php if($role == 'oprec') { echo "class=active"; }?>>
                                <a href="<?php echo base_url() ?>admin/volunteer/recruitment">
                                    <span class="icon fa fa-user"></span><span class="title">Open Recruitment</span>
                                </a>
                            </li>

<!-- Desa Binaan -->
                            <li <?php if($role == 'village') { echo "class=active"; } ?>>
                                <a href="<?php echo base_url() ?>admin/village">
                                    <span class="icon fa fa-map"></span><span class="title">Desa Binaan</span>
                                </a>
                            </li>


<!-- Campaign -->
                            <!-- <li <?php if($role == 'campaign') { echo "class=active"; } ?>>
                                <a href="<?php echo base_url() ?>admin/campaign">
                                    <span class="icon fa fa-building-o"></span><span class="title">Campaign</span>
                                </a>
                            </li> -->

<!-- Donatur -->
                            <li <?php if($role == 'donation') { echo "class=active"; } ?>>
                                <a href="<?php echo base_url() ?>admin/donation">
                                    <span class="icon fa fa-male"></span><span class="title">Donation</span>
                                </a>
                            </li>

<!-- Logout -->
                            <li>
                                <a href="<?php echo base_url() ?>logout">
                                    <span class="icon fa fa-sign-out"></span><span class="title">Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


