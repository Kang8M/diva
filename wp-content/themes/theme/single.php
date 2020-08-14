<?php
	get_header();
?>

<section class="top_backgroud_overlay" style="background-image: url('http://dev.diva.vn/wp-content/uploads/2020/08/1-vien-tham-my-diva-banner-6-min.jpg');">
    <div class="container">
      <div class="sp-title">
          <h4></h4>
      </div>
    </div>
</section>
<section class="single__page">
    <div class="container">
        <?php
            $permalink = "";
            $post_image = "";
            $post_title = "";
            $category = "";
            while ( have_posts() ) : the_post();
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $category = get_the_category($post->ID);
            $permalink = get_permalink();
            $post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $post_title = get_the_title();
        ?>
      <div class="single__page-breadcum">
          <span><a href="<?php echo home_url( '/' ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a></span>
          <span><i class="fas fa-angle-double-right"></i></span>
          <span>
            <a href="<?php echo home_url( '/'. $category[0]->slug ); ?>"><?php echo $category[0]->name; ?></a>
          </span>
      </div>
      <div class="row-divide">
          <div class="col-divide-9 col-divide-md-12">
            <div class="single__page-content mc-fix-fs">
                <h1 class="big--title"><?php the_title(); ?></h1>
                <p><strong></strong></p>
                <div class="shortcode_hlight">
                  <p><strong><?php echo get_field( "mo_ta_ngan", $post->ID );?></strong></p>
                </div>
                <p></p>
                <?php the_content(); ?>
                <div class="rating-single-post">
                    <?php echo kk_star_ratings();?>
                </div>
                <!--Likebox-->
                <div class="post_like_unlike">
                  <div class="left_button_like">
                      <span>Bài viết này có hữu ích với bạn không?</span>
                      <?php echo do_shortcode('[likebtn theme="tick" lang="vi" tooltip_enabled="0" white_label="1" position="top" like_box_text="Bài viết này có hữu ích với bạn không?" addthis_service_codes="facebook,twitter,pinterest" share_size="small" og="1" i18n_share_text="Bài viết này có hữu ích với bạn không?" bp_notify="0"]')?>
                  </div>
                  <div class="tags_single">
                      <span> <i class="fa fa-share-alt"></i>Chia Sẻ</span>
                      <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink;?>" target="_blank">
                          <i class="fab fa-facebook-square text--icon--social"></i>
                      </a>
                      <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/home?status=<?php echo $permalink;?>" target="_blank">
                          <i class="fab fa-twitter-square text--icon--social"></i>
                      </a>
                      <a class="btn btn-social-icon btn-pinterest" href="https://www.pinterest.com/pin/create/link/?url=<?php echo $permalink;?>&amp;media=<?php echo $post_image;?>&amp;description=<?php echo $post_title;?>" target="_blank">
                          <i class="fab fa-pinterest-square text--icon--social"></i>
                      </a>
                  </div>
                </div>
                <!--End likebox-->
            </div>
          </div>
          <?php endwhile; ?>
          <div class="col-divide-3 col-divide-md-12 bd_right-menu">
            <div class="right_menu">
                <div class="right_menu-social mc--bdb">
                  <div class="right_menu-title">
                      Theo Dõi Chúng Tôi
                  </div>
                  <div class="right__menu__social">
                      <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink;?>" target="_blank">
                      <i class="fab fa-facebook-square text--icon--social"></i>
                      </a>
                      <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/home?status=<?php echo $permalink;?>" target="_blank">
                      <i class="fab fa-twitter-square text--icon--social"></i>
                      </a>
                      <a class="btn btn-social-icon btn-pinterest" href="https://www.pinterest.com/pin/create/link/?url=<?php echo $permalink;?>&amp;media=<?php echo $post_image;?>&amp;description=<?php echo $post_title;?>" target="_blank">
                      <i class="fab fa-pinterest-square text--icon--social"></i>
                      </a>
                      <a class="btn btn-social-icon btn-youtube" href="<?php echo get_field('youtube_link', 'option');?>" target="_blank">
                      <i class="fab fa-youtube"></i>
                      </a>
                  </div>
                </div>
                <div class="right_menu-baiviet mc--bdb">
                  <div class="right_menu-title">
                      Những Bài Viết Khác
                  </div>
                    <?php

                        $args=array(
                            'posts_per_page' => 5,
                            'cat' => $category[0]->term_id,
                            'post__not_in'  => array($post->ID)
                        );
                        $query_new = new WP_Query($args);
                        if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                  <div class="baiviet_content-title mc--mb">
                      <a class="rm--a d--block d--flex" href="<?php echo get_permalink();?>">
                          <?php if ($url != ""): ?>
                            <div class="mr--10 baiviet_left">
                                <img src="<?php echo $url;?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="<?php echo the_title();?>" width="150" height="150">
                            </div>
                          <?php endif;?>
                        <div class="baiviet_right">
                            <p class="font--weight--500">
                              <?php echo the_title();?>
                            </p>
                            <p class="date font--weight--500 text--italic">
                              <i class="fas fa-calendar-alt"></i>
                              &nbsp;<?php the_date('d-m-Y')?>
                            </p>
                        </div>
                      </a>
                  </div>
                    <?php
                        endwhile;
                        endif;
                        wp_reset_query();
                    ?>
                </div>
                <div class="right_menu-contact mc--bdb">
                  <div class="right_menu-title">
                      Liên Hệ
                  </div>
                  <div class="right_menu-sdt mc--mb right__menu__social">
                      <a class="rm--a" href="tel:<?php echo get_field('hotline', 'option');?>"><i class="fa fa-fax "></i>&nbsp;&nbsp;HOTLINE: <?php echo get_field('hotline', 'option');?></a>
                  </div>
                  <div class="right_menu-dd mc--mb right__menu__social">
                      <a class="rm--a" href="tel:<?php echo get_field('di_dong', 'option');?>"><i class="fa fa fa-mobile-alt" style="font-size:28px;"></i>&nbsp;&nbsp;DI ĐỘNG: <?php echo get_field('di_dong', 'option');?></a>
                  </div>
                  <div class="right_menu-email mc--mb right__menu__social">
                      <a class="rm--a" href="mailto:<?php echo get_field('email', 'option');?>"><i class="fa fa-envelope"></i>&nbsp;&nbsp;EMAIL: <?php echo get_field('email', 'option');?></a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>
