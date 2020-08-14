<section class="home--slider">
    <div class="slider_desktop">
        <?php
            $a = get_field('homepage_row_1', 'option');
            foreach ($a as $value) {
        ?>
                <div>
                    <img src="<?php echo $value['images']['url']; ?>" title="<?php echo $value['title']; ?>" alt="<?php echo $value['title']; ?>">
                    <div class="content-overlay text-banner-right"></div>
                </div>
        <?php } ?>
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
    <div class="service__contain container">
        <h3 class="service__title title--section text--upcase my--20 text--primary text--center">các dịch vụ nổi bật</h3>
        <div class="service__list">
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover4" src="http://localhost/diva/wp-content/uploads/2020/08/service-1.jpg" alt="service-img-1">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">Chăm sóc da</h4>
                        <p class="service__btn text--center"><a href="#" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover1" src="http://localhost/diva/wp-content/uploads/2020/08/phun-may-6d-kien-thuc-tong-quan-ban-can-biet-truoc-khi-thuc-hien-5-768x512-1.jpg" alt="background">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">điều trị da</h4>
                        <p class="service__btn text--center"><a href="#" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover5" src="http://localhost/diva/wp-content/uploads/2020/08/service-1.jpg" alt="service-img-2">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">Phun mày</h4>
                        <p class="service__btn text--center"><a href="#" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover2" src="http://localhost/diva/wp-content/uploads/2020/08/service-3.jpg" alt="background">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">phun thêu thẩm mỹ</h4>
                        <p class="service__btn text--center"><a href="#" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover6" src="http://localhost/diva/wp-content/uploads/2020/08/service-img-3-100.jpg" alt="5">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">Giảm béo</h4>
                        <p class="service__btn text--center"><a href="#" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="service__item">
                <img class="d--block w-100 h-100" id="backgroundHover3" src="http://localhost/diva/wp-content/uploads/2020/08/service-4.jpg" alt="background">
                <div class="service__item-contain text--light center--center">
                    <div>
                        <p class="text--center font--times text--italic">Dịch vụ</p>
                        <h4 class="text--center title--item text--upcase">khác</h4>
                        <p class="service__btn text--center"><a href="" class="btn text--upcase text--light">xem thêm</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service--details container--fluid mt--50">
    <div class="row-divide service--test">
        <div class="service_diva">
            <div class="row-divide">
                <div class="service__item col-divide-6 col-divide-md-12 thirdyfy--background center--center">
                    <div class="slider-details-service">
                        <div class="service__item-slick text--light">
                            <p class="font-times font-large text--light text--center text--italic">Dịch vụ</p>
                            <h3 class="customer__item-title title--section text--center text--light text--upcase">Phun mày</h3>
                            <p class="customer__item-des text--center max--width-500 mx--50 text--overflow"> Bạn luôn tự ti vì đôi lông mày thưa, nhạt, không sắc nét? Bạn tốn quá nhiều công sức và thời gian tại bàn trang điểm để kẻ vẽ mày như ý? Hay đơn giản bạn muốn có cặp lông mày đẹp, màu sắc thời thượng, hợp phong thủy? Phun lông mày thẩm mỹ chính là giải pháp dành cho bạn với những điểm cộng khiến bạn khó lòng chối từ <br>
                                <span class="my--50 font--weight"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service__list-image col-divide-6 col-divide-md-12 slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track">
                            <div class="slick-slide" data-slick-index="0" aria-hidden="true"  tabindex="0">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/phun-may-2.jpg" class="d--block image_services_carourel_1" alt="service-diva-images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service_diva">
            <div class="row-divide">
                <div class="service__item col-divide-6 col-divide-md-12 thirdyfy--background center--center">
                    <div class="slider-details-service">
                        <div class="service__item-slick text--light">
                            <p class="font-times font-large text--light text--center text--italic">Dịch vụ</p>
                            <h3 class="customer__item-title title--section text--center text--light text--upcase">Phun môi</h3>
                            <p class="customer__item-des text--center max--width-500 mx--50 text--overflow"> Phun môi công nghệ Collagen Pha Lê là phương pháp tân tiến nhất hiện nay kết hợp mực phun tự nhiên có bổ sung collagen không chỉ tạo sắc môi tươi tắn theo sở thích mà còn khiến đôi môi căng mọng và quyến rũ từ bên trong với những ưu thế vượt trội so với các phương pháp khác <br>
                                <span class="my--50 font--weight"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service__list-image col-divide-6 col-divide-md-12 slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track">
                            <div class="slick-slide" data-slick-index="0" aria-hidden="true"  tabindex="0">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/phun-moi.jpg" class="d--block image_services_carourel_1" alt="service-diva-images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why" id="why">
    <div class="why__contain container">
        <div class="why__content">
            <h4 class="why__title title--section text--upcase text-primary text--center font--weight--600">
                Vì Sao 5 Triệu Khách Hàng Chọn Viện Thẩm Mỹ DIVA?
            </h4>
            <p class="why__des text--center font--times font-size-18">
                Viện Thẩm Mỹ DIVA là nơi giúp bạn chăm sóc sắc đẹp với nhiều dịch vụ đa dạng
                <span class="d--block">Công nghệ kĩ thuật tiên tiến, kỹ thuật viên tay nghề cao</span>
            </p>
        </div>
        <div class="why__list row-divide hidden-mobile">
            <div class="why__item col-divide-4 col-divide-lg-12">
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50 center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_1.png" alt="QUY MÔ RỘNG KHẮP">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="mc-mgb why__item-title title--item">QUY MÔ RỘNG KHẮP</h6>
                        <p class="why__item-des">Liên tục mở rộng, Lấy khách hàng làm trung tâm là yếu tố cơ bản trong dịch vụ khách hàng.</p>
                    </div>
                </div>
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50 center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_2.png" alt="CHỨNG NHẬN UY TÍN">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="mc-mgb why__item-title title--item">CHỨNG NHẬN UY TÍN</h6>
                        <p class="why__item-des">Tạo dựng sự uy tín từ đội ngũ bác sỹ và chuyên viên tay nghề cao.</p>
                    </div>
                </div>
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50 center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_3.png" alt="NHÂN SỰ CHẤT LƯỢNG">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="mc-mgb why__item-title title--item">NHÂN SỰ CHẤT LƯỢNG</h6>
                        <p class="why__item-des">Đội ngũ nhân sự chuyên nghiệp và thân thiện mang lại sự an tâm cho khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                <a class="why__img pos position--rel " id="whyImg" data-fancybox href="https://www.youtube.com/watch?v=RphVghBq2ek">
                        <img class="border--50" src="http://localhost/diva/wp-content/uploads/2020/08/center.jpg" alt="why-media">
                        <div class="cover-play-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>

                </a>
            </div>
            <div class="why__item col-divide-4 col-divide-lg-12">
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50  center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_4.png" alt="CÔNG NGHỆ HIỆN ĐẠI">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="why__item-title title--item mc-mgb">CÔNG NGHỆ HIỆN ĐẠI</h6>
                        <p class="why__item-des">Sử dụng công nghệ mới nhất cùng mỹ phẩm cao cấp trong điều trị.</p>
                    </div>
                </div>
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50  center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_5.png" alt="PHONG CÁCH CHUYÊN NGHIỆP">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="why__item-title title--item mc-mgb">PHONG CÁCH CHUYÊN NGHIỆP</h6>
                        <p class="why__item-des">Đội ngũ nhân sự là các bác sĩ, chuyên gia thẩm mỹ đầu ngành cùng hàng trăm KTV được đào tạo chuyên nghiệp</p>
                    </div>
                </div>
                <div class="row-divide my--50">
                    <div class="why__item-img col-divide-6 why--icon mr--50  center--center">
                        <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_6.png" alt="THỜI GIAN LINH HOẠT">
                    </div>
                    <div class="why__item-content col-divide-6">
                        <h6 class="why__item-title title--item mc-mgb">THỜI GIAN LINH HOẠT</h6>
                        <p class="why__item-des">Hoạt động xuyên suốt từ thứ 2 đến chủ nhật; từ 8h00 sáng - 7h00 tối.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Mobile -->
        <div class="why__list row-divide mobile myt--20">
            <div class="why__item col-divide-4 col-divide-lg-12">
                <div class="row-divide">
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_1.png" alt="QUY MÔ RỘNG" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_1.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">QUY MÔ RỘNG</h6>
                                <p class="why__item-des">Hệ thống thẩm mỹ lớn nhất Việt Nam với hơn 40 cơ sở.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_2.png" alt="CHỨNG NHẬN UY TÍN" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_2.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">CHỨNG NHẬN UY TÍN</h6>
                                <p class="why__item-des">Sự uy tín đến từ đội ngũ bác giỏi và chuyên viên tay nghề cao.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_3.png" alt="NHÂN SỰ CHẤT LƯỢNG" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_3.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">NHÂN SỰ CHẤT LƯỢNG</h6>
                                <p class="why__item-des">Khách đến tiếp đón tận tình, khách về dặn dò chu đáo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_4.png" alt="CÔNG NGHỆ HIỆN ĐẠI" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_4.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">CÔNG NGHỆ HIỆN ĐẠI</h6>
                                <p class="why__item-des">100% nhập khẩu từ Mỹ với hơn 200 dịch vụ cao cấp.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_5.png" alt="PHONG CÁCH CHUYÊN NGHIỆP" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_5.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">PHONG CÁCH CHUYÊN NGHIỆP</h6>
                                <p class="why__item-des">Sự hài lòng của khách hàng là thành công của chúng tôi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-divide-6">
                        <div class="row-divide">
                            <div class="why__item-img col-divide-4 why--icon mr--50 center--center">
                                <img src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_6.png" alt="THỜI GIAN LINH HOẠT" src="http://localhost/diva/wp-content/uploads/2020/08/why_icon_6.png">
                            </div>
                            <div class="why__item-content col-divide-6 fix-text-438">
                                <h6 class="mc-mgb why__item-title title--item">THỜI GIAN LINH HOẠT</h6>
                                <p class="why__item-des">Phục vụ xuyên suốt 24/7.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why__play col-divide-4 col-divide-lg-12 center--center">
                <a class="why__img pos position--rel " id="whyImgMobile" data-fancybox href="https://www.youtube.com/watch?v=RphVghBq2ek">
                    <img class="border--50" src="http://localhost/diva/wp-content/uploads/2020/08/center.jpg" alt="why-media">
                    <div class="cover-play-icon">
                        <i class="fa fa-play-circle-o"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--endmobile-->
        <div class="why__achievements row-divide hidden-mobile">
            <div class="achievement__item col-divide-3 my--phone--15 col-divide-lg-6 col-divide-sm-12">
                <div class="achievement__title text--center d--flex">
                    <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-10-1.svg" alt="CHUỖI HỆ THỐNG THẨM MỸ">
                    <span class="achievement__item-title title--item align--self">40</span>
                </div>
                <p class="achievement__item-des text--center">
                    Hệ thống chuỗi TMV lớn nhất khu vực phía Nam, mang cơ hội làm đẹp bằng phương pháp hiện đại đến với phụ nữ Việt Nam.
                </p>
            </div>
            <div class="achievement__item col-divide-3 my--phone--15 col-divide-lg-6 col-divide-sm-12">
                <div class="achievement__title text--center d--flex">
                    <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-11.svg" alt="BÁC SĨ - CHUYÊN GIA ĐẦU NGÀNH">
                    <span class="achievement__item-title title--item align--self">200</span>
                </div>
                <p class="achievement__item-des text--center">
                    Quy tụ đội ngũ chuyên gia đầu ngành thẩm mỹ trong và ngoài nước. 100% được đào tạo chuyên sâu và có giấy phép hành nghề.
                </p>
            </div>
            <div class="achievement__item col-divide-3 my--phone--15 col-divide-lg-6 col-divide-sm-12">
                <div class="achievement__title text--center d--flex">
                    <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-12-02.svg" alt="CÔNG NGHỆ THẨM MỸ TIÊN TIẾN">
                    <span class="achievement__item-title title--item align--self">123</span>
                </div>
                <p class="achievement__item-des text--center">
                    Cập nhật xu hướng thẩm mỹ hiện đại &amp; công nghệ thẩm mỹ tiên tiến hàng đầu phù hợp với cơ địa người Việt
                </p>
            </div>
            <div class="achievement__item col-divide-3 my--phone--15 col-divide-lg-6 col-divide-sm-12">
                <div class="achievement__title text--center d--flex">
                    <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-13-1.svg" alt="KHÁCH HÀNG">
                    <span class="achievement__item-title title--item align--self">5 triệu +</span>
                </div>
                <p class="achievement__item-des text--center">
                    Bằng sự chuyên nghiệp và tận tâm, hệ thống chuỗi Thẩm mỹ công nghệ cao DIVA SPA cam kết mang đến cho khách hàng kết quả thẩm mỹ hoàn hảo nhất
                </p>
            </div>
        </div>
        <!-- Mobile  achievements-->
        <div class="mobile myt--20">
            <div class="row-divide">
                <div class="achievement__item col-divide-6 my--phone--15 col-divide-lg-6">
                    <div class="achievement__title text--center">
                        <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-10-1.svg" alt="CHUỖI HỆ THỐNG THẨM MỸ">
                        <span class="achievement__item-title title--item align--self">40</span>
                    </div>
                    <p class="achievement__item-des fix-center-just">
                        Hệ thống chuỗi TMV lớn nhất khu vực phía Nam, mang cơ hội làm đẹp bằng phương pháp hiện đại đến với phụ nữ Việt Nam.
                    </p>
                </div>
                <div class="achievement__item col-divide-6 my--phone--15 col-divide-lg-6">
                    <div class="achievement__title text--center">
                        <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-11.svg" alt="BÁC SĨ - CHUYÊN GIA ĐẦU NGÀNH">
                        <span class="achievement__item-title title--item align--self">200</span>
                    </div>
                    <p class="achievement__item-des fix-center-just">
                        Quy tụ đội ngũ chuyên gia đầu ngành thẩm mỹ trong và ngoài nước. 100% được đào tạo chuyên sâu và có giấy phép hành nghề.
                    </p>
                </div>
                <div class="achievement__item col-divide-6 my--phone--15 col-divide-lg-6">
                    <div class="achievement__title text--center">
                        <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-12-02.svg" alt="CÔNG NGHỆ THẨM MỸ TIÊN TIẾN">
                        <span class="achievement__item-title title--item align--self">123</span>
                    </div>
                    <p class="achievement__item-des fix-center-just">
                        Cập nhật xu hướng thẩm mỹ hiện đại &amp; công nghệ thẩm mỹ tiên tiến hàng đầu phù hợp với cơ địa người Việt
                    </p>
                </div>
                <div class="achievement__item col-divide-6 my--phone--15 col-divide-lg-6">
                    <div class="achievement__title text--center">
                        <img class="icon mr--10" src="http://localhost/diva/wp-content/uploads/2020/08/PRO-DIVAS-LAYOUT-13-1.svg" alt="KHÁCH HÀNG">
                        <span class="achievement__item-title title--item align--self">5 triệu +</span>
                    </div>
                    <p class="achievement__item-des fix-center-just">
                        Bằng sự chuyên nghiệp và tận tâm, hệ thống chuỗi Thẩm mỹ công nghệ cao DIVA SPA cam kết mang đến cho khách hàng kết quả thẩm mỹ hoàn hảo nhất
                    </p>
                </div>
            </div>
        </div>
        <!------------>
    </div>
