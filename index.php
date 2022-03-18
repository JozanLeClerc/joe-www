<!--
 * ========================
 * =====    ===============
 * ======  ================
 * ======  ================
 * ======  ====   ====   ==
 * ======  ===     ==  =  =
 * ======  ===  =  ==     =
 * =  ===  ===  =  ==  ====
 * =  ===  ===  =  ==  =  =
 * ==     =====   ====   ==
 * ========================
 *
 * jozanofastora.xyz: index.php
 * Fri Dec 10 19:35:01 CET 2021
 * Joe
 *
 * The home page
-->

<?php
$prefix = "./";
$curr_dir = basename(getcwd());
if ($curr_dir != "jozan" && $curr_dir != "jozanleclerc.xyz") {
	$prefix = "../";
}
?>
<?php include $prefix."inc/classic-contents.inc.php"; ?>
<?php jo_head("Home"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h2>About this site</h2>
	<p>
		Welcome to my own blog. Here you can find my tips and articles
		on various tech and programming subjects.
		<br><br>
		This website is still in <i>not so</i> active developpement, stay tuned.
	</p>
	<h2>About me</h2>
	<p>
		I once was a student for
		<a href="https://www.42lyon.fr/">42Lyon</a>
		IT school based in Lyon, France, but not anymore.
		I work on various personal project beside that. Also I like rocket
		science and astrophysics.
	</p>
	<br>
	<img src="img/home_gifs/emacs2.gif" alt="emacs2.gif" />
	<img src="img/home_gifs/power-button.gif" alt="power-button.gif" />
	<br>
	<img src="img/home_gifs/lynx.gif" alt="lynx.gif" />
	<img src="img/home_gifs/mars_icon.gif" alt="mars_icon.gif" />
</div>
<?php jo_footer(); ?>
