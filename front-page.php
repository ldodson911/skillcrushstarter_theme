<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
				<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<div style="text-align:center" class="social-btns">
			<a href="https://twitter.com/LDodson911" class="soc-icon tw"></a>
			<a href="https://www.facebook.com/I-am-9-1-1-259506634134501/" class="soc-icon fb"></a>
			<a href="https://www.linkedin.com/in/ldodson911" class="soc-icon ln"></a>
			</div>
		<!-- replacing site_url with home_url so that the View My Blog link navigates domain-mapped location of the wordpress site -->
		<!-- replaced home_url and '/index.php/blog/' with /blog/ to test WP Engine install -->
		<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>	
		<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>