<?php set_header(); ?>
<div class="container">
	<h1><?php echo $_SESSION['name'] ?> Logged In </h1>
	<a href="/logout">Log Out</a>
	<?php
	if (isset($data['error'])) {
		print "<pre>";
		foreach ($data['error'] as $key => $value) {
			print $value . "<br>";
		}
		print "</pre>";
	}

	if (isset($data['success'])) {
		print "<pre>";
		print $data['success'] . "<br>";
		print "</pre>";
	}
	?>
</div>

<?php set_footer(); ?>