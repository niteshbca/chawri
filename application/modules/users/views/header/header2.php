<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/15/2015
 * Time: 5:27 PM
 */

?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Smarty Admin</title>
    <meta name="description" content="">
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]">

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css">

    <!-- CORE CSS -->
    <link href="<?php echo  asset_url();?>plugins\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- THEME CSS -->
    <link href="<?php echo  asset_url();?>css\essentials.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  asset_url();?>css\layout.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  asset_url();?>css\color_scheme\green.css" rel="stylesheet" type="text/css" id="color_scheme">

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo  asset_url();?>css\layout-datatables.css" rel="stylesheet" type="text/css">

</head>
<!--
    .boxed = boxed version
-->
<body>


<!-- WRAPPER -->
<div id="wrapper">

    <!--
        ASIDE
        Keep it outside of #wrapper (responsive purpose)
    -->



    <!-- HEADER -->
    <header id="header">

        <!-- Mobile Button -->
        <button id="mobileMenuBtn"></button>

        <!-- Logo -->
				<span class="logo pull-left">
					<img src="assets\images\logo_light.png" alt="admin panel" height="35">
				</span>

        <form method="get" action="page-search.html" class="search pull-left hidden-xs">
            <input type="text" class="form-control" name="k" placeholder="Search for something...">
        </form>

        <nav>

            <!-- OPTIONS LIST -->
            <ul class="nav pull-right">

                <!-- USER OPTIONS -->
                <li class="dropdown pull-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img class="user-avatar" alt="" src="assets\images\noavatar.jpg" height="34">
								<span class="user-name">
									<span class="hidden-xs">
										John Doe <i class="fa fa-angle-down"></i>
									</span>
								</span>
                    </a>
                    <ul class="dropdown-menu hold-on-click">
                        <li><!-- my calendar -->
                            <a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
                        </li>
                        <li><!-- my inbox -->
                            <a href="#"><i class="fa fa-envelope"></i> Inbox
                                <span class="pull-right label label-default">0</span>
                            </a>
                        </li>
                        <li><!-- settings -->
                            <a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
                        </li>

                        <li class="divider"></li>

                        <li><!-- lockscreen -->
                            <a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li><!-- logout -->
                            <a href="page-login.html"><i class="fa fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- /USER OPTIONS -->

            </ul>
            <!-- /OPTIONS LIST -->

        </nav>

    </header>
    <!-- /HEADER -->


