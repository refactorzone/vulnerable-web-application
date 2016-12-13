<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require(__DIR__ . '/includes/loggedin-header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-sm-push-3 col-sm-6">
			<form action="doadddomain.php" method="post">
				<h1>Add a domain:</h1>
				<div class="form-group">
					<label for="domain">Domain</label>
					<input type="text" class="form-control" name="domain" id="domain" placeholder="example.com" autofocus="autofocus" />
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
<?php
require(__DIR__ . '/includes/loggedin-footer.php');
?>