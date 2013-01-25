<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $locale; ?>"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/style.css' ); ?>">
    	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/docs.css' ); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/bootstrap.css' ); ?>">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/bootstrap-responsive.css' ); ?>">
<meta name="viewport" content="width=device-width">
<!-- <link rel="profile" href="http://microformats.org/profile/hcard"> -->
	<?php
		echo $theme->header();
	?>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Test Theme</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i>Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>