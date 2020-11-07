<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : index.php                                        /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : The home page                                          |     -->
<!--                                                           /       |     -->
<!--                                                           \       /     -->
<!--                                                            \_____/      -->
<!--                                                                         -->
<!-- ----------------------------------------------------------------------- -->

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
		Welcome to my personnal blog. Here you can find my tips and articles
		on various tech and programming subjects.
		<br><br>
		The site is still in active developpement, stay tuned.
	</p>
	<h2>About me</h2>
	<p>
		I am a student for
		<a href="https://www.42lyon.fr/">42Lyon</a>
		IT school based in Lyon, France.
		I work on various personnal project beside that.
	</p>
</div>
<?php jo_footer(); ?>
