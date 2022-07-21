<?php

function get_from_field($field){

	global $wpdb;

	// Last ID
	$id = $wpdb->get_var( 'SELECT id FROM ' . $wpdb->prefix . 'frm_item_metas' . ' ORDER BY id DESC LIMIT 1');

	//Form entry item
	$value = $wpdb->get_var( $wpdb->prepare(" SELECT item_id FROM {$wpdb->prefix}frm_item_metas WHERE ID = $id ") );

	//Searching all entries to find the field's answer
	$increm=0;
	$value_while_id = $wpdb->get_var( $wpdb->prepare(" SELECT item_id FROM {$wpdb->prefix}frm_item_metas WHERE ID = $id-$increm ") );
	while ($value_while_id==$value){	
			$value_while_id = $wpdb->get_var( $wpdb->prepare(" SELECT item_id FROM {$wpdb->prefix}frm_item_metas WHERE ID = $id-$increm ") );
			$value_while_field = $wpdb->get_var( $wpdb->prepare(" SELECT field_id FROM {$wpdb->prefix}frm_item_metas WHERE ID = $id-$increm ") );			
			if ($value_while_field==$field){
				$value_while_meta = $wpdb->get_var( $wpdb->prepare(" SELECT meta_value FROM {$wpdb->prefix}frm_item_metas WHERE ID = $id-$increm ") );
				return $value_while_meta;	
				}
		$increm++;
		}
}