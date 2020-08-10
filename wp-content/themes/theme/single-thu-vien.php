<?php 
get_header(); ?>

<div class="page page-single-img">
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
		    <a href="<?php echo get_bloginfo( 'wpurl' );?>/thu-vien-anh">
		        Thư viện
		    </a>
		    <a> > </a>
		    <a>
		        <?php the_title();?>
		    </a>
	    </div>
	</div>
	<div class="page-title">
		<div class="wrap-row">
			<div class="title-page">
				<?php the_title();?>
			</div>
		</div>
	</div>

	<div class="page-row row-1">
		<div class="wrap-row">
			<div class="list-item">
				<?php
					$galleries = acf_photo_gallery('list_img',$post->ID);
					foreach ($galleries as $value) {
				?>
				<div class="item col-md-4 <?php if($value['caption'] != null ) { echo 'item-long'; } ?>">
					<a href="<?php echo $value['full_image_url']; ?>" data-fancybox class="item-img">
						<img src="<?php echo $value['full_image_url']; ?>">
					</a>
					<div class="item-text">
						<?php echo $value['title']; ?>
					</div>
				</div>

				<?php 
					}
				?>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
     var $container=$('.list-item');
     // setTimeout(function() {
     // 	$('.list-item').masonry({
	    //  	itemSelector: '.item',
	    //  });
     // }, 1000);
     
    $container.imagesLoaded(function () {
        $container.masonry({
        	itemSelector: '.item',
        });
    });
  });
 </script>

<?php get_footer(); ?>