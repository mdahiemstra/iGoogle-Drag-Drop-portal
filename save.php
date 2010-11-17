<?

/*

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `unique_id` int(11) NOT NULL auto_increment,
  `block_id` varchar(255) NOT NULL default '',
  `column_id` varchar(255) NOT NULL default '',
  `order_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`unique_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` VALUES(1, 'block-1', 'column-1', 0);
INSERT INTO `blocks` VALUES(2, 'block-3', 'column-2', 0);
INSERT INTO `blocks` VALUES(3, 'block-2', 'column-3', 0);
INSERT INTO `blocks` VALUES(4, 'block-4', 'column-2', 1);

*/

/* connect to mysql */
$link = mysql_connect('localhost', 'root', '') or die('DB Connection failed');
mysql_select_db('jsportal');

$data = $_POST;

foreach ($data as $row) 
{
	/* split up in segments */
	$segments = explode(':', $row);
	
	/* define the column */
	$column_id = $segments[0];
	
	/* the blocks */
	$blocks = explode(',', $segments[1]);
	
	/* we take each block */
	foreach ($blocks as $order_id => $block_id)
	{
		/* check if the block is already present in the database */
		$block_exists = mysql_fetch_row(mysql_query("SELECT * FROM blocks WHERE block_id = '{$block_id}'"));
		
		/* if not, we insert it */
		if ($block_exists == FALSE) 
		{
			if (empty($block_id)) return;
			
			mysql_query("INSERT INTO blocks (block_id, column_id, order_id) VALUES ('{$block_id}', '{$column_id}', {$order_id})");
			echo "Moved block: {$block_id} to column: {$column_id} and updated rank to: {$order_id}<br />";
		}
		/* or else we update it */
		else 
		{
			if (empty($block_id)) return;
			
			mysql_query("UPDATE blocks SET block_id = '{$block_id}', column_id = '{$column_id}', order_id = {$order_id} WHERE unique_id = ".$block_exists[0]);
			echo "Moved block: {$block_id} to column: {$column_id} and updated rank to: {$order_id}<br />";
		}
	}
	
}

?>