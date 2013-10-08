<?php
/**
 * Ativar Add-ons
 * Aqui você pode entrar os seus códigos de ativação para destravar Add-ons para usar no seu tema. 
 * Já que todos os códigos são licenças para múltiplos sites, é permitido que você coloque sua chave em temas premium. 
 * Use o código comentado para atualizar a base de dados com o seu código de ativação. 
 * Você pode colocar o código dentro de uma declaração IF que apenas rode com a ativação do tema. 
 */ 
// if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', "xxxx-xxxx-xxxx-xxxx");
// if(!get_option('acf_options_page_ac')) update_option('acf_options_page_ac', "xxxx-xxxx-xxxx-xxxx");
// if(!get_option('acf_flexible_content_ac')) update_option('acf_flexible_content_ac', "xxxx-xxxx-xxxx-xxxx");


/**
 * Registra grupos de campos
 * A função register_field_group aceita 1 array que contém a informação relevante para registrar o grupo de campo
 * Você pode editar o array como você quiser. Entretanto, isso pode resultar em erros se o array não for compatível com o ACF
 * Esse código precisa rodar toda vez que o functions.php é lido
 */
if(function_exists("register_field_group"))
{
	register_field_group(array (
	  'id' => '500097223bebc',
	  'title' => 'album de fotos',
	  'fields' => 
	  array (
	    0 => 
	    array (
	      'key' => 'field_4ffedd592b6cd',
	      'label' => 'Texto',
	      'name' => 'texto',
	      'type' => 'wysiwyg',
	      'instructions' => '',
	      'required' => '0',
	      'toolbar' => 'full',
	      'media_upload' => 'no',
	      'order_no' => '0',
	    ),
	    1 => 
	    array (
	      'key' => 'field_4ffeda3a88f9c',
	      'label' => 'Galeria',
	      'name' => 'galeria',
	      'type' => 'gallery',
	      'instructions' => '',
	      'required' => '1',
	      'preview_size' => 'thumbnail',
	      'order_no' => '1',
	    ),
	  ),
	  'location' => 
	  array (
	    'rules' => 
	    array (
	      0 => 
	      array (
	        'param' => 'post_type',
	        'operator' => '==',
	        'value' => 'fotos',
	        'order_no' => '0',
	      ),
	    ),
	    'allorany' => 'all',
	  ),
	  'options' => 
	  array (
	    'position' => 'normal',
	    'layout' => 'default',
	    'hide_on_screen' => 
	    array (
	      0 => 'the_content',
	      1 => 'excerpt',
	      2 => 'custom_fields',
	      3 => 'discussion',
	      4 => 'comments',
	      5 => 'slug',
	      6 => 'author',
	      7 => 'format',
	      8 => 'featured_image',
	    ),
	  ),
	  'menu_order' => 0,
	));
}	
?>