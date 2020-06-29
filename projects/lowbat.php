<!-- ----------------------------------------------------------------------- -->
<!--                                                                         -->
<!-- File     : lowbat.php                                       /_________/ -->
<!-- Authors  : Joe                                                    |     -->
<!-- Date     : 06/2020                                                |     -->
<!-- Info     : lowbat page                                            |     -->
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
<?php jo_head("lowbat"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h1 class="title">lowbat - lightweight low battery notifier</h1>
	<div id="table-of-contents">
		<h2>Table of Contents</h2>
		<div id="text-table-of-contents">
			<ul>
				<li><a href="#orgfe852df">1. Why lowbat?</a></li>
				<li><a href="#orgf2afc19">2. History of lowbat</a></li>
				<li><a href="#org89620d6">3. How it works</a>
					<ul>
						<li><a href="#org6b0c50b">3.1. libnotify lowbat</a></li>
						<li><a href="#orgbd041b0">3.2. espeak lowbat</a></li>
						<li><a href="#org3a44c6a">3.3. unknown lowbat</a></li>
					</ul>
				</li>
				<li><a href="#org4bfb234">4. Links to lowbat</a></li>
			</ul>
		</div>
	</div>

	<div id="outline-container-orgfe852df" class="outline-2">
		<h2 id="orgfe852df"><span class="section-number-2">1</span> Why lowbat?</h2>
		<div class="outline-text-2" id="text-1">
			<p>
				I've been using minimalist OS installations for work, personnal computing
				and playing video games for a while now. I used <a href="https://www.archlinux.org/">Arch Linux</a>, I still use
				<a href="https://gentoo.org/">Gentoo Linux</a> - which is by far my favorite Linux distribution - as a desktop
				OS, and now I am using <a href="https://www.freebsd.org/">FreeBSD</a> on my workstation.
			</p>

			<p>
				Those operating systems and distributions basically come with a kernel,
				coreutils, a shell and that's pretty much it. Everything else has to be
				installed manually. I love this philosophy, the simplicity behind it and the
				fact that you know exactly what's on your system at any moment.
			</p>

			<p>
				As window managers, I used <a href="http://dwm.suckless.org/">dwm</a> for a while, and I am now using <a href="https://github.com/baskerville/bspwm">bspwm</a>. They
				are ultra-fast, very lightweight and do not bring extra bloatware to my systems.
				I do not use a status bar as well, I like my applications to use the full screen
				space available.
			</p>

			<p>
				A big problem for me with this setup for me was that they do not come with some
				kind of warning or notification system, like fancier desktop environments would,
				when my laptop battery is low. That also was before I started using <b>Emacs</b>,
				discovering the battery level indicator in the modeline. Ultimatly the
				frustration was too important when the computer kept shutting down in
				the middle of important work too many time. Then I decided to create <b>lowbat</b>
				to cure this issue.
			</p>
		</div>
	</div>

	<div id="outline-container-orgf2afc19" class="outline-2">
		<h2 id="orgf2afc19"><span class="section-number-2">2</span> History of lowbat</h2>
		<div class="outline-text-2" id="text-2">
			<p>
				It started as a very short <code>dash</code> shell (get <a href="https://github.com/tklauser/dash">dash</a> here) script that was
				working fine but I wanted to experiment a little bit with this. It turned into
				a <code>C++</code> program, which is still the case for the GNU/Linux version.
				Switching to FreeBSD, I exerimented again by turning it into an
				<code>x64 assembly</code> program, following the <b>Intel</b> syntax. In that way <b>lowbat</b> is
				even more lightweight and consumes less battery power.
				These days, I am rewriting it in the <b>AT&amp;T</b> syntax.
			</p>
		</div>
	</div>

	<div id="outline-container-org89620d6" class="outline-2">
		<h2 id="org89620d6"><span class="section-number-2">3</span> How it works</h2>
		<div class="outline-text-2" id="text-3">
		</div>
		<div id="outline-container-org6b0c50b" class="outline-3">
			<h3 id="org6b0c50b"><span class="section-number-3">3.1</span> libnotify lowbat</h3>
			<div class="outline-text-3" id="text-3-1">
				<p>
					The principle of <b>lowbat</b> is rather simple. When it's running in the
					background, it checks every 4 minutes whether your battery is above 15%.
					If that is the case, it sleeps for another 4 minutes. When your battery runs
					bellow 15%, <b>lowbat</b> checks your battery level every 20 seconds as well as
					sending you a <b>notification</b> using <code>libnotify</code>. You can display live
					notifications on your desktop using <code>dunst</code> for example, as well as many
					other I'm sure.
				</p>


				<div id="org89a6eb3" class="figure">
					<p><img src="../img/lowbat-01.jpg" alt="lowbat-01.jpg" />
					</p>
					<p><span class="figure-number">Figure 1: </span>A notification generated by lowbat, displayed by dunst</p>
				</div>
			</div>
		</div>

		<div id="outline-container-orgbd041b0" class="outline-3">
			<h3 id="orgbd041b0"><span class="section-number-3">3.2</span> espeak lowbat</h3>
			<div class="outline-text-3" id="text-3-2">
				<p>
					<b>lowbat</b> also has an option to send a custom voice message to the use
					using <code>espeak</code>. Very handy if you are not in front of your computer or
					if you want to bring joy to this dramatic event.
				</p>
			</div>
		</div>

		<div id="outline-container-org3a44c6a" class="outline-3">
			<h3 id="org3a44c6a"><span class="section-number-3">3.3</span> unknown lowbat</h3>
			<div class="outline-text-3" id="text-3-3">
				<p>
					Sadly, I wasn't able to test lowbat on machines with more that one
					battery. My call is that it will only warn you for the <i>first</i> battery,
					but I can't be sure. Try it and tell me!
				</p>
			</div>
		</div>
	</div>

	<div id="outline-container-org4bfb234" class="outline-2">
		<h2 id="org4bfb234"><span class="section-number-2">4</span> Links to lowbat</h2>
		<div class="outline-text-2" id="text-4">
			<ul class="org-ul">
				<li>GNU/Linux: <a href="https://github.com/JozanLeClerc/lowbat">lowbat's GitHub GNU/Linux repository</a></li>
				<li>BSD: <a href="https://github.com/JozanLeClerc/lowbat-bsd">lowbat's GitHub BSD repository</a></li>
			</ul>
		</div>
	</div>
</div>
<?php jo_footer(); ?>
