	
<?php require('partials/header.php'); ?>		


	<div class="container">
		<div class="row">
			<?php if($result): ?>

				<h2>Result for search : <span class="search-word"><?= $_GET['key'] ?></span></h2>

				<h4><?= $result ?></h4>

			<?php  else :?>

				<h2>No results found for <span class="search-word"><?= $_GET['key'] ?></span></h2>

			<?php endif; ?>
			
			

		</div>
		<div class="row">
			<a href="/" class="waves-effect waves-light btn">Back</a>
		</div>
	</div>
</div>
<?php require('partials/footer.php'); ?>		