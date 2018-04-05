
<!-- AUTHENTICATED -->
<?php if ($authenticated) { ?>

	<a href="#" id="to-send-form" class="btn btn-main"><?php echo __("Bring back my Twitter TL!"); ?></a>

	<form id="main-form" action="<?php echo Router::url("/api/createlist"); ?>" method="post" target="progress">

		<div class="form-container">
			<input type="submit" style="display:none;">
		</div>

	</form>

	<iframe id="progress" name="progress"></iframe>

	<div id="progress-render">
	<span id="progress-message">
		<?php if ($authenticated) {
			echo __("*The list will have a max. number of 5000 users");
		} else {
			echo __("*You'll be redirected to sign in with Twitter<br>[No automatic tweets nor similar shit, promised]");
		} ?>
	</span>
		<div id="progress-bar"></div>
		<div class="clear"></div>
	</div>

<?php } else { ?>

	<!-- NO AUTHENTICATED -->
	<a href="#" id="to-send-form" class="btn btn-main"><?php echo __("Bring back my Twitter TL!"); ?></a>

	<form id="main-form" action="<?php echo Router::url("/api/authorize"); ?>" method="post">

		<div class="form-container">
			<input type="submit" style="display:none;">
		</div>

	</form>
<?php }?>