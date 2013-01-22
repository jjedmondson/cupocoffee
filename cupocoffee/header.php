<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $locale; ?>"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<?php

		echo $theme->header_prefetch();

	?>

	<title><?php echo $title; ?></title>

	<link rel="shortcut icon" href="<?php echo Site::get_url( 'site' ) . '/favicon.ico'; ?>">
	<link rel="icon" type="image/png" href="<?php echo $theme->get_url( 'assets/img/favicon.png' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://microformats.org/profile/hcard">

	<?php
		echo $theme->header();
	?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience the internet better!</p><![endif]-->
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

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action 
    <div class="hero-unit">
    <div class="row">
    <div class="span12">
    <div class="row">
    <div class="span5">Level 5</div>
    <div class="span2">Level 2</div>
    </div>
    </div>
    </div>
      </div>-->

    <div class="row">
   
   <div class="span11">
    
    <div class="row">
    <div class="span8"><h1><a href="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></h1> <p>	<?php echo $content->content_out; ?>
</p></div>
    <div class="span2"><ul><strong></strong><li> <i class="icon-user icon-black"></i><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->username; ?></span></span></li>  
    <li><i class="icon-calendar icon-black"></i> 12/12/13 <i class="icon-time icon-black"></i> <time datetime="<?php echo $content->pubdate->format('Y-m-d\TH:i:s\Z'); ?>" itemprop="datePublished"><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time> </li> <li> <i class="icon-comment icon-black"></i><?php echo Format::tag_and_list($content->tags, ', ', ', and '); ?></li> 
    <li><i class="icon-edit icon-black"></i><a href="#"> Edit</a></li>
    </ul></div>
  
    </div>
    
    
    </div>

    
    </div>

    