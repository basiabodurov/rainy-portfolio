<?php
/**
 * The Homepage
 *
 * @package Rainy's Portfolio
 */

get_header(); ?>

<!--body of front page-->
<div id="under-nav"></div>
<section class="hero-content">
	<div class="hero-text">
		<p>Rainy is a 23-year-old UX designer based in Vancouver BC, where she studies, lives and enjoy good coffee.</p>
	</div>
	<div class="hero-image">
		<a href="#hero-scroll-dest" class="smoothScroll hero-scroll">Scroll down to see my work</a>
	</div></a>
</section>

<section class="page-content">
	<a class="hero-scroll-dest" name="hero-scroll-dest"></a>	
	<h2 class="fp-title">My Works</h2>
	<div class="fp-image-box grid-2_xs-1">
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-ubo.jpg"/>
			<div class="fp-mask">
				<p>eCommerce Redesign</p>
				<h3>Urban Body Organics</h3>
				<button class="white-border-btn">Case Study</button>
			</div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-garden.png"/>
			<div class="fp-mask">
				<p>Coming Soon</p>
				<h3>Coming Soon</h3>
				<button class="white-border-btn">Coming Soon</button>
			</div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-opentable.jpg"/>
			<div class="fp-mask">
				<p>eCommerce Redesign</p>
				<h3>OpenTable</h3>
				<button class="white-border-btn">Case Study</button>
			</div>
		</div>
		<div class="fp-image-container col-6_xs-12">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mainpage/fp-camping.png"/>
			<div class="fp-mask">
				<p>eCommerce Redesign</p>
				<h3>MEC</h3>
				<button class="white-border-btn">Case Study</button>
			</div>
		</div>
	</div>
	<button class="read-more-btn">Read More</button>
</section>

<?php get_footer(); ?>