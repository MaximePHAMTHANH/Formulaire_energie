<?php
/*
Plugin Name: Economies
Plugin URI: 
Description: Economies
Author: Maxime Pham Thanh
Author URI: 
Version: 1.0
*/

if (!defined('ABSPATH') ){
	die;
}

include 'Main.php';

class EconomiesPluging{

	function __construct(){
		add_action('admin_menu',array($this,'EconomiesMenu'));
	}

	function EconomiesMenu(){
		add_menu_page('Forms','Economies','manage_options','EconomiesMenu',array($this,'EconomiesMenu_main'),'dashicons-awards',4);
	}

	function EconomiesMenu_main(){
		echo '<div><h2>Economies is active</h2></div>';
	}


}


if (class_exists('EconomiesPluging')){
	$Economies = new EconomiesPluging();
}