</section>

<div class="famous my--50 margin-top-100 hidden-mobile">
    <div class="famous__contain container">
        <h3 class="famous__title title--section text--center text--upcase text--primary py--30">người nổi tiếng nói về diva</h3>
        <div class="famous__list row-divide">
            <div class="famous__item col-divide-4 my--phone--15 col-divide-md-12">
                <div class="famous__item-img">
                    <div class="famous_background" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/review-1.jpg)">
                    </div>
                </div>
                <div class="famous__item-title text--center my--12">
                    <p class="font--times">Hoa Hậu Thời Trang</p>
                    <p class="title--item text--center">TRÚC DIỄM</p>
                </div>
                <p class="famous__item-des text--center px--30 contain--box">
                    Diễm vừa trải nghiệm Ombre Shading. Sau khi trải nghiệm rồi thì Diễm đã có một cặp chân mày tự nhiên, như ý và rất là đẹp. Và bây giờ Trúc Diễm ra đường  không mất thời gian để tô vẽ chân mày nữa. Diễm hi vọng chị em nào có nhu cầu thì hãy tìm đến Viện Thẩm Mỹ DIVA
                </p>
            </div>
            <div class="famous__item col-divide-4 my--phone--15 col-divide-md-12">
                <div class="famous__item-img">
                    <div class="famous_background" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/review-3.jpg)">
                    </div>
                </div>
                <div class="famous__item-title text--center my--12">
                    <p class="font--times">Hoa Hậu </p>
                    <p class="title--item text--center">THU THỦY</p>
                </div>
                <p class="famous__item-des text--center px--30 contain--box">
                    Được bạn bè giới thiệu cũng như tìm hiểu trên mạng tôi đã đến với Thẩm Mỹ DIVA. Và tôi đã lựa chọn Viện Thẩm Mỹ DIVA là nơi chăm sóc làn da cho mình. Với đội ngũ chuyên  nghiệp với 100% các sản phẩm chăm sóc từ tự nhiên.
                </p>
            </div>
            <div class="famous__item col-divide-4 my--phone--15 col-divide-md-12">
                <div class="famous__item-img">
                    <div class="famous_background" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/review-2.jpg)">
                    </div>
                </div>
                <div class="famous__item-title text--center my--12">
                    <p class="font--times">Người Mẫu</p>
                    <p class="title--item text--center">TUYẾT LAN</p>
                </div>
                <p class="famous__item-des text--center px--30 contain--box">
                    Lan vừa sử dụng dịch vụ phun môi COLLAGEN tại Viện Thẩm Mỹ DIVA. Lan rất yên tâm khi phun môi tại đây. Lan rất hài lòng với màu sắc này bởi sự tư nhiên và trẻ trung của nó. Chắc chắn một điều rằng Lan sẽ giới thiệu bạn bè minh đến với Viện Thẩm Mỹ DIVA.
                </p>
            </div>
        </div>
        <div class="famous--divider"></div>
    </div>
