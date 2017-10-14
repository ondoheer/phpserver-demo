<!--Import jQuery before materialize.js-->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	  <script type="text/javascript">
	  		
  			<?php if(apc_fetch('flash')): ?>
	  			
	  			
	  				
	  		 	<?php foreach (apc_fetch('flash') as $key => $value) : ?>
	  				Materialize.toast("<?= $key . ": " . $value; ?>", 3000);
	  		 	<?php endforeach; ?>
	  			

	  		 	<?php apc_delete('flash'); ?>

	  		<?php endif; ?>


	  </script>
	</body>
</html>
	