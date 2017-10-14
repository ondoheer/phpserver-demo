<?php 


if(isset($_GET['key']) && isset($_GET['value']) && !empty($_GET['value']) && !empty($_GET['key'])){

	$storage->save($_GET['key'], $_GET['value']);

	Request::flash(['success'=>'Saved succesfully']);
	
	Router::redirect("/");

} else {

	Request::flash(['error'=>"The server didin't receive the required parameters"]);
	
	Router::redirect("/");
	
}