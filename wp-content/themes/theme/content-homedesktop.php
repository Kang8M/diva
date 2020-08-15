<section class="home--slider">
    <div class="slider_desktop">
        <?php
            $a = get_field('homepage_row_1', 'option');
            if(!empty($a)) {
            foreach ($a as $value) {
        ?>
                <div>
                    <img src="<?php echo $value['images']['url']; ?>" title="<?php echo $value['title']; ?>" alt="<?php echo $value['title']; ?>">
                    <div class="content-overlay text-banner-right"></div>
                </div>
        <?php } } ?>
    </div>
</section>

<section class="introduce my--50">
    <div class="introduce__contain container row-divide">
        <div class="introduce__item col-divide-6 col-divide-md-12">
            <?php
                $b = get_field('homepage_row_2', 'option');
            ?>
            <h2 class="introduce__title title--item"><?php echo $b['title_1']; ?></h2>
            <h4 class="introduce__item title--section font--weight--600 text--dark"><?php echo $b['title_2']; ?></h4>
            <p><?php echo $b['content']; ?></p>
            <div class="introduce__btn">
                <a class="btn main--background text--upcase text--light" href="<?php echo $b['link']; ?>">đọc tiếp</a>
            </div>
        </div>
        <div class="introduce__item col-divide-6 col-divide-md-12 myt--50">
            <div class="introduce__img">
                <img data-src="<?php echo $b['images']['url']; ?>" alt="introduce-img-1" src="<?php echo $b['images']['url']; ?>">
            </div>
        </div>
    </div>
</section>

<section class="ads">
    <?php
        $c = get_field('homepage_row_3', 'option');
    ?>
    <img src="<?php echo $c['url']; ?>" alt="ads-banner" class="dp--none">
    <img data-src="<?php echo $c['url']; ?>" alt="ads-banner" class="d--none dp--block" src="<?php echo $c['url']; ?>">
</section>

<section class="service desktop my--50" id="service">
    <?php
        $d = get_field('homepage_row_4', 'option');
    ?>
    <div class="service__contain container">
        <h3 class="service__title title--section text--upcase my--20 text--primary text--center"><?php echo $c['title']; ?></h3>
        <div class="service__list">
            <?php
                if(!empty($d['items'])) {
                    foreach ($d['items'] as $value) {
            ?>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover4" src="<?php echo $value['images']['url']?>" alt="service-img-1">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase"><?php echo $value['title']?></h4>
                        <p class="service__btn text--center"><a href="<?php echo $value['link']?>" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <?php
                } }
            ?>
        </div>
    </div>
</section>

