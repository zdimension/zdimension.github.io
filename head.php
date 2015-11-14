<?php

include_once('incl.php');

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="zdimension">
    <meta name="author" content="Monsieur Z">
	<link rel="author" href="https://plus.google.com/+zippedfire"/>
	<a style="display: none;" href="https://plus.google.com/+zippedfire" rel="me">Me on Google+</a>
	<link rel="publisher" href="https://plus.google.com/+zippedfire"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
	<meta property="og:title" content="<? echo $pagename; ?>"/>
	<meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<meta name="twitter:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<meta name="twitter:title" content="<? echo $pagename; ?>"/>
	<meta name="twitter:image" content="http://www.zdimension.tk/images/512.png"/>
	<meta property="og:image" content="http://www.zdimension.tk/images/512.png"/>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="zdimension,c#,csharp,sharpboot,usbfastboot,hassium,zippedfire,Monsieur Z,MonsieurZ,programming,programmation,niget"/>

    <title><? echo $pagename; ?> - zdimension</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/roboto.min.css" rel="stylesheet">
    <link href="css/material.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-material-blue">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">zdimension's supercalifragilisticexpialidocious website</a>
        </div>
		<div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li <? if($pagename=="Home")echo'class="active"';?>><a href="index.php">Home</a></li>
            <li <? if($pagename=="About")echo'class="active"';?>><a href="about.php">About</a></li>
            <li <? if($pagename=="Contact")echo'class="active"';?>><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">My projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="usbfastboot.php">USBFastBoot</a></li>
                <li><a href="sharpboot.php">SharpBoot</a></li>
                <li><a href="https://github.com/zdimension/IMPression">IMPressive</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Reagan and me</li>
                <li><a href="https://github.com/HassiumTeam/Hassium">Hassium</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<div class="container" style="padding-top: 30px;">