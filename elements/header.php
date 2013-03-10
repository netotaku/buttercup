<?php 
	defined('C5_EXECUTE') or die("Access Denied."); 
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]>
	<html class="ie ie6" lang="<?php echo LANGUAGE?>"> 
<![endif]-->
<!--[if IE 7 ]>
	<html class="ie ie7" lang="<?php echo LANGUAGE?>"> 
<![endif]-->
<!--[if IE 8 ]>
	<html class="ie ie8" lang="<?php echo LANGUAGE?>"> 
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
	<html lang="<?php echo LANGUAGE?>"> 
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<?php 
			Loader::element('header_required'); 
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->getStyleSheet('css/layout.css')?>" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
		<!--[if lt IE 9 ]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body<?php echo $c->isEditMode() ? '' : ' class="edit-mode"' ?>>



		<header>
			<div class="container header">
				<div class="sixteen columns">
					<h1>
						<a href="/"><img src="/themes/buttercup/images/buttercup-uk.jpg"></a>
					</h1>
					<nav class="main-menu clearfix">
						<?php
							$bt = BlockType::getByHandle('autonav');
							$bt->controller->displayPages = 'top';
							$bt->controller->orderBy = 'display_asc';
							$bt->render('templates/header_menu');
						?>
					</nav>  <!-- // main menu -->
					<div class="mobile-menu-toggle">
						<i class="icon-reorder"></i>
					</div>
				</div>
			</div>
			<div class="mobile-menu">
				<div class="container header">
					<div class="sixteen columns">
						<nav>
							<?php
								$bt = BlockType::getByHandle('autonav');
								$bt->controller->displayPages = 'top';
								$bt->controller->orderBy = 'display_asc';				
								$bt->render('templates/header_menu');
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>  <!-- // header -->


