<?php
	function codex_custom_init() {
		$menu_position = 5;
		$public = true;
		$default_args = array(
			'public' => $public, 
			'menu_position' => $menu_position,
			'has_archive' => true,
			'rewrite' => true,
			'taxonomies' => array('category')
		);
	    $post_type_args = array( 
                'promocoes' => array('label' => 'Promoções'),
                'unidades' => array('label' => 'Unidades'),
                'servicos' => array('label' => 'Serviços'),
		);
		foreach($post_type_args as $post_type => $c){
			$args = array_merge($c, $default_args);
	    	register_post_type( $post_type, $args );
		}
		
		
        // add_post_type_support('fotos','comments');
		
	  flush_rewrite_rules();
	}
	add_action( 'init', 'codex_custom_init' );
	
	function my_rewrite_flush() {
	    flush_rewrite_rules();
	}
	add_action( 'after_switch_theme', 'my_rewrite_flush' );
	
	function mySearchFilter($query) 
	{
	    if ($query->is_search) {
	        $query->set('post_type', array('fotos', 'post'));
	    }
	    return $query;
	}

	add_filter('pre_get_posts','mySearchFilter');
?>