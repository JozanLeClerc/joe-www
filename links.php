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
 * jozanofastora.xyz: links.php
 * Fri Dec 10 19:36:01 CET 2021
 * Joe
 *
 * The links page
-->

<?php
$prefix = "./";
$curr_dir = basename(getcwd());
if ($curr_dir != "jozan" && $curr_dir != "jozanleclerc.xyz") {
	$prefix = "../";
}
?>
<?php include $prefix."inc/classic-contents.inc.php"; ?>
<?php jo_bloat_head("Links"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h2>My links</h2>
	<p>
		Here are the links you can use to follow me around:
	</p>
	<ul style="list-style: none;">
		<li>
			<span class="fa fa-globe"></span> -
			My Chisel page - 
			<a href="https://chiselapp.com/user/JozanLeClerc/">
				chiselapp.com/user/JozanLeClerc
			</a>
		</li>
		<li>
			<span class="fa fa-github"></span> -
			My GitHub page -
			<a href="https://github.com/JozanLeClerc">
				github.com/JozanLeClerc
			</a>
		</li>
		<li>
			<span class="fa fa-git"></span> -
			My GitJoe page -
			<a href="https://git.jozanofastora.xyz/jozan">
				git.jozanofastora.xyz/jozan
			</a>
		</li>
		<li>
			<span class="fa fa-twitch"></span> -
			My Twitch channel (streaming code exclusively) -
			<a href="https://www.twitch.tv/jozanleclerc">
				twitch.tv/jozanleclerc
			</a>
		</li>
		<li>
			<span class="fa fa-bandcamp"></span> -
			My Smooth Jazz band's Bandcamp -
			<a href="https://towerofsilence.bandcamp.com/">
				towerofsilence.bandcamp.com
			</a>
		</li>
		<li>
			<span class="fa fa-envelope"></span> -
			My email - rbousset@42lyon.fr
		</li>
	</ul>
	<h2>My pals links</h2>
	<p>
		Also check out my pals links:
		<ul style="list-style: none;">
			<li>
				<span class="fa fa-globe"></span> -
				<b>Salad</b>'s lab:
				<a href="http://saladslab.karabo.ga/">
					saladslab.karabo.ga
				</a>
			</li>
			<li>
				<span class="fa fa-github"></span> -
				His GitHub page:
				<a href="https://github.com/salaaad2">
					github.com/salaaad2
				</a>
			</li>
			<li>
				<span class="fa fa-git"></span> -
				His GitJoe page -
				<a href="https://git.jozanofastora.xyz/salad">
					git.jozanofastora.xyz/salad
				</a>
			</li>
			<li>
				<span class="fa fa-twitter"></span> -
				And his fun Twitter account:
				<a href="https://twitter.com/fellowNwords">
					twitter.com/fellowNwords
				</a>
			</li>
			<li>
				<span class="fa fa-globe"></span> -
				<b>Akira</b>'s WebGL experiments:
				<a href="https://inner-fab.com/">
					inner-fab.com
				</a>
			</li>
			<li>
				<span class="fa fa-gitlab"></span> -
				His GitLab page:
				<a href="https://gitlab.com/AkiraMass">
					gitlab.com/AkiraMass
				</a>
			</li>
			<li>
				<span class="fa fa-globe"></span> -
				And his daughter's art site:
				<a href="https://dveloppez.com/">
					dveloppez.com
				</a>
			</li>
		</ul>
	</p>
</div>
<?php jo_footer(); ?>