<script>
    jQuery(document).ready(function() {
    jQuery(".rank-math-list-item .rank-math-answer").css("display","none");
    jQuery(".rank-math-list-item .rank-math-question").append(' <i class="fa fa-chevron-down" aria-hidden="true"></i>');
    /*
    jQuery(".rank-math-list-item .rank-math-question").toggle(
    function(){jQuery(".rank-math-list-item .rank-math-answer").css({"display": "block"});},
    function(){jQuery(".rank-math-list-item .rank-math-answer").css({"display": "none"});
    });
    */
    jQuery(".rank-math-list-item").click(function(e){
    jQuery(".rank-math-answer").hide();
    $this = jQuery(this).find(".rank-math-answer");
    $this.toggle();
    });
    /*----------------*/
    });
</script>
<div class="nhandangkis">
    <div class="container">
      Thông tin chi tiết <strong>Cuba Tặng Thuốc, Cử Chuyên Gia Sang Việt Nam Hỗ Trợ Chống Dịch COVID-19</strong> của Viện Thẩm Mỹ Diva. Những điều bạn nên biết, quí khách vui lòng gọi điện tổng đài <span class="maudo"> </span> hoặc <span class="maudo"> click vào nút đăng ký </span> và điền thông tin đầy đủ để được tư vấn miễn phí <span class="tuvan">Tư vấn 24/7: <span> <a rel="nofollow" href="tel:19<?php echo get_field('hotline', 'option');?>"><?php echo get_field('hotline', 'option');?></a></span></span>
      <button data-toggle="modal" data-target="#myModal" id="dangkytuvan" class="dangkytuvan">
      <span><i class="fas fa-file-alt"></i> </span> Đăng ký tư vấn</button>
    </div>
</div>
<section id="latest_news" class="newz my--60 hidden-mobile">
    <div class="container">
      <p class="title--section text--upcase text--center">
          Tin Tức - Sự Kiện    
      </p>
      <div class="lastest--news__list row-divide slick-initialized slick-slider slick-dotted">
          <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: inline-block;">Previous</button>
          <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 2565px; transform: translate3d(0px, 0px, 0px);">
                <?php
                    $args=array(
                        'posts_per_page' => -1,
                        'cat' => $category[0]->term_id,
                        'order'         => 'date',
                        'post_type'     => 'post',
                        'post_status'   => 'publish',
                    );
                    $query_new = new WP_Query($args);
                    if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $slick_active = "";
                        $slick_tab_index = -1;
                        if ($query_new->current_post < 4) {
                            $slick_active = "slick-active";
                            $slick_tab_index = 0;
                        }
                ?>
                <div class="lastest--news__item col-divide-3 col-divide-sm-6 mx--15 slick-slide <?php echo $slick_active;?>" style="width: 255px;" tabindex="<?php echo $slick_tab_index;?>" role="tabpanel" id="slick-slide0<?php echo $query_new->current_post;?>" aria-describedby="slick-slide-control0<?php echo $query_new->current_post;?>">
                  <a href="<?php echo get_permalink(); ?>" tabindex="<?php echo $slick_tab_index;?>">
                      <div class="item__img">
                        <div class="fix-bg-latest_news" style="background-image: url(<?php echo $url;?>);"></div>
                      </div>
                      <span class="date my--6 d--block"><i class="fas fa-calendar-alt"></i><?php echo the_date('d/m/Y');?></span>
                      <p class="title--item text--left-mb text--none--style-mb"><?php echo wp_trim_words(trim(strip_tags(the_title())), 25, ' …'); ?></p>
                      <p><?php echo wp_trim_words(trim(strip_tags(get_the_content())), 25, ' …'); ?></p>
                      <span class="text--upcase"> đọc tiếp →</span>
                  </a>
                </div>
                <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>
            </div>
          </div>
          <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;" aria-disabled="false">Next</button>
          <ul class="slick-dots" style="display: block;" role="tablist">
              <?php
                    $count = 0;
                    $current_post = 0;
                    $slick_active = "";
                  $args=array(
                      'posts_per_page' => -1,
                      'cat' => $category[0]->term_id,
                      'order'         => 'date',
                      'post_type'     => 'post',
                      'post_status'   => 'publish',
                  );
                  $query_new = new WP_Query($args);
                  if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
                  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                  $slick_tab_index = -1;

                  if ($query_new->current_post < 2) {
                      $slick_tab_index = 0;
                  }

                  if ($query_new->current_post == 0) {
                      $slick_active = 'class="slick-active"';
                  } else {
                      $slick_active = '';
                  }

                  if (($query_new->current_post % 4) == 0) :
                      if ($query_new->current_post != 0) :
                          $count++;
                          $current_post = $query_new->current_post;
                      endif;
              ?>
            <li <?php echo $slick_active;?> role="presentation">
                <button type="button" role="tab" id="slick-slide-control0<?php echo $count;?>" aria-controls="slick-slide0<?php echo $current_post;?>" tabindex="<?php echo $slick_tab_index;?>" aria-selected="true"><?php echo $count;?></button>
            </li>
              <?php
                  endif;
                endwhile;
                endif;
                wp_reset_query();
            ?>
          </ul>
      </div>
    </div>
