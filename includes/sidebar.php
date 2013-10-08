<?php
	$sidebars = array(
			array(
				'name'          => sprintf(__('Sidebar widget 1'), $i ),
				'id'            => 'sidebar widget 1',
				'description'   => '',
				'before_widget' => false,
				'after_widget'  => false,
				'before_title'  => false,
				'after_title'   => false
			),
	);
	
	foreach ($sidebars as $args) {
		register_sidebar($args);
	}
	

?>