<!DOCTYPE html>

<html lang="en">

<head> 
	<title></title>
	
</head>

<body>

	<!-- FORM TO ADD ITEMS TO DATABASE --> 
	<h2>Create</h2>
		<?php echo form_open('site/create'); ?>
		
		<p>
		
			<label for="title">Title</label>
			<input type="text" name="title" id="title" />
		
		</p>
		
		<p>
			<label for="content">Content: </label>
			<input type="text" name="contents" id="contents"?>
		</p>
		
		<p>
			<label for="author">Author: </label>
			<input type="text" name="author" id="author"?>
		</p>
		
		<p>
			
			<input type="submit" value="Submit"?>
			
		</p>
		
		<?php echo form_close(); ?>
		
		<hr/>
		
		<!-- FORM TO RETURN DATABASE ITEMS -->
		<h2>Read</h2>
		<?php if(isset($records)) : foreach($records as $row) : ?>
		
			<!-- Anchor shows path to controller method and $row->id is the value id to hand off to the delete function in controller, hyper linking title
			as the trigger for deleting in options view -->
			<h2><?php echo anchor("site/options/delete/$row->id", $row->title); ?> </h2>
			
			<div><?php echo $row->contents; ?> </div>
			
		<?php endforeach; ?>
		<?php else : ?>
		
			<h2>No records were returned </h2>
			
		<?php endif; ?>
		
		<hr/>
		
		<!-- DELETING FROM DATABASE! --> 
		<h2> Delete </h2>
		
		<p>To sample the delete method, simply clock on one of the heading listed above. A delete query will run </p>
			
			
		
		
		
		
		
</body>

</html>