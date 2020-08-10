<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $options;
foreach ($options as $value) {
	if(get_settings($value['id']) === FALSE || get_settings($value['id'])==''){
		$$value['id'] = stripslashes($value['value']); 
	}else{ 
		$$value['id'] = get_settings( $value['id'] ); 
	}
}

get_header(); ?>
<div class="full-content">
	<div class="inner-content inner-container">
		<div class="wrap-content">
			<div class="content-row-2">
				<div class="inner-container inner-content">
					<?php get_sidebar();?>

					<section class="box-content">
						<div class="cate-info">
							<h1 class="cate-title">
								<?php single_cat_title();?>
							</h1>
							<?php
								$category = get_the_category();
								$cate_id = $category[0]->cat_ID;
							?>
						</div>

						<div class="cate-content">
							<?php if(have_posts()): while ( have_posts() ) : the_post(); ?>
								<?php get_template_part('content','cat'); ?>
							<?php
							endwhile;
							endif;
							wp_pagination();
							?>
						</div><!--cate-content-->
					</section><!--content-box-->
				</div>
			</div>

		</div><!--wrap-content-->
	</div><!--inner-container-->
</div><!--full-content-->
<?php get_footer(); ?>