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
    <script src="<?php echo bloginfo('template_url')?>/assets/js/theme.js"></script>


    <?php wp_head();?>

</head>

<body>
    <header class="header p-12">

        <div class="header__contain container">

            <div class="header__item container">

                <a class="header__brand d--inline-block logo" style="width:110px;" href=""><img src="http://localhost/diva/wp-content/uploads/2020/08/Visa-logo_CMYK-01.png">

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
        <div class="banner__PC dt--none positon--relative">
            <img class="d--block" src="<?php echo bloginfo('template_url')?>/assets/images/banner.jpg" alt="banner-diva-phun-may">
            <div class="banner__PC-content">
                <img class="d--block fade-in-fwd" src="<?php echo bloginfo('template_url')?>/assets/images/banner-content.png" alt="banner-diva-phun-may-content">
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
            <img class="d--block" src="<?php echo bloginfo('template_url')?>/assets/images/banner-mb.jpg" alt="banner-diva-phun-may">
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
        <div class="why post-khoa-hoc">
            <h3 class="discount__title title--section text--center text--upcase">ĐA DẠNG CÁC KHÓA HỌC TẠI DIVA ACADEMY</h3>
            <div class="why__list ">
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="why__item  box-shadow m-15" style="width: 100%; display: inline-block;">
                            <div class="why__item-img max--height--240"> <img src="http://localhost/diva/wp-content/uploads/2020/08/spa-basic.jpg" alt="khóa học spa cơ bản"> </div>
                            <div class="why__item-contain  p-30">
                                <p>khóa học spa cơ bản</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="attention__list row-divide max--width--1000 myt-10">
                <div class="container">
                    <p class="mb--10 text--center font-bolder">
                        Ngoài ra còn có rất nhiều khóa học với mức phí phù hợp dành cho mọi đối tượng học viên khác nhau.<span class="d--block">Để được tư vấn chi tiết về khóa học và hưởng ƯU ĐÃI vui lòng:</span>
                    </p>
                    <div class="col-divide-12 col-divide-sm-12 btn__seen center--center">
                        <button class="header__register-btn btn main--background text--light text--upcase border--4 mb--47" id="btn-register-course">ĐĂNG Ký khóa học</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="py-30" id="service">
            <div class="container">
                <h3 class="discount__title title--section text--center text--light text--upcase"> "ĐỔI ĐỜI" TỪ DIVA ACADEMY</h3>
                <div class="attention__list row-divide max--width--1000 myt-10">
                    <div class="col-divide-6 col-divide-md-12 py-30">
                        <div class="positon--relative">
                            <img src="<?php echo bloginfo('template_url')?>/assets/images/border.png" class="positon--relative bg-dao-tao">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/dao-tao.jpg" class="positon--ab border-dao-tao">
                        </div>
                    </div>

                    <div class="col-divide-6 col-divide-md-12 py-30" id="content-center">

                        <div class="customer__item">

                            <h3 class="text--italic text--light">Đem đến cơ hội việc làm <div>lâu dài cho hàng ngàn học viên</div></h3>

                            <p class="text--center--t">
                            </p><ul class="intro text--light">
                                <li><div>Cơ hội việc làm <b class="text--upcase">hấp dẫn</b></div></li>
                                <li><div>Thời gian học <b class="text--upcase">NGẮN HẠN</b></div></li>
                                <li><div>Thu nhập <b class="text--upcase">KHÔNG GIỚI HẠN</b></div></li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="truonghop" id="about-diva">
        <div class="py-30">
            <div class="container">
                <h3 class="discount__title title--section text--center text--upcase"> tại sao nên chọn diva academy ?</h3>
                <div class="row-divide mobile-hidden">
                    <div class="why__item col-divide-4 col-divide-lg-12">
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_1-1.png" alt="QUY MÔ RỘNG KHẮP">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Là hệ thống thẩm mỹ lớn nhất việt nam hiện nay</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/doi_ngu.png" alt="Đội ngũ giảng viên giỏi, giàu kinh nghiệm">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Đội ngũ giảng viên giỏi, giàu kinh nghiệm</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_2-1.png" alt="NHÂN SỰ CHẤT LƯỢNG">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Được cấp bằng chính quy, giá trị vinh viễn</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/ketnoi.png" alt="QUY MÔ RỘNG KHẮP">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">80% thực hành 20% lý thuyết</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/ho_tro_vieclam.png" alt="QUY MÔ RỘNG KHẮP">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Hỗ trợ việc làm sau tốt nghiệp</p>
                            </div>
                        </div>
                    </div>

                    <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                        <div class="why__img pos positon--relative" id="whyImg">
                            <img class="border--50" src="http://localhost/diva/wp-content/uploads/2020/08/diva-55.jpg" alt="why-media">
                            <div class="cover-play-icon">
                                <i class="fa fa-play-circle-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="why__item col-divide-4 col-divide-lg-12">
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_4-1.png" alt="CÔNG NGHỆ HIỆN ĐẠI">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Giáo trình theo chuẩn quốc tế</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/dayhoc.png" alt="PHONG CÁCH CHUYÊN NGHIỆP">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Thực hành cn tiên tiến ngành spa</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_6-1.png" alt="THỜI GIAN LINH HOẠT">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Thời gian học chủ động, linh hoạt</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/giangvien-hd.png" alt="THỜI GIAN LINH HOẠT">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Giảng viên hướng dẫn 1-1</p>
                            </div>
                        </div>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/vitr-i.png" alt="THỜI GIAN LINH HOẠT">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Tuỳ chọn địa điểm theo tỉnh, thành</p>
                            </div>
                        </div>
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
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_1-1.png" alt="QUY MÔ RỘNG KHẮP">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Là hệ thống thẩm mỹ lớn nhất việt nam hiện nay</p>
                            </div>
                        </div>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_4-1.png" alt="QUY MÔ RỘNG KHẮP">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Giáo trình theo chuẩn quốc tế</p>
                            </div>
                        </div>
                        <div class="col-divide-6 center--center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/doi_ngu.png" alt="Đội ngũ giảng viên giỏi, giàu kinh nghiệm">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Đội ngũ giảng viên giỏi, giàu kinh nghiệm</p>
                            </div>
                        </div>
                        <div class="col-divide-6 center--center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/dayhoc.png" alt="Thực hành cn tiên tiến ngành spa">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Thực hành cn tiên tiến ngành spa</p>
                            </div>
                        </div>
                        <div class="col-divide-6 center--center">
                            <div class="why__item-img  why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_2-1.png" alt="Được cấp bằng chính quy, giá trị vinh viễn">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Được cấp bằng chính quy, giá trị vinh viễn</p>
                            </div>
                        </div>
                        <div class="col-divide-6 center--center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_6-1.png" alt="Thời gian học chủ động, linh hoạt">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Thời gian học chủ động, linh hoạt</p>
                            </div>
                        </div>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img  why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/ketnoi.png" alt="80% thực hành 20% lý thuyết">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">80% thực hành 20% lý thuyết</p>
                            </div>
                        </div>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/giangvien-hd.png" alt="Đội ngũ giảng viên giỏi, giàu kinh nghiệm">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Giảng viên hướng dẫn 1 - 1</p>
                            </div>
                        </div>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img  why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/ho_tro_vieclam.png" alt="Hỗ trợ việc làm sau tốt nghiệp">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Hỗ trợ việc làm sau tốt nghiệp</p>
                            </div>
                        </div>
                        <div class="col-divide-6 fix-center">
                            <div class="why__item-img why--icon fix-center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/vitr-i.png" alt="Giảng viên hướng dẫn 1-1">
                            </div>
                            <div class="why__item-content fix-center">
                                <h6 class="mc-mgb why__item-title title--item"></h6>
                                <p class="why__item-des">Tùy chọn địa điểm theo tỉnh, thành</p>
                            </div>
                        </div>

                        <div class="why__play col-divide-lg-12 center--center py-50 fix-padding-mobile">
                            <div class="why__img pos positon--relative txt-center" id="whyImg2">
                                <img class="border--50" src="http://localhost/diva/wp-content/uploads/2020/08/diva-55.jpg" alt="why-media">
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

        <div class="container">

            <h3 class="text--center experience__customer-title">TRẢI NGHIỆM CỦA CÁC HỌC VIÊN TẠI DIVA ACADEMY</h3>

            <div class="row-divide mobile-hidden">

                <div class="col-divide-3 col-divide-lg-12">

                    <div class="experience__customer-img">

                        <img src="http://localhost/diva/wp-content/uploads/2020/08/review-2-1.jpg">

                    </div>

                    <div class="name--customer">

                    <span>

                        THU HÀ

                    </span>

                        <p>Việt Kiều Mỹ</p>

                    </div>

                    <div class="experience__customer-content">
                        <p>Trước khi nhập cảnh qua Mỹ sống với chồng, cô đã tham gia lớp học Phun thêu cấp tốc tại Diva. Dù khá khó khăn để khởi nghiệp nơi đất khách nhưng nhờ cứng tay nghề cô đã được rất nhiều khách hàng ủng hộ.</p>
                    </div>

                </div>

                <div class="col-divide-3 col-divide-lg-12">

                    <div class="experience__customer-img">

                        <img src="http://localhost/diva/wp-content/uploads/2020/08/reivew-3.jpg">

                    </div>

                    <div class="name--customer">

                    <span>

                        MY LAN

                    </span>

                        <p>Thủ Dầu Một, Bình Dương</p>

                    </div>

                    <div class="experience__customer-content">

                        <p>My Lan rất vui vì không chỉ được học nghề "HOT" mà còn được làm quen thêm với những người bạn mới, giảng viên Thẩm mỹ tại Diva cũng rất tận tâm chỉ bảo tận tình. Thật tuyệt!</p>

                    </div>

                </div>

                <div class="col-divide-3 col-divide-lg-12">

                    <div class="experience__customer-img">

                        <img src="http://localhost/diva/wp-content/uploads/2020/08/review-1-1.jpg">

                    </div>

                    <div class="name--customer">

                    <span>

                        HẠ VY

                    </span>

                        <p>Đồng Khời, Bến Tre</p>

                    </div>

                    <div class="experience__customer-content">

                        <p>Sau khi tham gia khóa học nghề Spa tại Học viện Diva Academy, Hạ Vy đã được giữ lại làm việc tại Diva. Hạ vy rất vui vì môi trường làm việc chuyên nghiệp, thân thiện, thu nhập ổn định.</p>

                    </div>

                </div>

                <div class="col-divide-3 col-divide-lg-12">

                    <div class="experience__customer-img">

                        <img src="http://localhost/diva/wp-content/uploads/2020/08/review-f.jpg">

                    </div>

                    <div class="name--customer">

                    <span>

                        TRẦN PHƯƠNG

                    </span>

                        <p>Kế toán</p>

                    </div>

                    <div class="experience__customer-content">

                        <p>Viện thẩm mỹ Diva là địa chỉ chăm sóc sắc đẹp yêu thích của Phương. Đặc biệt, Phương cảm thấy rất hài lòng với thái độ phục vụ chuyên nghiệp và các phương pháp làm đẹp tiên tiến luôn được cập nhật mới tại đây.</p>

                    </div>

                </div>

            </div>

            <!-- only Mobile -->
            <div class="only-mobile text--center">
                <div class="row-divide">
                    <div class="col-divide-6">
                        <div class="experience__customer-img">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/review-2-1.jpg">
                        </div>
                        <div class="name--customer">
                            <span>THU HÀ</span>
                            <p>Việt Kiều Mỹ</p>
                        </div>
                        <div class="experience__customer-content">

                            <p>Trước khi nhập cảnh qua Mỹ sống với chồng,
                                <span id="dots">...</span><span id="more">cô đã tham gia lớp học Phun thêu cấp tốc tại Diva. Dù khá khó khăn để khởi nghiệp nơi đất khách nhưng nhờ cứng tay nghề cô đã được rất nhiều khách hàng ủng hộ.</span>
                                <button onclick="myFunction()" id="myBtnReadmore"> Xem thêm</button></p>
                        </div>
                    </div>
                    <div class="col-divide-6">

                        <div class="experience__customer-img">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/reivew-3.jpg">
                        </div>
                        <div class="name--customer"> <span>MY LAN</span>
                            <p>Thủ Dầu Một, Bình Dương</p>
                        </div>
                        <div class="experience__customer-content">
                            <p>My Lan rất vui vì không chỉ được học nghề "HOT"
                                <span id="dots2">...</span><span id="more2">
		mà còn được làm quen thêm với những người bạn mới, giảng viên Thẩm mỹ tại Diva cũng rất tận tâm chỉ bảo tận tình. Thật tuyệt!</span>
                                <button onclick="myFunction2()" id="myBtnReadmore2">Xem thêm</button></p>
                        </div>

                    </div>

                    <div class="col-divide-6">
                        <div class="experience__customer-img">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/review-1-1.jpg"></div><div class="name--customer"> <span> HẠ VY </span><p>Đồng Khời, Bến Tre</p></div>
                        <div class="experience__customer-content"><p>Sau khi tham gia khóa học nghề Spa tại Học viện Diva
                                <span id="dots3">...</span><span id="more3">
					Academy, Hạ Vy đã được giữ lại làm việc tại Diva. Hạ vy rất vui vì môi trường làm việc chuyên nghiệp, thân thiện, thu nhập ổn định.</span>
                                <button onclick="myFunction3()" id="myBtnReadmore3">Xem thêm</button>
                            </p></div>
                    </div>
                    <div class="col-divide-6">
                        <div class="experience__customer-img"> <img src="http://localhost/diva/wp-content/uploads/2020/08/review-f.jpg"></div>
                        <div class="name--customer"> <span> TRẦN PHƯƠNG </span><p>Kế toán</p></div><div class="experience__customer-content">
                            <p>Viện thẩm mỹ Diva là địa chỉ chăm sóc sắc đẹp yêu thích
                                <span id="dots4">...</span><span id="more4">
					của Phương. Đặc biệt, Phương cảm thấy rất hài lòng với thái độ phục vụ chuyên nghiệp và các phương pháp làm đẹp tiên tiến luôn được cập nhật mới tại đây.
					</span>
                                <button onclick="myFunction4()" id="myBtnReadmore4">Xem thêm</button>
                            </p></div>
                    </div>
                </div>
            </div>
            <!--End onlymobile-->
        </div>

    </section>

    <section class="why my-20" id="media">
        <h3 class="why__title text--center text--upcase title--section">DIVA ACADEMY - ĐỊA CHỈ ĐÀO TẠO HÀNG NGÀN<span class="d--block">CHUYÊN VIÊN THẨM MỸ </span></h3>
        <div class="why__list">
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="why__item  m-15" style="width: 100%; display: inline-block;">
                        <div class="why__item-img max--height--240">
                            <img src="http://localhost/diva/wp-content/uploads/2020/08/diva-5.jpg" alt="doi-ngu-bac-si">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="signup-class">
        <div class="recruitment__register" id="formEducation">
            <div class="recruitment__register-imgbackground">
                <img src="http://localhost/diva/wp-content/uploads/2020/08/background2.jpg" alt="Đào tạo tuyển dụng">
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
                            <p class="text-info-form text--center text--light mt-25">Website: www.vienthammydiva.vn<span class="d--block"></span>Hỗ trợ nhanh: 1900 6689</p>
                        </div>
                        <p class="d--none infoVal text--yellow">Bạn chưa điền đầy đủ thông tin</p>
                    </div>
                </form>

            </div>
            <div class="over-lay-top"><h3 class="text--center resource_customer-title">Học viện DIVA ACADEMY<span class="d--block"></span>
                    Hệ thống chuỗi đào tạo thẩm mỹ lớn nhất VIỆT NAM</h3></div>
        </div>
    </section>

    <footer class="footer footer--background" id="brand">
        <section class="footer__phun-may py-30">
            <div class="container">
                <div class="shorted">
                    <h3 class="title--section text--upcase text--center text--light">HỆ THỐNG VIỆN THẨM MỸ DIVA</h3>
                    <div class="row-divide">
                        <div class="col-divide-6 mb--17 col-divide-lg-12 style--borderfooter">
                            <div class="row-divide">
                                <div class="col-divide-8 col-divide-lg-12">
                                    <div class="footer__valantine-name-branch">
                                        <h3 class="title--item text--upcase text--bold text--light">TP. HỒ CHÍ MINH - CƠ SỞ 1</h3>
                                    </div>
                                    <div class="footer__valantine-name-dc text--light">
                                        <p class="text--center--t">Số 9 Lý Thường Kiệt, Thị Trấn Hóc Môn,
                                            Huyện Hóc Môn, TP. HCM</p>
                                    </div>
                                </div>
                                <div class="col-divide-4 col-divide-lg-12">
                                    <div class="footer__valantine-icon text--center">
                                        <!-- <i class="fab fa-facebook-square icon text--light"></i> -->
                                    </div>
                                    <div class="footer__valantine-telephone text--center text--light">
                                        1900 6689
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-divide-6 mb--17 col-divide-lg-12 style--borderfooter">
                            <div class="row-divide">
                                <div class="col-divide-8 col-divide-lg-12">
                                    <div class="footer__valantine-name-branch">
                                        <h3 class="title--item text--upcase text--bold text--light">TP. HỒ CHÍ MINH - CƠ SỞ 2</h3>
                                    </div>
                                    <div class="footer__valantine-name-dc text--light">
                                        <p class="text--center--t">366A4 Phan Văn Trị, P. 5 , Q. Gò Vấp, TP. HCM
                                            (Kế bên siêu thị E Mart Gò Vấp)</p>
                                    </div>
                                </div>
                                <div class="col-divide-4 col-divide-lg-12">
                                    <div class="footer__valantine-icon text--center">

                                    </div>
                                    <div class="footer__valantine-telephone text--center text--light">
                                        1900 6689
                                    </div>
                                </div>
                            </div>
                        </div>
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