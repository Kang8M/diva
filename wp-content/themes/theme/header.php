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

	<link rel="shortcut icon" href="http://localhost/diva/wp-content/uploads/2020/08/ioc.ico">

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
				<a href="#" class="d--block">
					<img src="http://localhost/diva/wp-content/uploads/2020/08/Visa-logo_CMYK-01.png" alt="Visa-logo">
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
					<div class="menu-main-menu-container">
						<ul id="webexp24h_menu" class="nav webexp24h_menu navbar-nav">
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1362" id="va_item0">
								<a class="dropdown-toggle">Giới thiệu <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9238" id="va_item1"><a href="https://vienthammydiva.vn/ve-chung-toi/">Về DIVA Group</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-757" id="va_item2"><a href="https://vienthammydiva.vn/cong-nghe-tham-my/">Về Công Nghệ</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-756" id="va_item3"><a href="https://vienthammydiva.vn/co-so-vat-chat-cua-diva-spa/">Về Cơ Sở Vật Chất</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-754" id="va_item4"><a href="https://vienthammydiva.vn/quy-trinh-tham-my-tai-diva-spa/">Về Quy Trình Điều Trị</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-755" id="va_item5"><a href="https://vienthammydiva.vn/doi-ngu-bac-si-cua-diva-spa/">Về Đội Ngũ Bác Sĩ</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2466" id="va_item6">
								<a class="dropdown-toggle">PHUN THÊU THẨM MỸ <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1369" id="va_item7"><a href="https://vienthammydiva.vn/phun-may/">Phun Mày</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2465" id="va_item8"><a href="https://vienthammydiva.vn/phun-moi/">Phun Môi</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-791" id="va_item9">
								<a href="https://vienthammydiva.vn/dich-vu-cua-vien-tham-my-diva/" class="dropdown-toggle">ĐIỀU TRỊ DA <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2469" id="va_item10"><a href="https://vienthammydiva.vn/dieu-tri-mun-chuyen-sau/">Điều Trị Mụn</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2467" id="va_item11"><a href="https://vienthammydiva.vn/dieu-tri-nam/">Điều Trị Nám – Tàn Nhang</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2499" id="va_item12"><a href="https://vienthammydiva.vn/dieu-tri-seo/">Điều Trị Sẹo Rỗ</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-7695" id="va_item13"><a href="https://vienthammydiva.vn/xoa-not-ruoi-an-toan/">Xóa Nốt Ruồi</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-7756" id="va_item14"><a href="https://vienthammydiva.vn/xoa-xam/">Xóa Xăm</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2470" id="va_item15">
								<a class="dropdown-toggle">CHĂM SÓC DA <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1228" id="va_item16"><a href="https://vienthammydiva.vn/cham-soc-da-chuyen-sau/">Chăm Sóc Da Chuyên Sâu</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2471" id="va_item17"><a href="https://vienthammydiva.vn/vi-kim-tao-bien/">Vi Kim Tảo Biển</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-7952" id="va_item18"><a href="https://vienthammydiva.vn/ban-sang-ha/">Bắn Sáng HA</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2473" id="va_item19"><a href="https://vienthammydiva.vn/tam-trang-phi-thuyen/">Tắm Trắng Phi Thuyền</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2474" id="va_item20"><a href="https://vienthammydiva.vn/triet-long">Triệt Lông Super Nano Light</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2500" id="va_item21"><a href="https://vienthammydiva.vn/phu-bong-nano/">Phủ Bóng NaNo</a></li>
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1372" id="va_item22"><a href="https://vienthammydiva.vn/giam-beo/">Giảm Mỡ Lipo Theramax Plus</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3714" id="va_item23"><a href="https://vienthammydiva.vn/tin-tuc/">Tin tức</a></li>
							<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-7766" id="va_item24">
								<a href="https://vienthammydiva.vn/kien-thuc/" class="dropdown-toggle">Kiến Thức <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12156" id="va_item25"><a href="https://vienthammydiva.vn/phun-mi/">Phun mí</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16733" id="va_item26"><a href="https://vienthammydiva.vn/kien-thuc/dam-moi/">Dặm Môi</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7768" id="va_item27"><a href="https://vienthammydiva.vn/plasma/">Công nghệ Plasma</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7767" id="va_item28"><a href="https://vienthammydiva.vn/kien-thuc/cham-soc-da-diva-luxury/">Chăm Sóc Da</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7771" id="va_item29"><a href="https://vienthammydiva.vn/kien-thuc/dieu-tri-da-diva-luxury/">Điều Trị Da</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8063" id="va_item30"><a href="https://vienthammydiva.vn/kien-thuc/dia-chi-lam-dep/">Địa Chỉ Làm Đẹp</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8216" id="va_item31"><a href="https://vienthammydiva.vn/kien-thuc/cong-nghe-lam-dep/">Công Nghệ Làm Đẹp</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9313" id="va_item32"><a href="https://vienthammydiva.vn/kien-thuc/corona/">Corona</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12704" id="va_item33">
								<a class="dropdown-toggle">Đào tạo &amp; Tuyển dụng <span class="extra_menu"><i class="fa fa-caret-down "> </i></span> </a>
								<ul class="sub-menu dropdown-menu">
									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12412" id="va_item34"><a href="https://vienthammydiva.vn/dao-tao/">Đào Tạo</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2459" id="va_item35"><a href="https://vienthammydiva.vn/chuoi-co-so/">LIÊN HỆ</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>