<!DOCTYPE html>

<html>

	<head>
	
	<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
	
	<title>Website</title>
	
	</head>
	
	<body>
	
		<div id="container">
			
			<p>View has been loaded</p>
			
			<!-- Displaying database data -->
			<?php foreach($rows as $r): ?>
			
			<h1><?php echo $r->title; ?> </h1>
			<div><?php echo $r->contents; ?></div>
			
			<?php endforeach ?>
			
			</b>
			
			<!-- Show all the users! -->
			<div>
				<h2>Here are all the users!</h2>
				<?php foreach($users as $u): ?>
								
				<h3><?php echo $u->author; ?></h3>
				
				<?php endforeach ?>
			
			</div>
			
		</div>
		
	</body>
	
</html>
	