<?php /* Template Name: Resume */ ?>
<?php get_header('resume'); ?>

<?php if ( have_posts() ) : ?>
	<section id="page">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part("parts/page/content"); ?>
			<?php get_template_part("parts/page/resume/resumecontent"); ?>
		<?php endwhile; ?>
	</section>
<?php endif; ?>

<?php get_footer(); ?>