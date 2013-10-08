<?php
    @define( 'PARENT_DIR', get_template_directory() );
    @define( 'PARENT_URL', get_template_directory_uri() );

    if ( !function_exists( 'optionsframework_init' ) ) {
    	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
    	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
    }
    require_once(PARENT_DIR . "/includes/helpers.php");
    require_once(PARENT_DIR . '/includes/shortcode/gallery.php');
    require_once(PARENT_DIR . '/includes/post-types.php');
    
    function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
      register_nav_menu('menu-rodape',__( 'Menu rodapé' ));      
    }
    add_action( 'init', 'register_my_menu' );
    
    //Crop image
    add_image_size('item', '590', '145', true);     
    
    function new_excerpt_more( $more ) {
    	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><strong>Ler mais</strong></a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );