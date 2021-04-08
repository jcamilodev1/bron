<?php get_header('wordpress'); ?>
<?php // ↓↓↓ Loop Example  ?>
<?php if ( have_posts() ) : the_post(); ?>
	<section>
		<?php the_content(); ?>
	</section>
<?php endif; ?>

<?php get_footer(); ?>