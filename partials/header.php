<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo page_title('Page can’t be found'); ?> &mdash; <?php echo site_name(); ?></title>
		<meta name="description" content="<?php echo site_description(); ?>">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="<?php echo theme_url('assets/css/reset.css'); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/styles.css'); ?>" type="text/css">
	</head>
	<body>

		<h1><?php echo page_title('Page can’t be found'); ?></h1>

		<?php if(has_menu_items()): ?>
		<nav role="navigation"><?php echo menu_render(); ?></nav>
		<?php endif; ?>

		<?php theme_include('partials/search'); ?>