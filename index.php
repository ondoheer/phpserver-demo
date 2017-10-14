<?php 

require 'core/bootstrap.php';

require Router::load('routes.php')->directTo(Request::uri());

?>