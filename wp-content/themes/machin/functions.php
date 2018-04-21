<?php 

//=================================================
//======== CHARGEMENT DES SCRIPTS
//=================================================
define('LGMAC_VERSION', '1.0.0');
function lgmac_scripts(){
	//array('lgmac_bootstrap-core') pour indiquer que le fichier style.css dépend du fichier bootsrtap, c'est ce dernier qui sera chargé en premier
	wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core'), LGMAC_VERSION, 'all');
	wp_enqueue_style('lgmac_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'lgmac_scripts');