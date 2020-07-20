<?php set_header() ?>

<div class="container">
	<h1> Login </h1>
	<form action="login" method="POST">
		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email"  class="form-control" id="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="pwd">
		</div>
		<div class="checkbox">
			<a href="register">Register</a>
		</div>

		<input type="hidden" name="doAction" value="logMeIn" id="pwd">
		<button type="submit" class="btn btn-default">Submit</button>
	</form><?php 
		if(isset($data['error'])) { 
			print "<pre>";
			foreach ($data['error'] as $key => $value) {
				print $value."<br>";
			}
		}

		if(isset($data['success'])) { 
			print "<pre>";
			print $data['success']."<br>";
			print "</pre>";
		}
?></div>

<?php set_footer(); ?>