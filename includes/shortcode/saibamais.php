<?php
	//Shortcode que lista as notícias que possuem as mesmas tags.
	function getSaibaMais( $atts ) {
		global $post;
		
		$tags_id = wp_get_post_tags($post->ID, array('fields' => 'ids'));
		
		$html = '<div class="boxsaibamais">
			<div class="saibamais">
				Saiba mais
			</div><!--.saibamais-->
			<ul class="outrossaiba">';
					;
					$saibamais_args =  array(
						'tag__in' => $tags_id,
						'post__not_in' => (array)$post->ID,
						'posts_per_page' => $atts['total'],
					);
					
					$saibamais = new WP_Query($saibamais_args);
					$ultimo = end($saibamais);
					$aux = 0;
					
					if($saibamais->have_posts()) while($saibamais->have_posts()): $saibamais->the_post();
						$aux++;
						if($aux == $saibamais->post_count) { 
							$class = 'class="endmais"'; 
						} else {
							$class = '';
						}
					$html .= '<li '. $class . '>
						<a href="' . get_permalink() . '">' .get_the_title(). '</a>
					</li>';
				endwhile;
				
		$html .= '</ul><!--.outrossaiba--></div><!--.boxsaibamais-->';
		
		return $html;
		
	}
	add_shortcode( 'saibamais', 'getSaibaMais' );
?>