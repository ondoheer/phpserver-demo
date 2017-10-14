<?php 

/**
 * Abstraction to help store and retrieve items from a storage system
 * 
 */
class Storage
{

	/**
	 * string representation of the modes the storage can handdle,will throw an error 
	 * if the storage mode isn't found here.
	 * @var array
	 */
	protected $modes = ['apc'];

	public function __construct($mode){

		if(!in_array($mode, $this->modes)){

			throw new Exception("Ivalid storage set");
			
		}

	}


	public function save($key, $value, $mode='apc')
	{
		
		if($mode == 'apc'){

			try {

				apc_store($key, $value);
				
				return True;
				
			} catch (Exception $e) {

				throw $e;

			}
		}

	}

	public function get($key, $mode='apc')
	{
		
		if($mode == 'apc'){

			try {

				$result = apc_fetch($key);
				
				return $result;
				
			} catch (Exception $e) {

				throw $e;

			}

		}
	}


}