	
<?php require('partials/header.php'); ?>		


	  	<div class="section no-pad-bot" id="index-banner">
	  	        <div class="container">
	  	          <h1 class="header center-on-small-only">This is my Getter/Setter Server</h1>
	  	          <div class="row center">
	  	            <h4 class="header col s12 light center">Here you will be able to store in memory key/value pairs or you will be able to retrieve them</h4>
	  	          </div>
	  	        </div>
	  	
		</div>
		
		<div class="container">
			<div class="col sm12 m6">
				
						<div class="row">
							<form class="col s12 m5" action="/get">
								<h2>Get an item</h2>
								<div class="row">
									<input type="text" name="key" placeholder="Search ..." class="validate">
									
								</div>
								<div class="row">
									<input class="waves-effect waves-light btn" type="submit"	  value="search">
									
								</div>
							</form>	
							<div class="col sm12 m6 offset-m1">
								
								<h2>Current stored items</h2>
								<ul style="list-style: circle;">
									<?php foreach ($storedItems as $key): ?>
										<li style="list-style-type: circle; padding-left: 10px; margin-left: 20px;"><?= $key['info']; ?></li>
									<?php endforeach; ?>
								</ul>
							
							</div>		
						</div>
						
					
						<div class="row">
							<form class="col s12 m5" action="/set">
								<h2>Set a new item</h2>
								<div class="row">
									
									<input type="text" name="key" placeholder="Name of your item">
								</div>
								<div class="row">
									<input type="text" name="value" placeholder="Description of your item">
									
								</div>
								<div class="row">
									<input class="waves-effect waves-light btn" type="submit" value="Save ...">
									
								</div>

							</form>
						</div>
						
						
				
			</div>
			
		</div>
	
	

	
<?php require('partials/footer.php'); ?>		  