<section class="service--details container--fluid mt--50">
    <?php
        $e = get_field('homepage_row_5', 'option');
    ?>
    <div class="row-divide service--test">
        <?php
            if (!empty($e)) {
                foreach ($e as $value) {
        ?>
        <div class="service_diva">
            <div class="row-divide">
                <div class="service__item col-divide-6 col-divide-md-12 thirdyfy--background center--center">
                    <div class="slider-details-service">
                        <div class="service__item-slick text--light">
                            <p class="font-times font-large text--light text--center text--italic">Dịch vụ</p>
                            <h3 class="customer__item-title title--section text--center text--light text--upcase"><?php echo $value['title']?></h3>
                            <p class="customer__item-des text--center max--width-500 mx--50 text--overflow"><?php echo $value['content']?>
                                <span class="my--50 font--weight"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service__list-image col-divide-6 col-divide-md-12 slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track">
                            <div class="slick-slide" data-slick-index="0" aria-hidden="true"  tabindex="0">
                                <img src="<?php echo $value['images']['url']?>" class="d--block image_services_carourel_1" alt="<?php echo $value['title']?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            } }
        ?>
    </div>
</section>
<section class="why" id="why">
    <?php
        $f = get_field('homepage_row_6', 'option');
    ?>
    <div class="why__contain container">
        <div class="why__content">
            <h4 class="why__title title--section text--upcase text-primary text--center font--weight--600">
                <?php echo $f['title']?>
            </h4>
            <p class="why__des text--center font--times font-size-18">
                <?php echo $f['content']?>
            </p>
        </div>
        <div class="why__list row-divide hidden-mobile">
            <div class="why__item col-divide-4 col-divide-lg-12">
                <?php
                    if(!empty($f['col-1'])) {
                        foreach ($f['col-1'] as $value) {
                ?>
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50 center--center">
                        <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="mc-mgb why__item-title title--item"><?php echo $value['title']?></h6>
                        <p class="why__item-des"><?php echo $value['content']?></p>
                    </div>
                </div>
                <?php
                    } }
                ?>
            </div>
            <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                <a class="why__img pos position--rel " id="whyImg" data-fancybox href="<?php echo $f['link_video']?>">
                        <img class="border--50" src="<?php echo $f['images']['url']?>" alt="media">
                        <div class="cover-play-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>

                </a>
            </div>
            <div class="why__item col-divide-4 col-divide-lg-12">
                <?php
                    if(!empty($f['col-2'])) {
                    foreach ($f['col-2'] as $value) {
                        ?>
                        <div class="row-divide my--50">
                            <div class="why__item-img col-divide-6 why--icon mr--50 center--center">
                                <img src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>">
                            </div>
                            <div class="why__item-content col-divide-6">
                                <h6 class="mc-mgb why__item-title title--item"><?php echo $value['title']?></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                <?php
                    } }
                ?>
            </div>
        </div>
        <!--Mobile -->
        <div class="why__list row-divide mobile myt--20">
            <div class="why__item col-divide-4 col-divide-lg-12">
                <div class="row-divide">
                    <?php
                        if(!empty($f['col-1'])) {
                        foreach ($f['col-1'] as $value) {
                    ?>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="<?php echo $value['images']['url']?>" alt="QUY MÔ RỘNG">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item"><?php echo $value['title']?></h6>
                                <p class="why__item-des"><?php echo $value['content']?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        } }
                    ?>

                    <?php
                        if(!empty($f['col-2'])) {
                        foreach ($f['col-2'] as $value) {
                    ?>
                            <div class="col-divide-6">
                                <div class="row-divide">
                                    <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                        <img src="<?php echo $value['images']['url']?>" alt="QUY MÔ RỘNG">
                                    </div>
                                    <div class="why__item-content col-divide-6 fix-text-438">
                                        <h6 class="mc-mgb why__item-title title--item"><?php echo $value['title']?></h6>
                                        <p class="why__item-des"><?php echo $value['content']?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        } }
                    ?>
                </div>
            </div>
            <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                <a class="why__img pos position--rel " id="whyImgMobile" data-fancybox href="<?php echo $f['link_video']?>">
                    <img class="border--50" src="<?php echo $f['images']['url']?>" alt="media">
                    <div class="cover-play-icon">
                        <i class="fa fa-play-circle-o"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--endmobile-->
        <div class="why__achievements row-divide hidden-mobile">
            <?php
                if(!empty($f['col-3'])) {
                foreach ($f['col-3'] as $value) {
            ?>
            <div class="achievement__item col-divide-3 my--phone--15 col-divide-lg-6 col-divide-sm-12">
                <div class="achievement__title text--center d--flex">
                    <img class="icon mr--10" src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>">
                    <span class="achievement__item-title title--item align--self"><?php echo $value['title']?></span>
                </div>
                <p class="achievement__item-des text--center">
                    <?php echo $value['content']?>
                </p>
            </div>
            <?php
                } }
            ?>
        </div>
        <!-- Mobile  achievements-->
        <div class="mobile myt--20">
            <div class="row-divide">
                <?php
                    if(!empty($f['col-3'])) {
                    foreach ($f['col-3'] as $value) {
                ?>
                <div class="achievement__item col-divide-6 my--phone--15 col-divide-lg-6">
                    <div class="achievement__title text--center">
                        <img class="icon mr--10" src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>">
                        <span class="achievement__item-title title--item align--self"><?php echo $value['title']?></span>
                    </div>
                    <p class="achievement__item-des fix-center-just">
                        <?php echo $value['content']?>
                    </p>
                </div>
                <?php
                    } }
                ?>
            </div>
        </div>
        <!------------>
    </div>
</section>

<div class="famous my--50 margin-top-100 hidden-mobile">
    <?php
        $g = get_field('homepage_row_7', 'option');
    ?>
    <div class="famous__contain container">
        <h3 class="famous__title title--section text--center text--upcase text--primary py--30"><?php echo $g['title']?></h3>
        <div class="famous__list row-divide">
            <?php
                if(!empty($g['review'])) {
                foreach ($g['review'] as $value) {
            ?>
            <div class="famous__item col-divide-4 my--phone--15 col-divide-md-12">
                <div class="famous__item-img">
                    <div class="famous_background" style="background-image: url(<?php echo $value['images']['url']?>)">
                    </div>
                </div>
                <div class="famous__item-title text--center my--12">
                    <p class="font--times"><?php echo $value['title_1']?></p>
                    <p class="title--item text--center"><?php echo $value['title_2']?></p>
                </div>
                <p class="famous__item-des text--center px--30 contain--box">
                    <?php echo $value['content']?>
                </p>
            </div>
            <?php
                } }
            ?>
        </div>
        <div class="famous--divider"></div>
    </div>
</div>

<section id="news" class="newz">
    <?php
        $h = get_field('homepage_row_8', 'option');
    ?>
    <div class="news__contain container">
        <h3 class="news__title title--section text--center text--primary text--upcase font--weight--500 my--50"><?php echo $h['title']?></h3>
        <div class="news__list">
            <?php
                if(!empty($h['items'])) {
                foreach ($h['items'] as $value) {
            ?>
            <a href="<?php echo $value['link']?>" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="<?php echo $value['images']['url']?>" alt="<?php echo $value['title']?>">
                </div>
                <p class="news__item-date my--6">
                    <?php echo $value['date']?>
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        <?php echo $value['title']?>
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
            <?php
                } }
            ?>
        </div>
    </div>
</section>

<section id="latest_news" class="newz my--60">
    <div class="container">
        <p class="title--section text--upcase text--center">
            Tin Tức - Sự Kiện
        </p>
        <div class="lastest--news__list">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'order' => 'desc',
                );
                $wp_query = new WP_Query($args);
                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="<?php get_permalink();?>" tabindex="0">
                    <div class="item__img">

                        <?php the_post_thumbnail() ; ?>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i><?php echo get_the_date('', $post->ID);?></span>
                    <p class="title--item text--left-mb text--none--style-mb"><?php the_title(); ?></p>
                    <p><?php the_excerpt();?></p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<section class="keyword-top-search" id="ketWordSearch">
    <?php
        $k = get_field('homepage_row_10', 'option');
    ?>
    <div class="container">
        <div class="title--section text--upcase text--center">
            TÌM KIẾM NHIỀU
        </div>
        <div class="top_search">
            <?php
                if(!empty($k)) {
                foreach ($k as $value) {
            ?>
            <div class="top_search-content">
                <a href="<?php echo $value['link']?>"><?php echo $value['title']?></a>
            </div>
            <?php
                } }
            ?>
        </div>
    </div>
</section>
<section class="footer-brands">
    <div class="introduce__contain container row-divide">
        <div class="introduce__item col-divide-6 col-divide-md-12 col-left">
            <div class="col-divide-6">
                <h3 class="text--light">Hơn 40 chi nhánh trên cả nước</h3>
                <p class="text--light">Tìm chi nhánh</p>
                <select class="input" id="khuvuc">
                    <option>-----Chọn địa điểm-----</option>
                    <option value="hcm">TP. HỒ CHÍ MINH</option>
                    <option value="danang">ĐÀ NẴNG</option>
                    <option value="binhduong">BÌNH DƯƠNG</option>
                    <option value="lamdong">LÂM ĐỒNG</option>
                    <option value="dongnai">ĐỒNG NAI</option>
                    <option value="longan">LONG AN</option>
                    <option value="vinhlong">VĨNH LONG</option>
                    <option value="cantho">CẦN THƠ</option>
                    <option value="tiengiang">TIỀN GIANG</option>
                    <option value="soctrang">SÓC TRĂNG</option>
                    <option value="baclieu">BẠC LIÊU </option>
                    <option value="angiang">AN GIANG</option>
                    <option value="kiengiang">KIÊN GIANG</option>
                    <option value="dongthap">ĐỒNG THÁP</option>
                    <option value="camau">CÀ MAU</option>
                    <option value="bentre">BẾN TRE</option>
                    <option value="tayninh">TÂY NINH </option>
                    <option value="travinh">TRÀ VINH</option>
                    <option value="haugiang">HẬU GIANG</option>
                    <option value="binhphuoc">BÌNH PHƯỚC</option>
                    <option value="phuyen">PHÚ YÊN</option>
                    <option value="binhdinh">BÌNH ĐỊNH(SẮP KHAI TRƯƠNG)</option>
                    <option value="thuathienhue">THỪA THIÊN HUẾ(SẮP KHAI TRƯƠNG)</option>
                    <option value="quangtri">QUẢNG TRỊ(SẮP KHAI TRƯƠNG)</option>
                </select>
                <select class="input input--khu-vuc" id="default">
                </select>
                <select class="input d--none system-name" id="hcm">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map11" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/hcm/9lythuongkiet.php">
                        Số 9 Lý Thường Kiệt, Thị Trấn Hóc Môn, Huyện Hóc Môn, TP. HCM
                    </option>
                    <option value="map12" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/hcm/366a4phanvantri.php">
                        366A4 Phan Văn Trị, P. 5 , Q. Gò Vấp, TP. HCM ( Kế bên siêu thị E Mart Gò Vấp )
                    </option>
                    <option value="map13" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/hcm/5duong6.php">
                        Số 5, Đường Số 6, Khu Hà Đô Centrosa Garden, P.12, Q.10, TP. HCM  (sắp khai trương)
                    </option>
                    <option value="map14" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/hcm/37bvovanngan.php">
                        37B Võ Văn Ngân, P. Linh Tây, Q. Thủ Đức
                    </option>
                </select>
                <select class="input d--none system-name" id="danang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map21" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/danang/32ledinhduong.php">
                        32 Lê Đình Dương, Phường Phước Ninh, Q. Hải Châu, TP. Đà Nẵng
                    </option>
                </select>
                <select class="input d--none system-name" id="binhduong">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map31" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/binhduong/226thichquanduc.php">
                        226 Thích Quảng Đức, P. Chánh Nghĩa, TP. Thủ Dầu Một ( Đối diện chùa Tây Tạng)
                    </option>
                </select>
                <select class="input d--none system-name" id="lamdong">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map41" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/lamdong/244haibatrung.php">
                        Số 244 Hai Bà Trưng, P.6, TP. Đà Lạt
                    </option>
                    <option value="map42" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/lamdong/22lethihonggam.php">
                        Số 22 Lê Thị Hồng Gấm, P.1 , TP. Bảo Lộc
                    </option>
                </select>
                <select class="input d--none system-name" id="dongnai">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map51" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/dongnai/235_1BduongPhanTrung.php">
                        Số 235/1B đường Phan Trung, P. Tân Tiến, TP. Biên Hòa, tỉnh Đồng Nai (Đối diện Vincom Plaza Biên Hoà)
                    </option>
                    <option value="map52" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/dongnai/399leduan.php">
                        339 Lê Duẩn, H. Long Thành, Đồng Nai
                    </option>
                </select>
                <select class="input d--none system-name" id="longan">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map61" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/longan/pg10vincom.php">
                        Căn PG 10 Khu Nhà Phố Vincom, P.2, TP. Tân An
                    </option>
                </select>
                <select class="input d--none system-name" id="vinhlong">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map71" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/vinhlong/156lethaito.php">
                        PG 1-09, Khu Nhà Phố VINCOM, Phạm Thái Bường, P.4, TP. Vĩnh Long
                    </option>
                </select>
                <select class="input d--none system-name" id="cantho">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map81" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/cantho/164lytutrong.php">
                        164 Lý Tự Trọng , Phường An Cư, Q. Ninh Kiều , Cần Thơ
                    </option>
                </select>
                <select class="input d--none system-name" id="tiengiang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map91" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/tiengiang/213aapbac.php">
                        Số 213A Đường Ấp Bắc, Phường 5, TP. Mỹ Tho, Tiền Giang
                    </option>
                    <option value="map92" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/tiengiang/63lytutrong.php">
                        63 Lý Tự Trọng, P.1, TX. Gò Công (Ngay Chợ Gò Công)
                    </option>
                </select>
                <select class="input d--none system-name" id="soctrang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map101" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/soctrang/46nguyenthiminhkhai.php">
                        Số 46 Nguyễn Thị Minh Khai , P.3, TP Sóc Trăng
                    </option>
                </select>
                <select class="input d--none system-name" id="baclieu">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map111" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/baclieu/185tranphu.php">
                        208 Bà Triệu, P.3, TP. Bạc Liêu ( Đối diện ngân hàng Vietcombank )
                    </option>
                    <option value="map112" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/baclieu/208batrieu.php">
                        Số 185 Trần Phú, P.7, TP. Bạc Liêu
                    </option>
                </select>
                <select class="input d--none system-name" id="angiang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map121" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/angiang/787hahoangho.php">
                        787 Hà Hoàng Hổ, P. Đông Xuyên, TP. Long Xuyên
                    </option>
                    <option value="map122" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/angiang/23quangtrung.php">
                        23 Quang Trung, P. Châu Phú A, TP. Châu Đốc
                    </option>
                </select>
                <select class="input d--none system-name" id="kiengiang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map131" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/kiengiang/12amg1.php">
                        Căn 12A - MG1 Khu Nhà Phố Vincom Plaza - Đường Cô Bắc, P. Vĩnh Bảo, TP. Rạch Giá
                    </option>
                </select>
                <select class="input d--none system-name" id="dongthap">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map141" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/dongthap/12lethihonggam.php">
                        Số 12 Lê Thị Hồng Gấm , P.2, TP. Cao Lãnh
                    </option>
                    <option value="map142" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/dongthap/dongthap2.php">
                        Căn PG1-10 Khu nhà phố Vincom, Đường số 5, Phường 1 ,TP. Sa Đéc, Tỉnh Đồng Tháp
                    </option>
                </select>
                <select class="input d--none system-name" id="camau">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map151" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/camau/12lethihonggam.php">
                        Số 21 An Dương Vương, P.7, TP. Cà Mau
                    </option>
                </select>
                <select class="input d--none system-name" id="bentre">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map161" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/bentre/281adongkhoi.php">
                        281A Đại lộ Đồng Khởi, P. Phú Tân, TP. Bến Tre
                    </option>
                </select>
                <select class="input d--none system-name" id="tayninh">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map171" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/tayninh/mg2khupho1.php">
                        Căn MG2-11 - Khu Phố 1, P.3, TP. Tây Ninh
                    </option>
                </select>
                <select class="input d--none system-name" id="travinh">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map181" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/travinh/pg108.php">
                        Căn PG1 - 08 Khu Nhà Phố Vincom - Đường Phạm Ngũ Lão, TP. Trà Vinh
                    </option>
                </select>
                <select class="input d--none system-name" id="haugiang">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map191" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/haugiang/pg303.php">
                        PG3 - 03, Khu nhà phố Vincom, Đường 3/2, P.5, TP. Vị Thanh
                    </option>
                </select>
                <select class="input d--none system-name" id="binhphuoc">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map201" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/binhphuoc/phurieng.php">
                        Số 33, Đường Phú Riềng Đỏ, Khu phố Phú Thanh, P. Tân Phú, TP. Đồng Xoài
                    </option>
                </select>
                <select class="input d--none system-name" id="phuyen">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map211" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/phuyen/phuyen.php">
                        143 Hùng Vương, Phường 6, TP. Tuy Hòa, Phú Yên
                    </option>
                </select>
                <select class="input d--none system-name" id="binhdinh">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map221" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/binhdinh/binhdinh1.php">
                        51,53 Lý Thường Kiệt, Phường Lê Hồng Phong, TP. Quy Nhơn, Bình Định
                    </option>
                </select>
                <select class="input d--none system-name" id="thuathienhue">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map231" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/thuathienhue/thuathienhue1.php">
                        86 Nguyễn Huệ, Phường Vĩnh Ninh, TP Huế, Thừa Thiên Huế
                    </option>
                </select>
                <select class="input d--none system-name" id="quangtri">
                    <option>-----Chọn cơ sở-----</option>
                    <option value="map241" data-url="https://vienthammydiva.vn/wp-content/themes/divaspa/map/quangtri/quangtri1.php">
                        68 Quốc lộ 9, Phường 1, TP. Đông Hà, Quảng Trị
                    </option>
                </select>
            </div>
            <div class="col-divide-6 mid">
                <div class="content-mid">
                    <p>Số điện thoại</p>
                    <span><a href="tel:1900 6689">1900 6689</a></span>
                    <p>Địa chỉ mail</p>
                    <span>info@vienthammydiva.vn</span>
                    <p></p>
                    <p>Giờ mở cửa:</p>
                    <p><span>8h đến 20h</span></p>
                    <p><span>Tất cả các ngày</span></p>
                    <p><span>trong tuần</span></p>
                </div>
            </div>
        </div>
        <div class="introduce__item col-divide-6 col-divide-md-12">
            <div class="googlemap" id="map">
                <img data-src="http://localhost/diva/wp-content/uploads/2020/08/image-swap-iframe-2.jpg" alt="">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.3346187328134!2d108.42979196533867!3d11.951318639674382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171132a1b43e0dd%3A0x35e2343b76fa65e3!2zVmnhu4duIFRo4bqpbSBN4bu5IERJVkEgLSDEkMOgIEzhuqF0!5e0!3m2!1svi!2s!4v1584956907085!5m2!1svi!2s"   frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="width:100%; height:100%"></iframe>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).on('ready', function() {
        $('.slider_desktop').slick({});
        $('.service--details .service--test').slick({});
        $('#news .news__list').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
             ]
        });
        $('#latest_news .lastest--news__list').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>