</div>

<section id="news" class="newz">
    <div class="news__contain container">
        <h3 class="news__title title--section text--center text--primary text--upcase font--weight--500 my--50">BÁO CHÍ NÓI VỀ DIVA</h3>
        <div class="news__list">
            <a href="http://kenh14.vn/tham-my-vien-diva-vi-thanh-hau-giang-qua-tai-trong-ngay-dau-khai-truong-20191111122953863.chn" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="http://localhost/diva/wp-content/uploads/2020/08/diva-news-1.jpg" alt="Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương">
<!--                    <img class="news__item-img-brand brand--new" src="http://localhost/diva/wp-content/uploads/2020/08/14519_500242276665304_2136612497_n.jpg" alt="logo-brand-news">-->
                </div>
                <p class="news__item-date my--6">
                    15/09/2019
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
            <a href="http://kenh14.vn/tham-my-vien-diva-vi-thanh-hau-giang-qua-tai-trong-ngay-dau-khai-truong-20191111122953863.chn" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="http://localhost/diva/wp-content/uploads/2020/08/diva-news-1.jpg" alt="Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương">
<!--                    <img class="news__item-img-brand brand--new" src="http://localhost/diva/wp-content/uploads/2020/08/14519_500242276665304_2136612497_n.jpg" alt="logo-brand-news">-->
                </div>
                <p class="news__item-date my--6">
                    15/09/2019
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
            <a href="http://kenh14.vn/tham-my-vien-diva-vi-thanh-hau-giang-qua-tai-trong-ngay-dau-khai-truong-20191111122953863.chn" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="http://localhost/diva/wp-content/uploads/2020/08/diva-news-1.jpg" alt="Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương">
