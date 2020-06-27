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
	<h1>lowbat - lightweight low battery notifier</h1>
</div>
<?php jo_footer(); ?>
