<?php set_header() ?>

<div class="container">
	<h1> Register </h1>
	<form action="/registerUser" method="POST">
		<div class="form-group">
			<label for="fname">Name:</label>
			<input type="text" name="name" class="form-control" id="fname" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="email">Email Address:</label>
			<input type="email" name="email"  class="form-control" id="email" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password"  class="form-control" id="pwd" autocomplete="off">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	<br>
	<?php displayErrors();?>
</div>

<?php set_footer(); ?>