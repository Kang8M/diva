<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/assets/css/style.css">

<?php
  //Khai báo tên post type sẽ được hiển thị và số bài hiển thị mỗi trang
  $args = array('post_type' => 'home_crystal','posts_per_page' => 1);
  $loop = new WP_Query ($args);
  while ( $loop->have_posts() ): $loop->the_post();
?>

<div class="home-row row-1">
  <div class="slider-1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<?php
  endwhile;
?>

<script type="text/javascript">
  $(document).ready(function() {
    

  });
</script>