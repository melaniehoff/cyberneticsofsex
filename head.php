<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/dll.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.1.5.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/moment.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/app.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">


		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-32x32.png">
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" />
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">


		<!-- Primary Meta Tags -->
<title>digital love languages</title>
<meta name="title" content="digital love languages">
<meta name="description" content="">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://lovelanguages.melaniehoff.com/">
<meta property="og:title" content="digital love languages">
<meta property="og:description" content="A 10 weeks course exploring code as a practice that can be gentle, healing, & loving">
<meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/meta.png">

<!-- TODO -->
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://lovelanguages.melaniehoff.com/">
<meta property="twitter:title" content="digital love languages">
<meta property="twitter:description" content="A 10 weeks course exploring code as a practice that can be gentle, healing, & loving">
<meta property="twitter:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/meta.png">
</head>

<body>

	<div class="header-wrapper">
        <?php
            $accordionType = 'Tutorial';
            $accordionUrl = '/lessons';
            $accordionPosition = 'top-left';
            $accordionTitle = 'Lessons';
            include(locate_template('accordion.php'));
        ?>
        <?php
            $accordionTitle = 'Blog';
            $accordionType = 'Blog';
            $accordionUrl = '/blog';
            $accordionPosition = 'top-right';
            include(locate_template('accordion.php'));
        ?>
	</div>

	<div class="header-wrapper-mobile broider ">
		<a class="header-link" href="/">Home</a>
			<a class="header-link" href="/lessons">Lessons</a>
			<a class="header-link" href="/blog">Blog</a>
			<a class="header-link" href="/library">Library</a>
	</div>
