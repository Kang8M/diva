<?php 
	/*
		Template Name: Liên hệ
	*/
get_header(); ?>

<section class="top_backgroud_sgchuoicoso">
	<div class="container">
		<div class="sp-title">
			<h4 class="" text--upcase=""><?php echo get_field('lienhe_title', 'option');?></h4>
		</div>
	</div>
	<div class="sgchuoicoso--bg">
	</div>
</section>
<section class="sg__chuoicoso" id="chuoiCoSo">
	<div class="container">
		<div class="single__page-breadcum">
			<span><a href="https://vienthammydiva.vn"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Trang chủ</a></span><span style="margin-left: 5px;"></span>
			<span><i class="fas fa-angle-double-right"></i></span>
			<span><?php echo get_field('lienhe_title', 'option');?></span>
		</div>
		<h3 class="title--section text--upcase"><?php echo get_field('lienhe_title_content', 'option');?></h3>
		<div class="chuoicoso__contain" >
			<?php
				$a = get_field('lienhe_items', 'option');
				if(!empty($a)) {
				foreach ($a as $value) {
			?>
			<div class="chuoicoso__list">
				<h4 class="title--item text--upcase"><a href="javascript:void(0);"><i class="fas fa-building"></i>&nbsp;&nbsp;<?php echo $a['location']?></a></h4>
				<?php
					if(!empty($value['items'])) {
					foreach ($value['items'] as $k => $v1) {
				?>
				<div class="chuoicoso__item">
					<p class="text--upcase"><a href=""><b>Cở sở <?php echo ++$k;?>:</b><?php echo $v1['address']?></a></p>
					<p>
						<b>Hotline:</b><a href="tel:<?php echo $v1['hotline']?>"><?php echo $v1['hotline']?></a><a href="tel:"></a>
						<a href="tel:<?php echo $v1['hotline_2']?>"><?php echo $v1['hotline_2'] ? ' - ' . $v1['hotline_2'] : '';?></a><a href="tel:"></a>
					</p>
				</div>
				<div class="chuoicoso__item-social">
					<div class="row-divide">
						<div class="col-divide-6 text--center face--bookic">
							<a href="<?php echo $v1['facebook']?>"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="col-divide-6 text--center zalo--ic">
							<a href="<?php echo $v1['zalo']?>"><span>Zalo</span></a>
						</div>
					</div>
				</div>
				<?php
					} }
				?>
			</div>
			<?php
				} }
			?>
		</div>
	</div>
</section>
<script src="<?php echo bloginfo('template_url')?>/assets/js/magic-grid.min.js"></script>
<script>
	var magicGrid = new MagicGrid({

		container: document.querySelector('.chuoicoso__contain'),

		animate: true,

		gutter: 30,

		static: true,

		useMin: true

	});

	magicGrid.listen();

</script>

<?php get_footer(); ?>	