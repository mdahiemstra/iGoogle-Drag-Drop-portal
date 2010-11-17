<?

/* connect to mysql */
$link = mysql_connect('localhost', 'root', '') or die('DB Connection failed');
mysql_select_db('jsportal');

/* you could customize this function to get blocks for a specific page or something */
function getBlocks() {

	/* get blocks and order by columns */
	$blocks = mysql_query("SELECT * FROM blocks ORDER BY order_id ASC");
	
	$columns = array();
	
	while($block = mysql_fetch_array($blocks, MYSQL_ASSOC))
	{
		$columns[$block['column_id']][] = $block;
	}
		
	/* create settings array in javascript style */
	$settings = array();
	
	$block_data = array();
	
	foreach ($columns as $column_name => $blocks)
	{
		$block_to_settings = array();
					
		foreach ($blocks as $block)
		{				
			$block_to_settings[] = '\''.$block['block_id'].'\'';
		}
		
		
		$settings[] = '\''.$column_name.'\'' . ':[' . implode(',', $block_to_settings).']';
	}
	
	return implode(',', $settings);
}

?>