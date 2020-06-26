<?php
function
jo_head($title) {
?>
	<html>
		<head>
			<title>Joe's own website - <?php echo "$title"; ?></title>
			<link rel="stylesheet" type="text/css" href="css/site.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		<meta charset="UTF-8">
		</head>
		<body>
			<div class="fullpage">
				<header>
					<h1><a href="index.php">Joe's dev blog - <?php echo "$title"; ?></a></h1>
				</header>
<?php
}

function
jo_sidebar() {
?>

	<div class="sidebar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="">C</a></li>
			<li><a href="">C++</a></li>
			<li><a href="">Lisp</a></li>
			<li><a href="">Assembly</a></li>
			<li><a href="">UNIX</a></li>
			<li><a href="">GNU Emacs</a></li>
			<li><a href="">My projects</a></li>
			<li><a href="">My C/C++ style</a></li>
			<li><a href="links.php">Links</a></li>
		</ul>
	</div>
<?php
}

function
jo_footer() {
?>
	<footer>
		<p>
			Copyright &copy; 2020, Joe -
			see <a href="license.php">LICENSE</a> -
			we do not use cookies
		</p>
	</footer>
			</div>
		</body>
	</html>
<?php
}
?>
