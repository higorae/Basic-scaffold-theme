<?php get_header(); ?>
<div id="col-mid">
    <h1>notícias</h2>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', '' ); ?>
	<?php endwhile; ?>
	<?php //wp_pagenavi(); ?>
</div> <!-- fim col-mid -->
<?php get_footer(); ?>