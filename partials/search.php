<form method="post" action="<?php echo search_url(); ?>">
	<label for="term">Search my blog:</label>
	<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
	<button type="submit">Search</button>
</form>