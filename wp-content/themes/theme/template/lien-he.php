<?php 
	/*
		Template Name: Liên hệ
	*/
get_header(); ?>

<div class="page page-lien-he">
	<div class="top-page">
		<?php
			$galleries = get_post_meta($post->ID, 'img_bg', true);
	          if( !empty($galleries) ){
	            $galleries = explode(',', $galleries); 
		?>
		<?php 
          foreach ($galleries as $imgId) {
            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
                  if( !empty($src[0]) ){ 
        ?> 
		<img src="<?php echo $src[0] ?>">
		<?php 
            }
              } ?> 
        <?php } ?>
		<div class="bread-crumb">
	    	<a href="<?php echo get_bloginfo( 'wpurl' );?>">
	    		Trang chủ
	    	</a>
	    	<a> > </a>
		    <a href="<?php echo get_bloginfo( 'wpurl' );?>/chinh-sach">
		        Liên hệ
		    </a>
	    </div>
	    <div class="page-header-title">
	    	Liên hệ
	    </div>
	</div>
	<div class="page-title">
		<div class="wrap-row">
			<h1></h1>
		</div>
	</div>

	<div class="page-row row-1">
		<div class="wrap-row">
			<div class="text-box-1">
				<div class="title">
					Thông tin liên hệ
				</div>
				<ul class="content">
					<li>
						<div class="icon">
							<img src="<?php echo bloginfo('template_url')?>/assets/images/lien-he/location-icon.png" />
						</div>
						<span><?php echo get_field('location') ?></span>
					</li>
					<li>
						<div class="icon">
							<img src="<?php echo bloginfo('template_url')?>/assets/images/lien-he/mail-icon.png" />
						</div>
						<span><?php echo get_field('email') ?></span>
					</li>
					<li>
						<div class="icon">
							<img src="<?php echo bloginfo('template_url')?>/assets/images/lien-he/phone-icon.png" />
						</div>
						<span><a href="tel:<?php echo get_field('phone') ?>"><?php echo get_field('phone') ?></a></span>
					</li>
				</ul>
			</div>

			<div class="img-box-1">
				<?php
					$galleries = acf_photo_gallery('map',$post->ID);
					foreach ($galleries as $value) {
				?>
				<img src="<?php echo $value['full_image_url']; ?>" alt="map">
				<?php 
					}
				?>
			</div>

			<div class="img-box-2">
				<img src="<?php echo bloginfo('template_url')?>/assets/images/lien-he/banner-2-1.png">
			</div>
			<div class="form">
				<div class="title-form">
					Đăng ký nhận thông tin
				</div>
				<form id="form-page-lh">
					<input type="text" name="username-page-lh" class="form-control" placeholder="Họ tên:" />
					<input type="text" name="phone-page-lh" class="form-control" placeholder="Điện thoại:" />
					<input type="text" name="email-page-lh" class="form-control" placeholder="Email:" />
					<textarea class="form-control" rows="7" name="note-page-lh" placeholder="Ghi chú:"></textarea>
					<div class="submit"> 
						<a>Gửi thông tin</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#form-page-lh .submit a').click(function() {
        var username = $('#form-page-lh').find('input[name="username-page-lh"]').val();
        var phone = $('#form-page-lh').find('input[name="phone-page-lh"]').val();
        var email = $('#form-page-lh').find('input[name="email-page-lh"]').val();
        var note = $('#form-page-lh').find('textarea[name="note-page-lh"]').val();
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
                        note: 'Khách đăng ký nhận thông tin dự án Sunshine Golden River.' + note
                    }),
                    success: function(data) {
                        if (data && data.status == 'success') {
                          alert('Đăng ký nhận tư vấn thành công!');
                          $('#form-page-lh').find('input[name="username-page-lh"]').val('');
                          $('#form-page-lh').find('input[name="phone-page-lh"]').val('');
                          $('#form-page-lh').find('input[name="email-page-lh"]').val('');
                          $('#form-page-lh').find('textarea[name="note-page-lh"]').val('');
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

<?php get_footer(); ?>	