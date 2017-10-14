
<?php 

if(isset($_GET['key']) && !empty($_GET['key'])){

	$result = $storage->get($_GET['key']);

} else {

	Request::flash(['error'=>"The server didin't receive the required parameters"]);
	
	Router::redirect("/");
}

require 'templates/get.php';

