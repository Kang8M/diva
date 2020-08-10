<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/footer.css?v=2">
<div class="home-row footer">

  <div class="wrap-row">
    <div class="box-2" >
      <div class="box-footer">
        <form>
          <label class="footer-title">Đăng ký nhận tin</label>
          <input type="text" name="username" placeholder="Họ và tên" />
          <input type="text" name="phone" placeholder="Số điện thoại" />
          <input type="text" name="email" placeholder="Email" />
          <a class="footer-submit">GỬI THÔNG TIN</a>
        </form>
      </div>

      <div class="box-footer">
        <div class="footer-title">
          Liên hệ
        </div>
        <a href="http://sunshinegroup.vn/" target="_blank">TẬP ĐOÀN SUNSHINE</a>
        <a href="" target="_blank">
          <img src="<?php echo bloginfo('template_url')?>/assets/images/home/location-icon.png">
          Ciputra - Nam Thăng Long - Hà Nội
        </a>
        <a>
          <img src="<?php echo bloginfo('template_url')?>/assets/images/home/footer-mail-icon.png">
          goldenriver@sunshinemail.vn
        </a>
        <a href="tel:18006258">
          <img src="<?php echo bloginfo('template_url')?>/assets/images/home/footer-phone-icon.png">
          1800 6258</a>
      </div>

      <div class="box-footer">
        <div class="footer-title">
          Lưu ý
        </div>

        <p>* Hình ảnh chỉ mang tính chất minh họa. Căn hộ/Biệt thự và các trang thiết bị kèm theo Căn hộ/Biệt thự sẽ được bàn giao theo đúng quy định tại hợp đồng mua bán ký kết.</p>
        <img src="<?php echo bloginfo('template_url')?>/assets/images/home/footer-phone-icon.png">
        <img src="<?php echo bloginfo('template_url')?>/assets/images/home/footer-mail-icon.png">
        <img src="<?php echo bloginfo('template_url')?>/assets/images/home/footer-fb-icon.png">
      </div>

    </div>
  </div>

  <div class="box-3">
    <div class="wrap-row">
      <?php wp_nav_menu(array('container'=>false,'menu' => 'primary-2','menu_class'=>'nav'));?>
      <p class="fc">© <a href="#">Sunshine Golden River</a> 2018, All Rights Reserved.</p>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.footer .footer-submit').click(function() {
        var username = $('.footer').find('input[name="username"]').val();
        var phone = $('.footer').find('input[name="phone"]').val();
        var email = $('.footer').find('input[name="email"]').val();
        if (username != '' && phone != '' && email != '') {
          $.ajax({
                    type: "POST",
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    url: 'https://api.sunshinegroup.vn/api/v1/internal/SubmitContact',
                    data: JSON.stringify({
                        projectCd: "17",
                        contactName: username,
                        email: email,
                        phone: phone,
                        note: 'Khách đăng ký nhận thông tin dự án Sunshine Golden River.'
                    }),
                    success: function(data) {
                        if (data && data.status == 'success') {
                          alert('Đăng ký nhận thông tin thành công!');
                          $('.footer').find('input[name="username"]').val('');
                          $('.footer').find('input[name="phone"]').val('');
                          $('.footer').find('input[name="email"]').val('');
                        }
                        else {
                            
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        
                     },
                    dataType: 'json'
                });
        }
      });

    $('.lien-he form').submit(function(e) {
        e.preventDefault();
        var username = $('.lien-he').find('input[name="username"]').val();
        var phone = $('.lien-he').find('input[name="phone"]').val();
        var email = $('.lien-he').find('input[name="email"]').val();
        
        var note = $('.lien-he').find('textarea[name="note"]').val();
        if (username != '' && phone != '' && email != '') {
          $.ajax({
                    type: "POST",
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    url: 'https://api.sunshinegroup.vn/api/v1/internal/SubmitContact',
                    data: JSON.stringify({
                        projectCd: "17",
                        contactName: username,
                        email: email,
                        phone: phone,
                        note: note
                    }),
                    success: function(data) {
                        if (data && data.status == 'success') {
                          alert('Đăng ký đặt mua thành công!');
                          $('.lien-he').find('input[name="username"]').val('');
                          $('.lien-he').find('input[name="phone"]').val('');
                          $('.lien-he').find('input[name="email"]').val('');
                        }
                        else {
                            
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        
                     },
                    dataType: 'json'
                });
        }
      });

  });
</script>