<?php 

require 'core/Router.php';
require 'core/Request.php';
require 'core/Storage.php';

$app = [];

$app['config'] = require 'config.php';

$data = array(
	'home'=> 'House where you live in'
);

// store basic data for the memory storage
foreach ($data as $key => $value) {
	apc_store($key, $value);
}

$storage = new Storage($app['config']['storage']);
