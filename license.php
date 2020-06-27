<?php include 'inc/classic-contents.inc.php'; ?>
<?php jo_head("LICENSE"); ?>
<?php jo_sidebar(); ?>
<div class="body-contents">
	<h1>BSD 3-Clause</h1>
	<p>
		This site is copyrighted under the BSD 3-Clause License.
		You can find the terms of the license bellow:
	</p>
	<pre>
<?php
$license = file_get_contents('LICENSE');
echo "$license";
?>
	</pre>
	<p>
		You can also <a href="LICENSE">download</a> the license file.
	</p>
</div>
<?php jo_footer(); ?>
