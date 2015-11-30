<?php
/**
 * The Homepage
 *
 * @package Rainy's Portfolio
 */

get_header(); ?>

<!--body of front page-->
<section class="hero-content">
	<div class="hero-text">
		<p>Rainy is a 23-year-old UX designer based in Vancouver BC, where she studies, lives and enjoy good coffee.</p>
	</div>
	<div class="hero-image">
		<button class="hero-scroll">Scroll down to see my work</button>
	</div>
</section>

<section class="page-content">
	<h2 class="fp-title">My Works</h2>
	<div class="fp-image-box grid-2_xs-1">
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-ubo.jpg"/>
			<div class="fp-mask"></div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-plants.jpg"/>
			<div class="fp-mask"></div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-opentable.jpg"/>
			<div class="fp-mask"></div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-camping.jpg"/>
			<div class="fp-mask"></div>
		</div>
	</div>
	<button class="read-more-btn">Read More</button>
</section>

<?php get_footer(); ?>