<div class="post">
    <div class="titulo-post">
        <!-- <span><?php echo get_the_date('j \d\e F \d\e Y à\s\ H:i') ?></span> -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div><!--.titulo-post-->
	<p><?php the_content(); ?></p>
	<div class="clearfix"></div>
</div>
<?php //comments_template( '', true ); ?>
<div class="clearfix"></div>