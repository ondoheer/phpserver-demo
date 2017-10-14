
		</div><!--  close content -->
	  	<div style="background-color: #ee6e73; color:white; padding: 10px;">
	      <div class="container center-align">© <?= date('Y'); ?> Ondoheer  </div>
	    </div>
		
	
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	  <script type="text/javascript">
	  		
  			<?php if($flashed): ?>
	  			
	  			
	  				
	  		 	<?php foreach ($flashed as $key => $value) : ?>
	  				Materialize.toast("<?= $key . ": " . $value; ?>", 3000);
	  		 	<?php endforeach; ?>
	  			

	  		 	
	  		<?php endif; ?>


	  </script>
	</body>
</html>
	