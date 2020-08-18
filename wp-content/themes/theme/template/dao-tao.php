<?php
/*
    Template Name: Đào tạo
*/
?>
<!DOCTYPE html>
<html style="margin: 0px !important;">
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

    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/responsive-daotao.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/pstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/global-daotao.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/thoai.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/marcus.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/thoai_responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/responsive-daotao-2.css">


    <!--	<script src="--><?php //echo bloginfo('template_url')?><!--/assets/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?php echo bloginfo('template_url')?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo bloginfo('template_url')?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/jquery.fancybox.min.css" />
    <script src="<?php echo bloginfo('template_url')?>/assets/js/jquery.fancybox.min.js"></script>
<!--    <script src="--><?php //echo bloginfo('template_url')?><!--/assets/js/theme.js"></script>-->


    <?php wp_head();?>

</head>

<body>
    <header class="header p-12">

        <div class="header__contain container">

            <div class="header__item container">

                <a class="header__brand d--inline-block logo" style="width:110px;" href=""><img src="<?php echo get_field('header_logo', 'option')['url'];?>">

                </a>

                <ul class="header__navbar ml-6px dp--none container">
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#resource">khóa học</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#service">ưu đãi</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#about-diva">Diva academy</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#recruiment">Trải nghiệm</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#media">Hình ảnh / Video</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#formEducation">đăng ký học</a></li>
                    <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="#brand">Chuỗi chi nhánh</a></li>
                </ul>
                <a class="phone_btn btn main--background border--50" href="tel:1900633496"><i style="color:#fff;" class="fas fa-phone"></i>  </a>
                <button class="header__register-btn btn main--background text--light text--upcase border--4" id="btn-header-Signup"> Đăng ký ngay</button>
            </div>




            <button id="btn--Menu"></button>

        </div>



        <div class="mobile-Menu">

            <div class="container">

                <nav role="navigation">
                    <div id="menuToggle">

                        <ul id="menu">
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#resource">khóa học</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#giftcus">ưu đãi</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#about-diva">Diva academy</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#recruiment">Trải nghiệm</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#media">Hình ảnh / Video</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#formEducation">đăng ký học</a></li>
                            <li class="header__navbar-item d--inline-block p-12"><a class="text--upcase" href="https://vienthammydiva.vn/dao-tao/#brand">Chuỗi chi nhánh</a></li>
                        </ul>

                    </div>

                </nav>

            </div>

        </div>

    </header>

    <section class="banner">
        <?php
            $a = get_field('daotao_row_1', 'option');
        ?>
        <div class="banner__PC dt--none positon--relative">
            <img class="d--block" src="<?php echo $a['images_1']['url']?>" alt="banner-diva-phun-may">
            <div class="banner__PC-content">
                <img class="d--block fade-in-fwd" src="<?php echo $a['images_2']['url']?>" alt="banner-diva-phun-may-content">
            </div>
            <div class="banner__PC_content_right">
                <img class="d--block fade-in-fwd" src="<?php echo bloginfo('template_url')?>/assets/images/fix-pare.png" alt="banner-diva-phun-may-content">
                <!-- form register-->
                <div class="form__signin form-rigister-banner fix-mobile" id="register-banner-form">
                    <div class="row-divide">
                        <div class="col-divide-6 col-divide-lg-12">
                            <form class="signin" name="formSignupKH-banner" method="GET" id="formSignupKH-banner">
                                <div class="form__input text--center">
                                    <input class="input border--3" name="hoTen" id="hoTen2" type="text" placeholder="Họ và tên">
                                    <p class="d--none nameVal text--light">Bạn chưa điền họ và tên</p>
                                    <p class="d--none phoneVal text--light">Bạn chưa điền số điện thoại</p>
                                </div>
                                <div class="form__input text--center">
                                    <input class="input" name="sdt" id="sdt2" type="text" placeholder="Số điện thoại">
                                    <input type="hidden" id="Dat_lichURL" class="" value="https://vienthammydiva.vn/dao-tao/" name="Dat_lichURL">
                                    <input type="hidden" id="ngay_dang_ky" class="" value="21:46 - 13/08/2020" name="ngay_lichURL">
                                    <input type="hidden" id="ghichu" class="" value="" name="ghichu">
                                </div>
                                <div class="style--button positon--relative">
                                    <button type="submit" id="btn-submit-banner" class="header__register-btn btn main--background text--upcase siz--button border--4">Đăng ký</button>
                                    <!--<div class="ping-btnSignUp ping text--center border--4"></div>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end form -->
            </div>
            <div class="row-divide">
                <div class="col-divide-3 col-divide-md-6 my--20">
                </div>
            </div>
        </div>
        <div class="banner__mb d--none dt--block positon--relative">
            <img class="d--block" src="<?php echo $a['image_mobile']['url']?>" alt="banner-diva-phun-may">
            <div class="banner__PC_content_right">
                <!-- form register-->
                <div class="form__signin form-rigister-banner fix-mobile" id="register-banner-form">
                    <div class="row-divide">
                        <div class="col-divide-12 col-divide-lg-12">
                            <form class="signin" name="formSignupKH-banner-mobile" method="GET" id="formSignupKH-banner-mobile">
                                <div class="form__input text--center">
                                    <input class="input border--3" name="hoTen" id="hoTen-m" type="text" placeholder="TÊN CỦA BẠN">
                                    <p class="d--none nameVal text--light">Bạn chưa điền họ và tên</p>
                                </div>
                                <div class="form__input text--center">
                                    <input class="input" name="sdt" id="sdt-m" type="text" placeholder="SỐ ĐIỆN THOẠI">
                                    <p class="d--none phoneVal text--light">Bạn chưa điền số điện thoại</p>
                                    <input type="hidden" id="Dat_lichURL" class="" value="https://vienthammydiva.vn/dao-tao/" name="Dat_lichURL">
                                    <input type="hidden" id="ngay_dang_ky" class="" value="21:46 - 13/08/2020" name="ngay_lichURL">
                                    <input type="hidden" id="ghichu" class="" value="" name="ghichu">
                                </div>
                                <div class="positon--relative text--center">
                                    <button type="submit" id="btn-submit-mobile" class="header__register-btn btn main--background text--upcase siz--button border--4">Đăng ký</button>
                                    <div class="ping-btnSignUp ping text--center border--4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end form -->
            </div>
        </div>
    </section>

    <section class="da-dang-khoa-hoc" id="resource">
        <?php
            $b = get_field('daotao_row_2', 'option');
        ?>
        <div class="why post-khoa-hoc">
            <h3 class="discount__title title--section text--center text--upcase"><?php echo $b['title']?></h3>
            <div class="why__list ">
                <?php
                    if(!empty($b['items'])) {
                    foreach ($b['items'] as $value) {
                ?>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15">
                            <div class="why__item-img max--height--240"> <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>"> </div>
                            <div class="why__item-contain  p-30">
                                <p><?php echo $value['title']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    } }
                ?>
            </div>
            <div class="attention__list row-divide max--width--1000 myt-10">
                <div class="container">
                    <p class="mb--10 text--center font-bolder">
                        <?php echo $b['content']?>
                    </p>
                    <div class="col-divide-12 col-divide-sm-12 btn__seen center--center">
                        <button class="header__register-btn btn main--background text--light text--upcase border--4 mb--47" id="btn-register-course">ĐĂNG Ký khóa học</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <?php
            $c = get_field('daotao_row_3', 'option');
        ?>
        <div class="py-30" id="service">
            <div class="container">
                <h3 class="discount__title title--section text--center text--light text--upcase"><?php echo $c['title']?></h3>
                <div class="attention__list row-divide max--width--1000 myt-10">
                    <div class="col-divide-6 col-divide-md-12 py-30">
                        <div class="positon--relative">
                            <img src="<?php echo bloginfo('template_url')?>/assets/images/border.png" class="positon--relative bg-dao-tao">
                            <img src="<?php echo $c['images']['url']?>" class="positon--ab border-dao-tao">
                        </div>
                    </div>

                    <div class="col-divide-6 col-divide-md-12 py-30" id="content-center">

                        <div class="customer__item">

                            <h3 class="text--italic text--light"><?php echo $c['content']['title']?></h3>

                            <p class="text--center--t">
                            </p><ul class="intro text--light">
                                <?php
                                    if(!empty($c['content']['items'])) {
                                    foreach ($c['content']['items'] as $value) {
                                ?>
                                <li><div><?php echo $value['content']?></div></li>
                                <?php
                                    } }
                                ?>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="truonghop" id="about-diva">
        <?php
            $d = get_field('daotao_row_4', 'option');
        ?>
        <div class="py-30">
            <div class="container">
                <h3 class="discount__title title--section text--center text--upcase"><?php echo $d['title']?></h3>
                <div class="row-divide mobile-hidden">
                    <div class="why__item col-divide-4 col-divide-lg-12">
                        <?php
                            if(!empty($d['box_row_1'])) {
                            foreach ($d['box_row_1'] as $value) {
                        ?>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['content']?>">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>
                    </div>

                    <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                        <div class="why__img pos positon--relative" id="whyImg" data-fancybox href="<?php echo $d['link_video']?>">
                            <img class="border--50" src="<?php echo $d['images']['url']?>" alt="why-media">
                            <div class="cover-play-icon">
                                <i class="fa fa-play-circle-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="why__item col-divide-4 col-divide-lg-12">
                        <?php
                            if(!empty($d['box_row_2'])) {
                            foreach ($d['box_row_2'] as $value) {
                        ?>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['content']?>">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>
                    </div>
                    <!--Button-->
                    <div class="col-divide-lg-12 txt-center">
                        <div class="container">
                            <div class="positon--relative">
                                <button class="main--background btn border--4 text--light z--1000" id="btn_submit_resource_desktop">Đăng ký khóa học</button>
                                <div class="ping-btnGift ping text--center border--4"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Only mobile -->
                <div class="only-mobile text--center">
                    <div class="row-divide">
                        <?php
                            if(!empty($d['box_row_1'])) {
                            foreach ($d['box_row_1'] as $value) {
                        ?>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['content']?>">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>

                        <?php
                            if(!empty($d['box_row_1'])) {
                            foreach ($d['box_row_1'] as $value) {
                        ?>
                        <div class="col-divide-6 center--center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['content']?>">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>
                        <div class="why__play col-divide-lg-12 center--center py-50 fix-padding-mobile">
                            <div class="why__img pos positon--relative txt-center" id="whyImg2"  data-fancybox href="<?php echo $d['link_video']?>">
                                <img class="border--50" src="<?php echo $d['images']['url']?>" alt="why-media">
                                <!--<div class="cover-play-icon">
                                <i class="far fa-play-circle"></i>
                              </div>-->
                            </div>
                        </div>
                        <div class="col-divide-lg-12 txt-center">
                            <div class="container">
                                <div class="positon--relative">
                                    <button class="main--background btn btn-why z--1000" id="btn_submit_resource">Đăng ký khóa học</button>
                                    <div class="ping-btnGift ping text--center border--4"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- end -->
            </div>

        </div>

    </section>

    <section class="experience__customer" id="recruiment">
        <?php
            $e = get_field('daotao_row_5', 'option');
        ?>
        <div class="container">

            <h3 class="text--center experience__customer-title"><?php echo $e['title']?></h3>

            <div class="row-divide mobile-hidden">
                <?php
                    if(!empty($e['items'])) {
                    foreach ($e['items'] as $value) {
                ?>
                <div class="col-divide-3 col-divide-lg-12">

                    <div class="experience__customer-img">

                        <img src="<?php echo $value['images']['url']?>">

                    </div>

                    <div class="name--customer">

                    <span>

                        <?php echo $value['title_1']?>

                    </span>

                        <p><?php echo $value['title_2']?></p>

                    </div>

                    <div class="experience__customer-content">
                        <p><?php echo $value['Content']?></p>
                    </div>

                </div>
                <?php
                    } }
                ?>
            </div>

            <!-- only Mobile -->
            <div class="only-mobile text--center">
                <div class="row-divide">
                    <?php
                        if(!empty($e['items'])) {
                        foreach ($e['items'] as $value) {
                    ?>
                    <div class="col-divide-6">
                        <div class="experience__customer-img">
                            <img src="<?php echo $value['images']['url']?>">
                        </div>
                        <div class="name--customer">
                            <span><?php echo $value['title_1']?></span>
                            <p><?php echo $value['title_2']?></p>
                        </div>
                        <div class="experience__customer-content">

                            <p><?php echo $value['Content']?></p>

                        </div>
                    </div>
                    <?php
                        } }
                    ?>
                </div>
            </div>
            <!--End onlymobile-->
        </div>

    </section>

    <section class="why my-20" id="media">
        <?php
            $f = get_field('daotao_row_6', 'option');
        ?>
        <h3 class="why__title text--center text--upcase title--section"><?php echo $f['title'];?></h3>
        <div class="why__list">
            <?php
                if(!empty($f['items'])) {
                foreach ($f['items'] as $value) {
            ?>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['images']['title']?>">
                        </div>
                    </div>
                </div>
            </div>
            <?php
                } }
            ?>
        </div>
    </section>

    <section class="signup-class">
        <?php
            $g = get_field('daotao_row_7', 'option');
        ?>
        <div class="recruitment__register" id="formEducation">
            <div class="recruitment__register-imgbackground">
                <img src="<?php echo $g['images']['url']?>" alt="Đào tạo tuyển dụng">
            </div>
            <div class="recruitment__container recruitment__register-form">
                <form method="GET" id="form-dk-tuyendung2">

                    <div class="row-divide">
                        <div class="col-divide-4 col-divide-lg-12">
                            <select class="re_name" name="urlcv" id="urlcv">
                                <option value="Phun thêu thẩm mỹ cơ bản">Phun thêu thẩm mỹ cơ bản</option>
                                <option value="Phun thêu thẩm mỹ chuyên nghiệp">Phun thêu thẩm mỹ chuyên nghiệp</option>
                                <option value="Kỹ thuật điêu khắc nâng cao">Khóa học kỹ thuật điêu khắc nâng cao</option>
                                <option value="Khóa học phun thêu cấp tốc">Khóa học phun thêu cấp tốc</option>
                                <option value="Khóa học Spa cơ bản">Khóa học Spa cơ bản</option>
                                <option value="Khóa học chăm sóc và điều trị da">Khóa học chăm sóc và điều trị da</option>
                                <option value="Khóa học Spa chuyên nghiệp">Khóa học Spa chuyên nghiệp</option>
                                <option value="Khóa học Spa cấp tốc">Khóa học Spa cấp tốc</option>
                                <option value="Khóa học" selected="">KHÓA HỌC</option>
                            </select>
                        </div>

                        <div class="col-divide-4 col-divide-lg-12">
                            <input class="re_name" type="text" name="hoTen" id="hoTen" placeholder="TÊN CỦA BẠN">
                        </div>
                        <div class="col-divide-4 col-divide-lg-12">
                            <input class="re_name" type="text" name="sdt" id="sdt" placeholder="SỐ ĐIỆN THOẠI">
                            <p class="d--none phoneVal text--yellow">Định dạng số điện thoại chưa đúng</p>
                        </div>
                        <div class="">
                            <input class="re_name" type="hidden" name="email" value="_" id="email" placeholder="EMAIL">
                        </div>
                    </div>

                    <div class="row-divide select__data">
                        <input type="hidden" name="urlcurrent" value="http://vienthammydiva.vn/dao-tao/">
                        <input type="hidden" name="datedk" value="13/08/2020">

                        <div class="col-divide-12 col-divide-sm-12 btn__seen center--center">
                            <button id="btn-submit-recruiment" type="submit" name="submitbutton" class="btn--sendform py-10">ĐĂNG KÝ KHÓA HỌC</button>
                        </div>
                        <div class="col-divide-12 col-divide-sm-12 btn__seen center--center">
                            <p class="text-info-form text--center text--light mt-25">Website: <?php echo $g['link_website']?><span class="d--block"></span>Hỗ trợ nhanh: <?php echo $g['phone']?></p>
                        </div>
                        <p class="d--none infoVal text--yellow">Bạn chưa điền đầy đủ thông tin</p>
                    </div>
                </form>

            </div>
            <div class="over-lay-top"><h3 class="text--center resource_customer-title"><?php echo $g['title']?></h3></div>
        </div>
    </section>

    <footer class="footer footer--background" id="brand">
        <section class="footer__phun-may py-30">
            <?php
                $h = get_field('daotao_row_8', 'option');
            ?>
            <div class="container">
                <div class="shorted">
                    <h3 class="title--section text--upcase text--center text--light"><?php echo $h['title']?></h3>
                    <div class="row-divide">
                        <?php
                            if(!empty($h['items'])) {
                            foreach ($h['items'] as $value) {
                        ?>
                        <div class="col-divide-6 mb--17 col-divide-lg-12 style--borderfooter">
                            <div class="row-divide">
                                <div class="col-divide-8 col-divide-lg-12">
                                    <div class="footer__valantine-name-branch">
                                        <h3 class="title--item text--upcase text--bold text--light"><?php echo $value['title']?></h3>
                                    </div>
                                    <div class="footer__valantine-name-dc text--light">
                                        <p class="text--center--t"><?php echo $value['location']?></p>
                                    </div>
                                </div>
                                <div class="col-divide-4 col-divide-lg-12">
                                    <div class="footer__valantine-icon text--center">
                                        <!-- <i class="fab fa-facebook-square icon text--light"></i> -->
                                    </div>
                                    <div class="footer__valantine-telephone text--center text--light">
                                        <?php echo $value['phone']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script type="text/javascript">
        function myFunction4() {
            var dots2 = document.getElementById("dots4");
            var moreText2 = document.getElementById("more4");
            var btnText2 = document.getElementById("myBtnReadmore4");

            if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText2.innerHTML = " Xem thêm";
                moreText2.style.display = "none";

            } else {
                dots2.style.display = "none";
                btnText2.innerHTML = "Rút gọn";
                moreText2.style.display = "inline";
            }
        }
        function myFunction3() {
            var dots2 = document.getElementById("dots3");
            var moreText2 = document.getElementById("more3");
            var btnText2 = document.getElementById("myBtnReadmore3");

            if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText2.innerHTML = " Xem thêm";
                moreText2.style.display = "none";

            } else {
                dots2.style.display = "none";
                btnText2.innerHTML = "Rút gọn";
                moreText2.style.display = "inline";
            }
        }
        function myFunction2() {
            var dots2 = document.getElementById("dots2");
            var moreText2 = document.getElementById("more2");
            var btnText2 = document.getElementById("myBtnReadmore2");

            if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText2.innerHTML = " Xem thêm";
                moreText2.style.display = "none";

            } else {
                dots2.style.display = "none";
                btnText2.innerHTML = "Rút gọn";
                moreText2.style.display = "inline";
            }
        }
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtnReadmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = " Xem thêm";
                moreText.style.display = "none";

            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Rút gọn";
                moreText.style.display = "inline";
            }
        }
        $(document).on('ready', function() {
            jQuery( "#btn--Menu" ).click(function() {
                jQuery( "#menuToggle" ).toggle();
            });
            $('.post-khoa-hoc .why__list').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
            $('#media .why__list').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>