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
	<div id="border"></div>


	<div id="page" class="container-fluid">

		<div class="row-fluid">

			<div id="left" class="span4">

				<header id="header" class="vcard">
					<hgroup>
						<h1 id="name" itemprop="name">
							<a class="url" href="<?php echo Site::get_url( 'habari' ); ?>">
									<span class="fn n hide">
										<span class="given-name">John</span> <span class="family-name">Edmondson</span>
									</span>
								<span class="nickname">@jedmondson</span>
							</a>
						</h1>
						<h2 id="tagline" itemprop="description"><span class="role">Themes</span>. This is a test site for John Edmondson - it is running Habari on Dreamhost - Things will break.</h2>
					</hgroup>
					<div class="navbar">
						<ul class="social nav links">
							<li><a href="https://john.edmondson-uk.com" title="John Edmondson" class="icon blog" data-rel="tooltip">John Edmondson</a></li>
					
						</ul>
					</div>
				</header>

			</div>

			<section id="content" class="span7 offset1">
				<?php

					// get any session messages we need to display
					$errors = Session::get_errors( true );
					$notices = Session::get_notices( true );

					if ( count( $errors ) > 0 ) {

						?>

							<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<?php
									foreach ( $errors as $error ) {
										?>
											<p><?php echo $error; ?></p>
										<?php
									}
								?>
							</div>

						<?php

					}

					if ( count( $notices ) > 0 ) {

						?>

							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<?php
									foreach ( $notices as $notice ) {
										?>
											<p><?php echo $notice; ?></p>
										<?php
									}
								?>
							</div>

						<?php

					}

				?>