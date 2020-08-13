<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/footer.css?v=2">
<footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="footer__contain container">
        <div class="footer__content">
            <div class="footer__item-brand my--20 w--27">
                <img src="http://localhost/diva/wp-content/uploads/2020/08/Logo-Diva-Luxury-Academy-nen.png" alt="logo-footer">
            </div>
            <div class="row-divide">
                <div class="footer__item col-divide-4 col-divide-md-12">
                    <div class="footer__item-info">
                        <div class="title--item p--btm--15">
                            CÔNG TY CP TẬP ĐOÀN DIVA GROUP
                        </div>
                        <p class="p--btm--15">
                            <b>Mã số doanh nghiệp:</b> 5801 358 357
                        </p>
                        <p class="p--btm--15">
                            <b>Trụ sở chính:</b> Số 250, Hai Bà Trưng, P.6, Tp. Đà Lạt, Lâm Đồng
                        </p>
                    </div>
                </div>
                <div class="footer__item footer__style footer__info_center col-divide-4 col-divide-md-12 text--right">
                    <p class="p--btm--15 margin--width-max">
                        <span class="border--50 rotate--90"><i class="fa fa-phone"></i></span>
                        <span>Hotline: <a class="text--light" href="tel:1900 6689">
                        1900 6689          </a>
                        </span>
                    </p>
                    <p class="p--btm--15 margin--width-max">
                        <span class="border--50"><i class="fa fa-envelope border--50"></i></span>
                        <span>Email: info@vienthammydiva.vn</span>
                    </p>
                    <form class="p--btm--15" name="registerForm" method="GET" id="registerFormFooter">
                        <input class="footer__item-email text--right" placeholder="info@vienthammydiva.vn" name="footerEmail" id="footerEmail">
                        <input type="hidden" name="sdt" value="">
                        <input type="hidden" name="ghiChu" value="">
                    </form>
                    <div class="btn__seen">
                        <p class="btn px--0 text--upcase text--light" id="registerBtnFooter" name="registerBtn">Đăng ký ngay &nbsp; &nbsp; →
                        </p>
                    </div>
                    <script>
                        var submitFooter = jQuery("#registerBtnFooter");
                        submitFooter.click(function()
                        {
                            var data = jQuery('#registerFormFooter').serialize();
                            jQuery.ajax({
                                type : 'GET',
                                url : 'https://script.google.com/macros/s/AKfycbzXjFsVEr61LhfwLeV-XEsAtkVZ9PNIQ5AWVY0xj8h4Wqn2IA/exec',
                                dataType:'json',
                                crossDomain : true,
                                data : data,
                                header: "Access-Control-Allow-Origin: *",
                                success : function(data)
                                {
                                    if(data == 'false')
                                    {
                                        alert('Đăng ký không thành công, Error');
                                    }else{
                                        alert('Cảm ơn bạn ! Chúng tôi sẽ sớm liên hệ bạn');
                                        location.reload(true);
                                    }
                                }
                            });
                            return false;
                        });
                    </script>
                </div>
                <div class="footer__item col-divide-4 col-divide-md-12">
                    <p class="my-20 footer__follow text--right">
                        <button class="btn text--upcase text--light px--25 main--background" id="btnFooterRegister">
                            Đặt lịch hẹn ngay
                        </button>
                    </p>
                    <p class="p--btm--15 footer__follow text--right">
                        Theo dõi chúng tôi tại
                    </p>
                    <p class="p--btm--15 footer__follow text--right">
                        <a class="footer__social icon-social mx--5 d--inline-block" href="https://www.facebook.com/vanhoadivagroup/">
                            <i class="fa fa-facebook-official color-light"></i>
                        </a>
                        <a class="footer__social icon-social mx--5 d--inline-block" href="https://www.youtube.com/channel/UCZ16DClNxvkE1En6zTzSLpw?sub_confirmation=1">
                            <i class="fa fa-youtube color-light"></i>
                        </a>
                        <a class="footer__social icon-social mx--5 d--inline-block" href="">
                            <i class="fa fa-instagram color-light"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer__sub d--flex">
            <p>
                <a class="text--primary" href="https://vienthammydiva.vn/chinh-sach-bao-mat-thong-tin/">Chính sách bảo mật thông tin</a>
                <a class="text--primary" href="https://vienthammydiva.vn/dieu-khoan-chinh-sach-su-dung/">Điều khoản chính sách sử dụng</a>
            </p>
            <p class="text--center-mb">Copyright © 2014 - 2020 Công Ty CP Tập Đoàn DIVA Group. All Right Reserved. </p>
        </div>
    </div>
</footer>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $(document).ready(function() {
        // Fix Menu
        var menu = jQuery("header");
        jQuery(window).scroll(function() {
            if (jQuery(window).scrollTop() > 200) {
                menu.addClass("fix");
            } else {
                menu.removeClass("fix");
            }
        });
    });
</script>