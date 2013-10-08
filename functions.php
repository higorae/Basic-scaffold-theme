<?php
    @define( 'PARENT_DIR', get_template_directory() );
    @define( 'PARENT_URL', get_template_directory_uri() );

    if ( !function_exists( 'optionsframework_init' ) ) {
    	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
    	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
    }
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
    
    /*
    * Adiciona arquivos css
    */
    function _css($files = array(), $echo = true)
    {
      $return = '## CSS files';
      foreach($files as $file) {
        $end = end(explode(".", $file));
        
        if($end == "less") {
          $rel = "stylesheet/less";
        } else {
          $rel = "stylesheet";
        }
        $return .= "<link rel='{$rel}' href='". get_bloginfo('template_url')."/lib/css/{$file}' type='text/css' media='screen' />\n";
      }
      $return = '## end CSS files';
      
      if($echo) {
        echo $return;
      } else {
        return $return;
      }
    }