</section>
<!--latest_news mobile-->
<section class="s-mobile">
    <p class="title--section text--upcase text--center">Tin Tức - Sự Kiện </p>
    <div>
        <?php
            $args=array(
                'posts_per_page' => 1,
                'cat' => $category[0]->term_id,
                'order'         => 'date',
                'post_type'     => 'post',
                'post_status'   => 'publish',
            );
            $query_new = new WP_Query($args);
            if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
      <a href="<?php echo get_permalink(); ?>">
          <div class="item__img position--rel">
            <img src="<?php echo $url;?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="<?php echo $url;?> 1536w" sizes="(max-width: 2000px) 100vw, 2000px" width="2000" height="1044">
            <div class="position--ab title-post-mobile"><?php echo wp_trim_words(trim(strip_tags(the_title())), 25, ' …'); ?></div>
          </div>
      </a>
      <?php
            endwhile;
            endif;
            wp_reset_query();
      ?>
    </div>
    <div class="slide-post-mobile">
      <div class="mobile-post-slider slick-initialized slick-slider">
          <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
          <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);">
                <?php
                $args=array(
                    'posts_per_page' => -1,
                    'cat' => $category[0]->term_id,
                    'order'         => 'date',
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                );
                $query_new = new WP_Query($args);
                if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                  <a href="<?php echo get_permalink(); ?>" tabindex="-1">
                      <div class="item__img position--rel">
                        <div class="fix-img-post-mobile">
                            <img src="<?php echo $url;?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="<?php echo $url;?> 980w, <?php echo $url;?> 300w, <?php echo $url;?> 768w" sizes="(max-width: 980px) 100vw, 980px" width="980" height="809">
                        </div>
                        <div class="position--ab title-post-mobile"><?php echo wp_trim_words(trim(strip_tags(the_title())), 25, ' …'); ?></div>
                      </div>
                  </a>
                </div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                ?>
            </div>
          </div>
          <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
      </div>
    </div>
</section>
<!--end-->
<script>
    jQuery(document).ready(function($) {
    var submit1=jQuery("#like_button"),submit1_value=jQuery("#like_button").val(),submit2=jQuery("#dislike_button"),submit2_value=jQuery("#dislike_button").val();jQuery("input.like_button").on("change",function(){jQuery("input.like_button").not(this).prop("checked",!1)}),submit1.click(function(){if(jQuery('input[name="like_button"]').is(":checked")){var e=1,i=1;jQuery('input[name="like_button"]').addClass("checked_box"),jQuery('input[name="dislike_button"]').removeClass("checked_box")}else{e=0;jQuery('input[name="like_button"]').removeClass("checked_box")}var t={action:"my_action",like:1,dislike:0,dislike_remove:0,like_dislike_checked:i,security:MyAjax.security,post_id:submit1_value,count_value:e};jQuery.post(MyAjax.ajaxurl,t,function(e){jQuery(".like_content").empty(),jQuery(".like_content").append(e)})}),submit2.click(function(){if(jQuery('input[name="dislike_button"]').is(":checked")){var e=1,i=0;jQuery('input[name="dislike_button"]').addClass("checked_box"),jQuery('input[name="like_button"]').removeClass("checked_box")}else{e=0;jQuery('input[name="dislike_button"]').removeClass("checked_box")}var t={action:"my_action",dislike:1,like:0,like_remove:0,like_dislike_checked:i,security:MyAjax.security,post_id2:submit2_value,count_value2:e};jQuery.post(MyAjax.ajaxurl,t,function(e){jQuery(".dislike_content").empty(),jQuery(".dislike_content").append(e)})});
    });
    
</script>
<!--boxchat tawk.to desktop-->
<a class="btn__chat_desktop" href="javascript:void(Tawk_API.toggle())"><img style="margin-right:5px" src="https://vienthammydiva.vn/wp-content/themes/divaspa/./images/chat-footer.svg"> Chat ngay <span class="talked_number" style="display: inline;">2</span></a>
<!--End boxchat tawk.to desktop-->

<?php
  get_footer();
?>