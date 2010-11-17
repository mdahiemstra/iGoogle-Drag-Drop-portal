<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>iGoogle like Drag & Drop Portal v3 by Michel Hiemstra</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Michel Hiemstra (mhiemstra@php.net)" />
		<meta name="keywords" content="drag&drop portal, igoogle drag and drop, igoogle, drag and drop div igoogle javascript, drag and drop block like igoogle, div drag drop" />
		<meta name="description" content="iGoogle like Drag & Drop Portal v3 by Michel Hiemstra" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js"></script>
		<script type="text/javascript" src="js/portal.js"></script>
		
		<? require_once 'blocks_get.php'; ?>
		
		<script type="text/javascript">
			var settings 	= <?=getBlocks()?>;
			
			var options 	= { portal 			: 'columns', 
								editorEnabled 	: true, 
								saveurl 		: 'blocks_save.php' };
								
			var data 		= {};
						
			var portal;
					
			Event.observe(window, 'load', function() {
				portal = new Portal(settings, options, data);
			});
		</script>
		
		<link rel="stylesheet" href="css/style.css"  type="text/css" media="screen" />
		<link rel="stylesheet" href="css/portal.css"  type="text/css" media="screen" />
	</head>
	<body>
	
		<div id="wrapper">
			<div id="headnote">
					<h1>iGoogle-like Drag &amp; Drop Portal v3</h1>
	
					<h2>based on prototype and scriptaculous. By <a href="http://michelhiemstra.nl/" target="_blank">Michel Hiemstra</a>.</h2>
			</div>
			
			<div style="clear:both;"></div>

			<hr />
			
			<!-- This is the part you want -->
			
			<div id="columns">
				
				<div id="column-1" class="column menu"></div>
				
				<div id="column-2" class="column blocks"></div>
				
				<div id="column-3" class="column sidebar"></div>
				
				
				<div class="portal-column" id="portal-column-block-list" style="display: none;">
					<div class="block" id="block-1">
						<h1 class="draghandle">Block 1</h1>
						<p>Block 1 data</p>
					</div>
					
					<div class="block" id="block-2">
						<h1 class="draghandle">Block 2</h1>
						<p>Block 2 data</p>
					</div>
					
					<div class="block" id="block-3">
						<h1 class="draghandle">Block 3</h1>
						<p>Block 3 data</p>
					</div>
					
					<div class="block" id="block-4">
						<h1 class="draghandle">Block 4</h1>
						<p>Block 4 data</p>
					</div>
				</div>
				
			</div>
			
			<!-- Above is the part you want -->
			
			<div style="clear:both;"></div>
			
			<hr style="margin-top: 40px;" />
			
			<div class="box">
				
				<h1>Debug information (no actual saving will be done in the demo):</h1>
				
				<p style="margin:0px;" id="data"></p>
				
			</div>
			
			<div style="clear:both; margin-bottom: 10px;"></div>
			
			<div class="box">
				
				<h1>Download</h1>
				
				<p>The source is <a href="https://github.com/mdahiemstra/iGoogle-Drag-Drop-portal" target="_blank">available</a> on github.com</p>
				
			</div>
			
			<div style="clear:both;"></div>	
			
			<div id="browser-support">
				Supported browsers: Just about all of them.
			</div>
			
			<div style="clear:both;"></div>	
			
			<div id="licence">
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>
			</div>
			
			<div id="donate">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="form">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8004562">
					My scripts are free, but feel free to buy me a beer, <a href="#" onclick="document.form.submit();">donate</a> (paypal)!
				</form>
			</div>
		</div>
		
	</body>
</html>