<!DOCTYPE html>

<html>

	<head>
		<title></title>
	
		<!-- inline styling only for this purpose -->
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" charset="utf-8">
	
	</head>
	
<body>

	
	<div id="newsletter_form">
	<h2>Signup for the Newsletter</h2>
		<!-- Use helper, form_open and give controller/method -->
		<!-- THIS IS THE SOURCE :http://localhost:8888/ci/index.php/index.php/email/send -->
		<!-- IT SHOULD BE: http://localhost:8888/ci/website/index.php/email/send  -->
		<?php echo form_open('email/send'); ?>
			
			<!-- Info tags -->
			<?php
			
			$name_data = array(
				'name' => 'name',
				'id' => 'name',
				'value' => set_value('name')// repopulates previous inputted items
			);
			
			
			?>
			
			<p><label for="name">Name: </label><?php echo form_input($name_data); ?></p>
			
			<p><label for="name">Email Address: </label> 
				<input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
			</p>
			
			<!--						name	value 	 -->
			<p><?php echo form_submit('submit', "Submit"); ?>
						
		<?php echo form_close(); ?>
		
		<?php echo validation_errors('<p class="error">');  ?>
	
	</div><!-- END NEWSLETTER FORM -->
</body>

</html>

