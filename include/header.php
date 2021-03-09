<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">



<?php

   $pagename = basename($_SERVER['PHP_SELF']);

	if($pagename == 'index.php'){

		echo "<title>TM | Dashboard</title>";

	}

	elseif($pagename == 'timesheet.php'){

		echo "<title>TM | Timesheet</title>";

	}

	elseif($pagename == 'tracker.php'){

		echo "<title>TM | Tracker</title>";

	}

	elseif($pagename == 'reports.php'){

		echo "<title>TM | Reports</title>";

	}

	elseif($pagename == 'projects.php'){

		echo "<title>TM | Projects</title>";

	}

	elseif($pagename == 'team.php'){

		echo "<title>TM | Team</title>";

	}

	elseif($pagename == 'setting.php'){

		echo "<title>TM | Setting</title>";

	}

	else{

		echo "<title>Time Mangement</title>";

	}

	

?>





<title>TM | Login</title>

<meta name="viewport" content="width=device-width, user-scalable=no">

<meta name="format-detection" content="telephone=no">

<meta http-equiv="x-ua-compatible" content="IE=edge">

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />



<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">

<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">

<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">

<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">

<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

<link rel="manifest" href="/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">

<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">

<meta name="theme-color" content="#ffffff">



<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">

<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">

<link href="css/animate.css" rel="stylesheet" type="text/css">

<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

<link href="css/progeress-bar-tyle.css" rel="stylesheet" type="text/css">

<link href="css/daterangepicker.css" rel="stylesheet" type="text/css">

<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">

<link href="css/jquery.timepicker.min.css" rel="stylesheet" type="text/css">

<link href="css/fm.selectator.jquery.css?cb=29" rel="stylesheet" type="text/css">

<link href="css/jquery.lineProgressbar.css" rel="stylesheet" type="text/css">

<!--<link href="css/hr-timePicker.min.css" rel="stylesheet"  type="text/css">-->

<link href="css/timepicker.min.css" rel="stylesheet"  type="text/css">











<link href="css/style.css" rel="stylesheet" type="text/css">





<!--[if lt IE 8]>

<script src="js/CreateHTML5Elements.js"></script>

<![endif]-->

<!--[if IE]>

    <link rel="stylesheet" type="text/css" href="js/ie8-responsive-file-warning.js" />

    <link rel="stylesheet" type="text/css" href="js/ie10-viewport-bug-workaround.js" />

    <link rel="stylesheet" type="text/css" href="js/ie-emulation-modes-warning.js" />

<![endif]-->

<!--[if IE]>

	<script src="js/html5.js" type="text/javascript"></script>

<![endif]-->





</head>



<body>

<!----- header start ----------->

<header >

  <div class="wrapper">

    <nav class="navarea">

    

    <a class="navbar-brand lft" href="index.php">

        <img src="images/logo.png" >

    </a>

    <div class="navbar lft">

        <ul class="">

            <li><a class=" <?php if($pagename == 'index.php'){?>active <?php } ?> " href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

            <li><a class=" <?php if($pagename == 'timesheet.php'){?>active <?php } ?> "  href="timesheet.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Timesheet</a></li>

            <li><a class=" <?php if($pagename == 'tracker.php'){?>active <?php } ?> " href="tracker.php"><i class="fa fa-anchor" aria-hidden="true"></i> Tracker</a></li>

            <li><a class=" <?php if($pagename == 'reports.php'){?>active <?php } ?> " href="reports.php"><i class="fa fa-file-text" aria-hidden="true"></i> Reports</a></li>

            <li><a class=" <?php if($pagename == 'projects.php'){?>active <?php } ?> " href="projects.php"><i class="fa fa-cogs" aria-hidden="true"></i> Projects</a></li>

            <!--<li><a class=" <?php if($pagename == 'team.php'){?>active <?php } ?> "  href="team.php"><i class="fa fa-users" aria-hidden="true"></i> Team</a></li>-->

        </ul>

        <div class="clear"></div>

    </div>

    <div class="right-div rgt">

        <ul class="navbar-nav">

            <li class="nav-item">

                <a class="nav-link popup-btn" href="javascript:void(0);" rel="logout-popup"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

            </li>

            <li class="nav-item">

                <a class="nav-link <?php if($pagename == 'setting.php'){?>active <?php } ?> " href="setting.php"><i class="fa fa-cog"></i> Settings</a>

            </li>

            <li class="nav-item">

                <div class="prfile-login">

                    <img alt="image" src="images/user-1.png" class="mr-1">

                    Subhasis Sarkar

                </div>

            </li>

        </ul>

    </div>

    

    <div class="clear"></div>

    </nav> 

  </div>

</header>

<!----- header end ----------->



<div class="modal" id="logout-popup">

    <div class="modal-header">

    	<h2>Logout </h2>

        <div class="close"><i class="fa fa-close"></i></div>

    </div>

    <div class="modal-body">

    	<h3>Are you sure you want to logout?</h3>

    	<br/>

    	<form style="text-align:center"  action="login.php">

        	<button class="common_button" type="submit" style="padding: 7px 15px; margin-right:10px;">Yes</button>

        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>

        </form>

    </div>

</div>









































