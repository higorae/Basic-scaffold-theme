<?php get_header(); ?>
<div id="col-mid">
	<div class="texto">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', '' ); ?>
		<?php endwhile; ?>
		<?php wp_pagenavi(); ?>
	</div>
</div> <!-- fim col-mid -->
<?php get_footer(); ?>