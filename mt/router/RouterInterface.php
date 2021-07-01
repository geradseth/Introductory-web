<?php
declare(strict_types=1);
//http://portal.ncnd.vodacom.co.tz/sp/data-bundle?p=550&b=8978

/**
 * Routing class for the site
 * Our router interface
 * IT
 */
class Router
{
	protected $route;
	
	function __construct($route)
	{
		$this->route = $route;
	}
	public function goto($uri){
		try{
			if (array_key_exists($uri, $this->route)) {
			return $this->route[$uri];
			}
		}
		catch (Exception $e){
			throw new Exception("Error Processing Request", 1);
		}
		
	}

}