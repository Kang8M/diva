<?php 
	/*
		Template Name: Tin tức
	*/
get_header(); ?>

<div class="page page-tin-tuc">
	<div class="top-page">
	    <img src="<?php echo bloginfo('template_url')?>/assets/images/tin-tuc/bg-1.jpg">
	    <div class="bread-crumb">
	    	<a href="<?php echo get_bloginfo( 'wpurl' );?>">
	    		Trang chủ
	    	</a>
	    	<a> > </a>
		    <a href="<?php echo get_bloginfo( 'wpurl' );?>/gioi-thieu-chung">
		        Danh sách tin tức
		    </a>
	    </div>
	    <div class="page-header-title">
	    	TIN TỨC
	    </div>
	</div>

	<div class="page-title"">
		<h1>Tin nổi bật</h1>
	</div>

	<div class="page-row row-1">
		<div class="list-news">
			<div class="col-news">
				<?php
					$count = 0;
		            $args=array(
		                'posts_per_page' => 3, 
		                'cat' => 4,
		                'order' => 'desc'
		            );
		            $query_new = new WP_Query($args);
		            if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
		            	if ($count == 0) :
			            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			            $count++;
		          ?>
							<div class="news-large">
								<a href="<?php the_permalink(); ?>" class="news-img">
									<img src="<?php echo $url;?>">	
								</a>
								<div class="news-info">
									<a href="<?php the_permalink(); ?>" class="news-title">
										<?php the_title();?>
									</a>
									<div class="news-date">
										<span><?php the_time('j/m/Y'); ?></span>
									</div>
									<div class="news-des">
										<span><?php the_excerpt(); ?></span>
										<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
									</div>
								</div>				
							</div>
				<?php
					endif;
		            endwhile;
		            endif;
		        ?>
			</div>
			<div class="col-news">
				<?php
		            if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
		            	$count++;
		            	if ($count > 2) :
		              	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );		              	
		          ?>
						<div class="news">
							<a href="<?php the_permalink(); ?>" class="news-img">
								<img src="<?php echo $url;?>">	
							</a>
							<div class="col-news-1">
								<div class="news-info">
									<a href="<?php the_permalink(); ?>" class="news-title">
										<?php the_title();?>
									</a>
									<div class="news-date">
										<span><?php the_time('j/m/Y'); ?></span>
									</div>
									<div class="news-des">
										<span><?php the_excerpt(); ?></span>
										<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
									</div>
								</div>	
							</div>			
						</div>

				<?php
					endif;
		            endwhile;
		            endif;
		        ?>

			</div>
		</div>

		<div class="list-news-mobile">
			<div class="slider-1">
				<div class="swiper-wrapper">
					<?php
			            if( $query_new->have_posts() ) : while( $query_new->have_posts() ) : $query_new->the_post();
			              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			        ?>
					<div class="swiper-slide news">
						<a href="<?php the_permalink(); ?>" class="news-img">
							<img src="<?php echo $url;?>">	
						</a>
						<div class="news-info">
							<a href="<?php the_permalink(); ?>" class="news-title">
								<?php the_title();?>
							</a>
							<div class="news-date">
								<span><?php the_time('j/m/Y'); ?></span>
							</div>
							<div class="news-des">
								<span><?php the_excerpt(); ?></span>
								<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
							</div>
						</div>				
					</div>

					<?php
			            endwhile;
			            endif;
			        ?>

				</div>
			</div>

		</div>
	</div>

	<div class="page-title"">
		<h2>Tin khác</h2>
	</div>

	<div class="page-row row-2">
		<div class="wrap-row">
			<div class="list-news">
				<?php
		            $args2 = array(
		                'posts_per_page' => 9, 
		                'cat' => 3,
		                'order' => 'desc'
		            );
		            $query_new2 = new WP_Query($args2);
		            if( $query_new2->have_posts() ) : while( $query_new2->have_posts() ) : $query_new2->the_post();
		              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		        ?>

					<div class="news">
						<a href="<?php the_permalink(); ?>" class="news-img">
							<img src="<?php echo $url;?>">	
						</a>
						<div class="col-news-1">
							<div class="news-info">
								<a href="<?php the_permalink(); ?>" class="news-title">
									<?php the_title();?>
								</a>
								<div class="news-date">
									<span><?php the_time('j/m/Y'); ?></span>
								</div>
								<div class="news-des">
									<span><?php the_permalink(); ?></span>
									<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
								</div>
							</div>	
						</div>				
					</div>
				<?php
		            endwhile;
		            endif;
		        ?>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function() {
		var mySwiper = new Swiper ('.slider-1', {
	      loop: true,
	      spaceBetween: 10
	    });
	});
</script>

<?php get_footer(); ?>