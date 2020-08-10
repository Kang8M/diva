<?php
	get_header();
?>

<div class="page page-single">
  <?php while ( have_posts() ) : the_post();
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
  <div class="top-page">
    <img src="<?php echo bloginfo('template_url')?>/assets/images/banner-page.jpg">
    <div class="bread-crumb">
      <a href="#">
        < Trở lại trang tin tức
      </a>
    </div>
  </div>

	<div class="page-row row-1">
    <div class="wrap-row">
      <div class="single-content">
        <div class="title">
          <a ><?php the_title(); ?></a>
        </div>
        <div class="post-date">
          <?php the_time('j/m/Y'); ?><br/>
        </div>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="single-sidebar">  
        <div class="sidebar-title">
          Tin tức nổi bật
        </div>
        <div class="list-news">
          <?php
            $args=array(
                'posts_per_page' => 10, 
                'cat' => 3,
                'post__not_in'  => array($post->ID)
            );
            $query_new = new WP_Query($args);
            if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          <div class="swiper-slide news">
            <a href="<?php the_permalink(); ?>">
              <div class="news-img">
                <img src="<?php echo $url;?>">
              </div>
              <div class="news-title">
                <?php the_title();?>
                <br>
                <a href="<?php the_permalink(); ?>" class="read-more">Xem chi tiết</a>
              </div>
            </a>
          </div>

          <?php
            endwhile;
            endif;
          ?>

        </div>

        <!-- <div class="sidebar-title">
          Thư viện ảnh
        </div>

        <div class="list-lib">
          <div class="lib">
            <div class="lib-img">
              <img src="<?php echo bloginfo('template_url')?>/assets/images/lib-demo.jpg">
            </div>
            <a href="#" class="lib-title">Ảnh ngoại thất</a>
          </div>

          <div class="lib">
            <div class="lib-img">
              <img src="<?php echo bloginfo('template_url')?>/assets/images/lib-demo.jpg">
            </div>
            <a href="#" class="lib-title">Tổng thể dự án</a>
          </div>

          <div class="lib">
            <div class="lib-img">
              <img src="<?php echo bloginfo('template_url')?>/assets/images/lib-demo.jpg">
            </div>
            <a href="#" class="lib-title">Ảnh nội thất</a>
          </div>

          <div class="lib">
            <div class="lib-img">
              <img src="<?php echo bloginfo('template_url')?>/assets/images/lib-demo.jpg">
            </div>
            <a href="#" class="lib-title">Tiện ích</a>
          </div>
        </div> -->

      </div>
      
    </div>
	</div>
  <?php
      endwhile;
  ?>
  
</div>


<?php
  get_footer();
?>
</script>