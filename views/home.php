<?php set_header(); ?>
<div class="container">
	<h1><?php echo $_SESSION['name'] ?> Logged In </h1>
	<a href="/logout">Log Out</a>
</div>

<?php set_footer(); ?>