<!--                    <img class="news__item-img-brand brand--new" src="http://localhost/diva/wp-content/uploads/2020/08/14519_500242276665304_2136612497_n.jpg" alt="logo-brand-news">-->
                </div>
                <p class="news__item-date my--6">
                    15/09/2019
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
            <a href="http://kenh14.vn/tham-my-vien-diva-vi-thanh-hau-giang-qua-tai-trong-ngay-dau-khai-truong-20191111122953863.chn" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="http://localhost/diva/wp-content/uploads/2020/08/diva-news-1.jpg" alt="Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương">
<!--                    <img class="news__item-img-brand brand--new" src="http://localhost/diva/wp-content/uploads/2020/08/14519_500242276665304_2136612497_n.jpg" alt="logo-brand-news">-->
                </div>
                <p class="news__item-date my--6">
                    15/09/2019
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
            <a href="http://kenh14.vn/tham-my-vien-diva-vi-thanh-hau-giang-qua-tai-trong-ngay-dau-khai-truong-20191111122953863.chn" class="news__item d--block mx--20 mx-mobile" >
                <div class="news__item-img position--rel">
                    <img class="news__item-img-main" src="http://localhost/diva/wp-content/uploads/2020/08/diva-news-1.jpg" alt="Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương">
<!--                    <img class="news__item-img-brand brand--new" src="http://localhost/diva/wp-content/uploads/2020/08/14519_500242276665304_2136612497_n.jpg" alt="logo-brand-news">-->
                </div>
                <p class="news__item-date my--6">
                    15/09/2019
                </p>
                <div class="news__item-content">
                    <p class="news__item-title title--item text--left-mb text--none--style-mb">
                        Thẩm mỹ viện DIVA Vị Thanh - Hậu Giang “quá tải” trong ngày đầu khai trương
                    </p>
                </div>
                <span class="text--upcase"> đọc tiếp →</span>
            </a>
        </div>
    </div>
