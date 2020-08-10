<!DOCTYPE html>
<html>
<head>
	<title>
		<?php wp_title( '|', true, 'right' ); ?>

        <?php bloginfo('name'); ?>
	</title>
	<meta http-equiv="Content-Type" content="text/shtml" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="author" content="Sunshine Group">
  	<meta property="og:title" content="Sunshine Group" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Quần thể nghỉ dưỡng phức hợp, hội tụ mọi hoạt động du lịch, diện cho tất cả những gì hiện đại và siêu phong cách, từ các dịch vụ nghỉ dưỡng, ăn uống, mua sắm đến vui chơi giải trí thời thượng và sang chảnh, thỏa mãn mọi giác quan và cung bậc cảm xúc của khách du lịch." />
	<meta property="og:url" content="http://goldenriver.sunshinegroup.vn/" />
	<meta property="og:image" content="http://goldenriver.sunshinegroup.vn/wp-content/themes/goldsun/assets/images/home/banner-1-1.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="1920" />
	<meta property="og:image:height" content="1080" />
	<meta property="og:image:alt" content="Sunshine Group" />

	<link rel="shortcut icon" href="<?php echo bloginfo('template_url')?>/assets/images/trang-chu/logo.ico">
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!--	<link rel="stylesheet" href="--><?php //echo bloginfo('template_url')?><!--/assets/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/bootstrap/css/bootstrap-custom.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/style-page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/single.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/global.css">
	
	<script src="<?php echo bloginfo('template_url')?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_url')?>/assets/bootstrap/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/jquery.fancybox.min.css" />
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/jquery.fancybox.min.js"></script>
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/theme.js"></script>

  	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/swiper/swiper.min.css">
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/swiper/swiper.min.js"></script>

  	<!-- <script src="<?php echo bloginfo('template_url')?>/assets/bower_components/enjoyhint/enjoyhint.min.js"></script>
  	<link href="<?php echo bloginfo('template_url')?>/assets/bower_components/enjoyhint/enjoyhint.css" rel="stylesheet">
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/imagesloaded.pkgd.min.js"></script>
  	<script src="<?php echo bloginfo('template_url')?>/assets/js/masonry.pkgd.min.js"></script> -->


	<?php wp_head();?>

</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5P3KRS"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


<header>
	<div class="header-row">
		<div class="wrap-row">
			<div class="header-box">
				<div class="header-logo">
					<a href="<?php echo get_bloginfo( 'wpurl' );?>">
					  <img src="<?php echo bloginfo('template_url')?>/assets/images/trang-chu/logo.png" alt="trang chủ" />
					</a>
				</div>

				<div class="header-menu menu-1">
					<?php wp_nav_menu(array('container'=>false,'menu' => 'primary-1','menu_class'=>'nav'));?>
				</div>

				<div class="header-mobile">
					<a href="tel:18006258"><i class="glyphicon glyphicon-earphone"></i> 18006258</a>
				</div>

			</div>
		</div>
	</div>

	<div class="social">
	    <a href="#" class="item">
	      <img src="<?php echo bloginfo('template_url')?>/assets/images/home/fb-icon.png">
	    </a>
	    <a href="#" class="item popup-regis">
	      <img src="<?php echo bloginfo('template_url')?>/assets/images/home/mail-icon.png">
	    </a>
	</div>

	

</header>