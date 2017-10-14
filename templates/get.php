	
<?php require('partials/header.php'); ?>		

<div class="section">
	<div class="container">
		<div class="row">
			<?php 
			if(isset($_GET['key'])): 
				
				$result = $storage->get($_GET['key']);

				if($result): ?>

					<h2>Result for search : <span class="search-word"><?= $_GET['key'] ?></span></h2>

					<h4><?= $result ?></h4>

				<?php  else :?>

					<h2>No results found for <span class="search-word"><?= $_GET['key'] ?></span></h2>

				<?php endif; ?>

			<?php endif; ?>

		</div>
	</div>
</div>
<?php require('partials/footer.php'); ?>		