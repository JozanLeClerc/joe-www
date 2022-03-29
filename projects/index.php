<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : index.php                                        /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : The personnal projects welcome page                    |     -->
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
<?php jo_head("Projects"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h1>My personal projects</h1>
	<p>
		These are some of the personal projects I have worked on or
		that are still being developped:
	</p>
	<ul>
		<li>
			<a href="">go2work</a> -
			TUI or just CLI alarm clock made to learn Go,
			right in your BSD or Linux terminal
		</li>
		<li>
			<a href="<?php echo $prefix; ?>projects/lowbat.php">lowbat</a> -
			a lightweight low battery notifier for Linux and BSD
		</li>
		<li>
			<a href="">Dergods' Realm II</a> -
			a raycasting RPG game
		</li>
		<li>
			<a href="">arch-installer</a> -
			very basic, FreeBSD-inspired TUI intallation script for Arch Linux,
			I'm not too proud of this one, but it has been helpful
		</li>
		<li>
			<a href="">Phobos Aurora</a> -
			nothing much for now
		</li>
	</ul>
</div>
<?php jo_footer(); ?>
