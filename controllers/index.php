<?php 

 if(apcu_fetch('flash')){
		
	$flashed = apcu_fetch('flash');
	apcu_delete('flash');

}

$storedItems = $storage->all();



require 'templates/index.php';