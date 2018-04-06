
<!-- AUTHENTICATED -->
<?php if ($authenticated) { ?>

	<div class="to-send-form-container">

		<a href="#" id="to-send-form" class="btn btn-main"><?php echo __("Bring back my Twitter TL!"); ?></a>

		<form id="main-form" action="<?php echo Router::url("/api/createlist"); ?>" method="post" target="progress">

			<div class="form-container">
				<input type="submit" style="display:none;">
			</div>

		</form>
	</div>

	<iframe id="progress" name="progress"></iframe>

	<div id="progress-render">
		<span id="progress-message">
			Progress
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