<?php 
	/*
		Template Name: Giới thiệu
	*/
get_header(); ?>

<div class="page page-gioi-thieu">
	<?php
      //Khai báo tên post type sẽ được hiển thị và số bài hiển thị mỗi trang
      $args = array('post_type' => 'trang_gioi_thieu','posts_per_page' => 1);
      $loop = new WP_Query ($args);
      if( $loop->have_posts() ) : while ( $loop->have_posts() ): $loop->the_post();
    ?> 
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
		<div class="item">
			<img src="<?php echo $src[0] ?>" />
		</div>
		<?php 
            }
              } ?> 
        <?php } ?>

	    <div class="bread-crumb">
	    	<a href="<?php echo get_bloginfo( 'wpurl' );?>">
	    		Trang chủ
	    	</a>
	    	<a> > </a>
		    <a href="<?php echo get_bloginfo( 'wpurl' );?>/gioi-thieu-chung">
		        Giới thiệu
		    </a>
	    </div>
	    <div class="page-header-title">
	    	Giới thiệu
	    </div>
	</div>

	<div class="page-title">
		<a class="active" href="<?php echo get_bloginfo( 'wpurl' );?>/gioi-thieu-chung">Giới thiệu</a>
		<a href="<?php echo get_bloginfo( 'wpurl' );?>/chu-dau-tu">Chủ đầu tư</a>
	</div>

	<div class="page-row row-1">
		<div class="text-box-1">
			<div class="text-box-title">
				<?php echo get_field('title_1') ?>
			</div>
			<div class="text-box-des">
				<div class="text-box-row">
					<div class="row-icon">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/gioi-thieu/icon-1.png">
					</div>
					<div class="row-text">
						<?php echo get_field('ten_du_an') ?>
					</div>
				</div>

				<!-- <div class="text-box-row">
					<div class="row-icon">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/gioi-thieu/icon-2.png">
					</div>
					<div class="row-text">
						Dự kiến bàn giao: <br>
						<span>Quý 3, 2018</span>
					</div>
				</div> -->

				<div class="text-box-row">
					<div class="row-icon">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/gioi-thieu/icon-3.png">
					</div>
					<div class="row-text">
						<?php echo get_field('vi_tri_da') ?>
					</div>
				</div>

				<div class="text-box-row">
					<div class="row-icon">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/gioi-thieu/icon-4.png">
					</div>
					<div class="row-text">
						<?php echo get_field('dien_tich') ?>
					</div>
				</div>

				<div class="text-box-row">
					<div class="row-icon">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/gioi-thieu/icon-5.png">
					</div>
					<div class="row-text">
						<?php echo get_field('mat_do_xay_dung') ?>
					</div>
				</div>

			</div>
		</div>

		<div class="text-box-2">
			<p><?php echo get_field('des_1') ?> </p>
		</div>

		<div class="slider">
			<?php
	          $galleries = get_post_meta($post->ID, 'img_row_1', true);
	          if( !empty($galleries) ){
	            $galleries = explode(',', $galleries); 
	        ?> 
	        <?php 
	          foreach ($galleries as $imgId) {
	            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
	                  if( !empty($src[0]) ){ 
	        ?> 
			<div class="item">
				<img src="<?php echo $src[0] ?>" />
			</div>
			<?php 
	            }
	              } ?> 
	        <?php } ?>
		</div>

	</div>

	<div class="page-row row-2">
		<div class="text-box">
			<div class="text-box-title">
				<?php echo get_field('title_2') ?>
			</div>
			<div class="text-box-des">
				<?php echo get_field('des_2') ?>
			</div>
		</div>
		<div class="slider">
			<div class="item">
			<?php
	          $galleries = get_post_meta($post->ID, 'img_row_2', true);
	          if( !empty($galleries) ){
	            $galleries = explode(',', $galleries); 
	        ?> 
	        <?php 
	          foreach ($galleries as $imgId) {
	            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
	                  if( !empty($src[0]) ){ 
	        ?> 
			<div class="item">
				<img src="<?php echo $src[0] ?>" />
			</div>
			<?php 
	            }
	              } ?> 
	        <?php } ?>
			</div>
		</div>
	</div>

	<div class="page-row row-3">
		<div class="text-box">
			<div class="text-box-title">				
				<?php echo get_field('title_3') ?>
			</div>
			<div class="text-box-des">
				<?php echo get_field('des_3') ?>
			</div>
		</div>

		<div class="slider">
			<?php
	          $galleries = get_post_meta($post->ID, 'img_row_3', true);
	          if( !empty($galleries) ){
	            $galleries = explode(',', $galleries); 
	        ?> 
	        <?php 
	          foreach ($galleries as $imgId) {
	            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
	                  if( !empty($src[0]) ){ 
	        ?> 
			<div class="item">
				<img src="<?php echo $src[0] ?>" />
			</div>
			<?php 
	            }
	              } ?> 
	        <?php } ?>
		</div>
	</div>

	<div class="page-row row-4">
		<div class="row-title">
			<?php echo get_field('title_4') ?>
		</div>
		<div class="text-box">
			<?php echo get_field('des_4') ?>
		</div>
		<div class="slider">
			<div class="slider-1">
				<div class="swiper-wrapper">
					<?php
			          $galleries = get_post_meta($post->ID, 'img_row_4', true);
			          if( !empty($galleries) ){
			            $galleries = explode(',', $galleries); 
			        ?> 
			        <?php 
			          foreach ($galleries as $imgId) {
			            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
			            if( !empty($src[0]) ){ 
			        ?> 
					<div class="swiper-slide item">
						<img src="<?php echo $src[0] ?>">
						<!-- <div class="item-title">
							<span>Phòng Ăn</span>
						</div> -->
					</div>
					<?php 
			            }
			              } ?> 
			        <?php } ?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="page-row row-5">
		<div class="row-title">
			<?php echo get_field('title_5') ?>
		</div>
		<div class="text-box">
			<?php echo get_field('des_5') ?>
		</div>
		<div class="slider">
			<?php
	          $galleries = get_post_meta($post->ID, 'img_row_5', true);
	          if( !empty($galleries) ){
	            $galleries = explode(',', $galleries); 
	        ?> 
	        <?php 
	          foreach ($galleries as $imgId) {
	            $src = wp_get_attachment_image_src($imgId, 'small_thumbs');
	                  if( !empty($src[0]) ){ 
	        ?> 
			<div class="item">
				<img src="<?php echo $src[0] ?>" />
			</div>
			<?php 
	            }
	              } ?> 
	        <?php } ?>
		</div>
	</div>

	<?php
		endwhile;
		endif;
	?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var mySwiper1 = new Swiper ('.slider-1', {
			loop: true,
			slidesPerView: 3,
	      	spaceBetween: 0,
	      	centeredSlides: true,
	      	autoplay: true,
			// navigation: {
		 //      nextEl: '.swiper-button-next',
		 //      prevEl: '.swiper-button-prev',
		 //    },
			breakpoints: {
				420: {
			      slidesPerView: 1,
			      spaceBetween: 0
			    },
			}
		});
	});
</script>

<?php get_footer(); ?>