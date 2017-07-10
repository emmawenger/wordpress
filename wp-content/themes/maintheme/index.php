<?php get_header(); ?>

<?php error_log('test'); ?>

<?php if ( have_posts() ) : ?>
    <section id="blog">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part("parts/post"); ?>

        <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
