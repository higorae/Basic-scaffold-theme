<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
    	/*
    	* Print the <title> tag based on what is being viewed.
    	*/
    	global $page, $paged;

    	wp_title( '|', true, 'right' );

    	// Add the blog name.
    	bloginfo( 'name' );

    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";

    	// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/lib/css/boilerplate.css?v=2"/>
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url') ?>/lib/css/styles.less">
        <script src="<?php bloginfo('template_url') ?>/lib/js/less-1.3.0.min.js" type="text/javascript"></script>
        
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php wp_head() ?>
	</head>

	<body>
		
        <div class="page center">
            <!-- ======================================================================================= -->
            <!--                                                                                 HEADER  -->
            <!-- ======================================================================================= -->
            <div id="header">
                <a id="logo" href="<?php echo home_url(); ?>"></a>
            </div>    
            
            <div id="main">