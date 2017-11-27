<?php /* Template Name: About Me */ ?>
<?php get_header('about'); ?>

<?php if ( have_posts() ) : ?>
	<section id="page">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part("parts/page/content"); ?>
            <?php get_template_part("parts/page/aboutme/aboutmecontent");?>
		<?php endwhile; ?>
	</section>
<?php endif; ?>

<?php get_footer(); ?>