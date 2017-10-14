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
	protected $compatible_modes = ['apcu'];
	protected $mode;

	public function __construct($mode){

		if(!in_array($mode, $this->compatible_modes)){

			throw new Exception("Ivalid storage set");
			
		}
		$this->mode = $mode;

	}


	public function save($key, $value)
	{
		
		if($this->mode == 'apcu'){

			try {

				apcu_store($key, $value);
				
				return True;
				
			} catch (Exception $e) {

				throw $e;

			}
		}

	}

	public function get($key)
	{
		
		if($this->mode == 'apcu'){

			try {

				$result = apcu_fetch($key);
				
				return $result;
				
			} catch (Exception $e) {

				throw $e;

			}

		}
	}

	public function all()
	{
		if($this->mode == 'apcu'){
			try {

				return apcu_cache_info()['cache_list'];
				
				
			} catch (Exception $e) {

				throw $e;

			}
		}
	}


}