<?php /* Template Name: Skillset */ ?>
<?php get_header('skillset'); ?>

<?php if ( have_posts() ) : ?>
	<section id="page">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part("parts/page/content"); ?>
			<?php get_template_part("parts/page/skillset/skillsetcontent"); ?>
		<?php endwhile; ?>
	</section>
<?php endif; ?>

<?php get_footer(); ?>