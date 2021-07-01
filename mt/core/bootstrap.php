<?php
/*
*This going to bootsrap the project and innitialize everything On server.
*
*/

#The route file neede for router class
$route = require_once"mt/router/router.php";

#Yhe Router class required to return the requested file from router.
require_once"mt/router/RouterInterface.php";


$rt = new Router($route);



require_once"mt/core/DBC.php";




require_once"mt/router/QRYExcution.php";



$sendqry = new DExcutions();

function e($data){
	$data = addslashes($data);
	$data = htmlentities($data);
	$data = trim($data);
	return $data;
}
 /**
  * getting user agent
  */
 class GetClient
 {
 	
 	 public static function usrAgent()
 	{
 		// code...
 		echo "Your Public IP: ".$_SERVER['REMOTE_ADDR'];
 	}
 }



?> 