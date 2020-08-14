<?php 
	/*
		Template Name: Tin tức
	*/
get_header(); ?>

<section class="page__tintuc">
	<div class="container">
		<div class="row-divide">
		<?php
            $current_page = get_queried_object();

            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$args = array(
                'paged'         => $paged,
                'posts_per_page' => 12,
                'cat' => 2,
                'order'         => 'date',
                'post_type'     => 'post',
                'post_status'   => 'publish',
			);
			$query_new = new WP_Query($args);
			if( $query_new->have_posts() ) :
				while( $query_new->have_posts() ) : 
					$query_new->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
					<div class="col-divide-4 page__tintuc-all col-divide-md-6  col-divide-sm-12">
						<div class="page__tintuc-img">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $url;?>"></a>
						</div>
						<div class="page__tintuc-date">
							<i class="fas fa-calendar-alt"></i> <?php the_date(); ?>
						</div>
						<div class="page__tintuc-smalltitle">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="page__tintuc-content">
							<?php echo wp_trim_words(trim(strip_tags(get_the_content())), 25, ' […]'); ?>
						</div>
						<a href="<?php the_permalink(); ?>">ĐỌC TIẾP →</a>
					</div>
			<?php endwhile; ?>

            <?php
                echo '<nav class="navigation pagination" role="navigation" aria-label="Bài viết" style="display:block !important;">';
                echo '<h2 class="screen-reader-text">Điều hướng bài viết</h2>';
                echo '<div class="nav-links">';
                $start_page = 1;
                $end_page = $query_new->max_num_pages;
                if($paged - 2 > $start_page)
                {
                    $start_page = $paged - 2;
                }
                if($paged + 2 < $end_page)
                {
                    $end_page = $paged + 2;
                }
                if($paged > $start_page)
                {
                    echo '<a class="prev page-numbers" href="'. get_bloginfo( 'wpurl' ).'/tin-tuc/page/'. ($paged - 1) .'/">Trước</a>';
                }
                for ($i = $start_page; $i <= $end_page; $i++) {
                    if($paged == $i)
                    {
                        echo '<span aria-current="page" class="page-numbers current">'. $i.'</span>';
                    }
                    else{
                        echo '<a class="page-numbers" href="'. get_bloginfo( 'wpurl' ).'/tin-tuc/page/'.$i.'/">'.$i.'</a>';
                    }
                }
                if($paged < $end_page)
                {
                    echo '<a class="next page-numbers" href="'. get_bloginfo( 'wpurl' ).'/tin-tuc/page/'. ($paged + 1) .'/">Tiếp Theo</a>';
                }
                echo '</div>';
                echo '</nav>';
                wp_reset_postdata();
            ?>
		<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>