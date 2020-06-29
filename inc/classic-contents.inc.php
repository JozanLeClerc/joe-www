<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : classic-contents.inc.php                         /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : Functions for contents on every page                   |     -->
<!--                                                           /       |     -->
<!--                                                           \       /     -->
<!--                                                            \_____/      -->
<!--                                                                         -->
<!-- ----------------------------------------------------------------------- -->

<?php
include "org.inc.php";

function
jo_head($title) {
	global $prefix;
?>
	<html>
		<head>
			<title>Joe's own website - <?php echo "$title"; ?></title>
			<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>css/site.css">
			<meta charset="UTF-8">
			<?php jo_org_inc(); ?>
		</head>
		<body>
			<div class="fullpage">
				<header>
					<h1><a href="<?php echo $prefix; ?>index.php">Joe's dev blog - <?php echo "$title"; ?></a></h1>
				</header>
<?php
}

function
jo_bloat_head($title) {
	global $prefix;
?>
	<html>
		<head>
			<title>Joe's own website - <?php echo "$title"; ?></title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $prefix; ?>css/site.css">
			<meta charset="UTF-8">
			<?php jo_org_inc(); ?>
		</head>
		<body>
			<div class="fullpage">
				<header>
					<h1><a href="<?php echo $prefix; ?>index.php">Joe's dev blog - <?php echo "$title"; ?></a></h1>
				</header>
<?php
}

function
jo_sidebar() {
	global $prefix;
?>

	<div class="sidebar">
		<ul>
			<li><a href="<?php echo $prefix; ?>index.php">Home</a></li>
			<li><a href="<?php echo $prefix; ?>c/">C</a></li>
			<li><a href="<?php echo $prefix; ?>">C++</a></li>
			<li><a href="<?php echo $prefix; ?>">Lisp</a></li>
			<li><a href="<?php echo $prefix; ?>">Assembly</a></li>
			<li><a href="<?php echo $prefix; ?>">UNIX</a></li>
			<li><a href="<?php echo $prefix; ?>">GNU Emacs</a></li>
			<li><a href="<?php echo $prefix; ?>">My school projects</a></li>
			<li><a href="<?php echo $prefix; ?>projects/">My projects</a></li>
			<li><a href="<?php echo $prefix; ?>">My C/C++ style</a></li>
			<li><a href="<?php echo $prefix; ?>links.php">Links</a></li>
		</ul>
	</div>
<?php
}

function
jo_footer() {
	global $prefix;
?>
	<footer>
		<p>
			Copyright &copy; 2020, Joe -
			see <a href="<?php echo $prefix; ?>license.php">LICENSE</a> -
			we do not use cookies
		</p>
	</footer>
			</div>
		</body>
	</html>
<?php
}
?>