</section>

<section id="latest_news" class="newz my--60">
    <div class="container">
        <p class="title--section text--upcase text--center">
            Tin Tức - Sự Kiện
        </p>
        <div class="lastest--news__list">
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="#" tabindex="0">
                    <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/cuba-ho-tro-viet-nam-chong-dich-covid19-2.jpg);"></div>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i>06/08/2020</span>
                    <p class="title--item text--left-mb text--none--style-mb">Cuba Tặng Thuốc, Cử Chuyên Gia Sang Việt Nam Hỗ Trợ...</p>
                    <p>Số vật tư được trao tặng cho Việt Nam gồm hàng ngàn...</p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="#" tabindex="0">
                    <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/co-so-tham-my-diva-tai-da-nang.jpg);"></div>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i>05/08/2020</span>
                    <p class="title--item text--left-mb text--none--style-mb">DIVA SPA – Thay Đổi Nhận Diện Thương Hiệu</p>
                    <p>Hành trình phát triển của DIVA SPA&nbsp; Thành lập từ năm 2014,...</p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="#" tabindex="0">
                    <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/3-vien-tham-my-diva-chong-dich-mua-covid-19-022-1.jpg);"></div>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i>31/07/2020</span>
                    <p class="title--item text--left-mb text--none--style-mb">Viện Thẩm Mỹ DIVA Đảm Bảo An Toàn, Phục Vụ Khách...</p>
                    <p>Trước khi có dịch, Viện thẩm mỹ DIVA vẫn luôn rất chú...</p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="#" tabindex="0">
                    <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/vien-tham-my-diva-chong-dich-covid-19.-5-1.jpg);"></div>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i>30/07/2020</span>
                    <p class="title--item text--left-mb text--none--style-mb">Hướng Dẫn Đeo Khẩu Trang Đúng Cách Phòng Lây Nhiễm...</p>
                    <p>Bộ Y tế yêu cầu người dân rửa tay, đeo khẩu trang đúng...</p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
            <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15">
                <a href="#" tabindex="-1">
                    <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(http://localhost/diva/wp-content/uploads/2020/08/vien-tham-my-diva-chong-dich-mua-covid-19.jpg);"></div>
                    </div>
                    <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i>30/07/2020</span>
                    <p class="title--item text--left-mb text--none--style-mb">Hướng Dẫn Quy Trình Rửa Tay Theo Chuẩn Bộ Y Tế</p>
                    <p>Tầm quan trọng của việc rửa tay đúng cách Tổ chức Y...</p>
                    <span class="text--upcase"> đọc tiếp →</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="keyword-top-search" id="ketWordSearch">
    <div class="container">
        <div class="title--section text--upcase text--center">
            TÌM KIẾM NHIỀU
        </div>
        <div class="top_search">
            <div class="top_search-content">
                <a href="#">Spa Gò Vấp</a>
            </div>
            <div class="top_search-content">
                <a href="#">Triệt lông Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/phun-may-o-ho-chi-minh/">Phun mày Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/phun-moi-o-ho-chi-minh/">Phun môi Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tri-seo-tai-da-nang/">Trị sẹo Đà Nẵng</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tri-mun-hau-giang/">Trị mụn Hậu Giang</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tam-trang-phi-thuyen-hau-giang/">Tắm trắng Hậu Giang</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/xoa-xam-ho-chi-minh/">Xóa xăm Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tri-seo-o-ho-chi-minh/">Trị sẹo rỗ Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tri-mun-o-ho-chi-minh/">Trị mụn Hồ Chí Minh</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/phun-moi-tai-binh-duong/">Phun môi Bình Dương</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/phun-may-o-binh-duong/">Phun mày Bình Dương</a>
            </div>
            <div class="top_search-content">
                <a href="https://vienthammydiva.vn/tam-trang-phi-thuyen-o-ho-chi-minh-uy-tin/">Tắm trắng Hồ Chí Minh</a>
            </div>
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