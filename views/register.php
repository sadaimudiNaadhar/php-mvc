<?php 
	include 'header.php';
?><div class="container">
	<h1> Register </h1>
	<form action="/register" method="POST">
		<div class="form-group">
			<label for="fname">Name:</label>
			<input type="text" name="name" class="form-control" id="fname">
		</div>
		<div class="form-group">
			<label for="email">Email Address:</label>
			<input type="email" name="email"  class="form-control" id="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password"  class="form-control" id="pwd">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form><?php 
	if(isset($data['error'])) { 
		print "<pre>";
		foreach ($data['error'] as $key => $value) {
			print $value."<br>";
		}
		print "</pre>";	
	}

	if(isset($data['success'])) { 
			print "<pre>";
			print $data['success']."<br>";
			print "</pre>";
	}
?></div>

<?php include 'footer.php'; ?>