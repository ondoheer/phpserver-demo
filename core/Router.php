<?php 


class Router
{

	protected $routes = [];

	/**
	 * Loads the file that has the Routes definitions
	 * @param  String $file the route to the file that defines the routes
	 * @return static       static object
	 */
	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	/**
	 * Cleans the parameters passed to the request so we can use the 
	 * Request Uri to serve the proper route and controller
	 * @param  String $uri request full URI
	 * @return String      clean request URI
	 */
	public static function cleanUri($uri)
	{
		$uri = strtok($uri, '?');
		if($uri){
			return $uri;
		}
		return "";
	}

	public static function redirect($uri)
	{
		
		ob_start();
		header('Location: ' . $uri);
		ob_end_flush();
		die();
	}

	public function define_routes($routes)
	{
		$this->routes = $routes;
	}

	public function directTo($uri)
	{
		
		$uri = $this->cleanUri($uri);
		


		if(array_key_exists($uri, $this->routes)){
			return $this->routes[$uri];
		}

		throw new Exception('This Route does not exist.');

	}
}