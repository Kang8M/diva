<!DOCTYPE html>
<html>
<head>
	<title>
		<?php wp_title( '|', true, 'right' ); ?>

        <?php bloginfo('name'); ?>
	</title>
	<meta http-equiv="Content-Type" content="text/shtml" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="author" content="TAT">
	<meta name="description" content="<?php echo get_field('header_meta_description', 'option');?>"/>
	<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
	<link rel="canonical" href="<?php echo get_field('header_link_canonical', 'option');?>" />
  	<meta property="og:title" content="<?php echo get_field('header_og_title', 'option');?>" />
	<meta property="og:type" content="<?php echo get_field('header_og_type', 'option');?>" />
	<meta property="og:description" content="<?php echo get_field('header_og_description', 'option');?>" />
	<meta property="og:url" content="<?php echo get_field('header_og_url', 'option');?>" />
	<meta property="og:image" content="<?php echo get_field('header_og_images', 'option')['url'];?>" />
	<meta property="og:image:type" content="<?php echo get_field('header_og_images_type', 'option');?>" />
	<meta property="og:image:width" content="<?php echo get_field('header_og_images_width', 'option');?>" />
	<meta property="og:image:height" content="<?php echo get_field('header_og_images_height', 'option');?>" />
	<meta property="og:image:alt" content="<?php echo get_field('header_og_images_alt', 'option');?>" />

	<link rel="shortcut icon" href="<?php echo get_field('shortcut_icon', 'option')['url'];?>">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/bootstrap/css/bootstrap.min.css">
<!--	<link rel="stylesheet" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/jquery.bxslider.css">-->
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/layout.css">-->
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/style.css">-->
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/single.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/responsive.css">

	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/slick-theme.css">

<!--	<script src="--><?php //echo bloginfo('template_url')?><!--/assets/js/jquery.min.js"></script>-->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo bloginfo('template_url')?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo bloginfo('template_url')?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/jquery.fancybox.min.css" />
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/jquery.fancybox.min.js"></script>
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/theme.js"></script>

<!--  	<link rel="stylesheet" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/swiper/swiper.min.css">-->
<!--  	<script src="--><?php //echo bloginfo('template_url')?><!--/assets/js/swiper/swiper.min.js"></script>-->

  	<!-- <script src="<?php echo bloginfo('template_url')?>/assets/bower_components/enjoyhint/enjoyhint.min.js"></script>
  	<link href="<?php echo bloginfo('template_url')?>/assets/bower_components/enjoyhint/enjoyhint.css" rel="stylesheet">
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/imagesloaded.pkgd.min.js"></script>
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/masonry.pkgd.min.js"></script> -->


	<?php wp_head();?>

</head>
<body>

<header>
	<div class="header__contain container">
		<div class="header__item">
			<div class="header__brand">
				<a href="<?php echo get_bloginfo( 'wpurl' );?>" class="d--block">
					<img src="<?php echo get_field('header_logo', 'option')['url'];?>" alt="Visa-logo">
				</a>
			</div>
			<div class="header__navbar dt--none">
				<?php wp_nav_menu( array( 'menu' => 'primary-1', 'container_class' => 'main-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
		</div>
		<div class="header__item">
			<div class="header__btn">
				<a class="header__btn-call main--background border--50 d--block text--center" href="tel:1900 6689" target="_blank">
					<i class="fa fa-phone  text--light"></i>
				</a>
			</div>
			<div class="header__btn">
				<button class="header__btn-register btn main--background text--upcase text--light" id="btnHeaderRegister">
					Đăng ký ngay
				</button>
			</div>
			<div class="header__btn">
				<button class="header__btn-menu btn" id="btnHeaderMenu">
					<i class="fa fa-info-circle dp--none" aria-hidden="true"></i>
					<i class="fa fa-search d--none dp--block" aria-hidden="true"></i>
				</button>
			</div>
			<div class="header__btn">
				<button class="header__btn-menu btn navbar-toggle" id="navbar-toggle">
					<i class="fa fa-bars d--none dp--block" aria-hidden="true"></i>
				</button>
				<nav class="d--none">
					<?php wp_nav_menu( array( 'menu' => 'primary-1', 'container_class' => 'main-menu-container', 'menu_class' => 'nav webexp24h_menu navbar-nav', 'menu_id' => 'webexp24h_menu' ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</header>