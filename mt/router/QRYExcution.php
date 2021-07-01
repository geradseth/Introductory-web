<?php
/**
 * The query should be sent to this class to be excuted according to the requested excution.
 */
class DExcutions extends DBConnection
{
	
	public function __construct()
	{
		# code...
        parent::__construct();

	}
	/*
	*#
	*?* The function is going to insert the data
	*/
	public function insertRow($sql, $params=[]){
			# code...
			$stm = $this->dbc->prepare($sql);
			return $stm->execute($params);
	}

	public function deleteRow($table,$id){
		$stm = $this->dbc->prepare("DELETE FROM $table WHERE id=$id");
		return $stm->execute();
	}

	public function login($sql, $params=[]){
		try{
			$stm = $this->dbc->prepare($sql);
			$stm->execute($params);
			return $stm->fetch();
		}
	   catch(PDOExption $e){
	   	$e->getMessage();
	   }
	}
	public function fetchinfo($sql, $ops = []){
		$stm = $this->dbc->prepare($sql);
		$stm->execute($ops);
		return $stm->fetchAll();
	}

	public function getFeatured(){
		$stm = $this->dbc->prepare("SELECT fPhoto FROM tbl_sessions WHERE sStatus = 'hot' LIMIT 1");
		$stm->execute();
		return $stm->fetch();
	}
	public function getSiteInfo(){
		$stm = $this->dbc->prepare("SELECT * FROM tbl_mtechsite");
		$stm->execute();
		return $stm->fetch();
	}

	public function fetchcont(){
		$stm = $this->dbc->prepare("SELECT * FROM tbl_contacts LIMIT 1");
		$stm->execute();
		return $stm->fetch();		
	}

	public function getuserdata($id){
		$stm = $this->dbc->prepare("SELECT * FROM mt_members WHERE id=$id");
		$stm -> execute();
		return $stm->fetch();
	}


	public function getmzngSession(){
   		if(!isset($_SESSION['mt_login']))
   			header('location: /mtech-login');
	}

	public function getTutorials(){
		$sql = "
				SELECT * FROM tbl_sessions s 
				INNER JOIN mt_members m 
				ON s.sAuthorid = m.id 
				ORDER BY sPubDate DESC;
				";
		$stm = $this->dbc->prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function fetchworks(){
		$sql = "SELECT * FROM tbl_works WHERE 1 ORDER BY wDate DESC;";

		return $this->fetchinfo($sql);
	}
}