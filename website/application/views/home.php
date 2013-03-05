<!DOCTYPE html>

<html>

	<head>
	
	<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
	
	<title>Website</title>
	
	</head>
	
	<body>
	
		<div id="container">
			
			<p>View has been loaded</p>
			
			<!-- Loading blog titles -->
			<?php foreach($records as $row): ?>
				<h1><?php echo $row->title; ?> </h1>
			<?php endforeach ?>
			
		</div>
		
	</body>
	
</html>
	