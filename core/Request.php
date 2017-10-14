<?php 

class Request
{
	public static function uri()
	{
		return trim($_SERVER['REQUEST_URI'], '/');
	}

	
	public static function flash(array $messages)
	{
		$flash = [];
		
		foreach ($messages as $key => $value) {
			$flash[$key] = $value;
		}

		apc_store('flash', $flash);
	}
}