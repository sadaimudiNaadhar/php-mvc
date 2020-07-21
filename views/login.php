<?php set_header() ?>

<div class="container">
	<h1> Login </h1>
	<form action="login" method="POST">
		<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" name="email"  class="form-control" id="email" required>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="pwd" required>
		</div>
		<div class="checkbox">
			<a href="register">Register</a>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	<br>
	<?php displayErrors();?>
</div>

<?php set_footer(); ?>