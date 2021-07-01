<?php
/**
 * The connection setting for database
 */
class DBConnection
{
	protected $dbc;
    public $servername = "localhost";
    public $dbname = "mtdb";
	public function __construct()
	{
		#code....
        try {    
          $this->dbc = new PDO("mysql:host=$this->servername;dbname=$this->dbname", 'root', '');
          $this->dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->dbc->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch( PDOException $exception ) {
           echo "Connection error :" . $exception->getMessage();
         }
	}
}