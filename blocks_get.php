<?php

/* establish the mysql connection */
require_once 'mysql_connect.php';

/* get all blocks and return in json */
function getBlocks() {

	$blocks = mysql_query("SELECT * FROM blocks ORDER BY order_id ASC");
	
	$columns = array();
	
	while($block = mysql_fetch_array($blocks, MYSQL_ASSOC))
	{
		$columns[$block['column_id']][] = $block['block_id'];
	}
	
	if (!function_exists('json_encode')) die('your server does not support json');
		
	return json_encode($columns);
}

?>