<?php

	require_once"mt/core/bootstrap.php";
	if(isset($_POST['id'])){


		$id = $_POST['id'];

		$sql = "
				SELECT * FROM tbl_sessions s 
				INNER JOIN mt_members m 
				ON s.sAuthorid = m.id 
				WHERE s.sid = ?;
				";
				$rs['sql'] = $sql;
		$rst = $sendqry->login($sql, [$id]);
			$rs['title'] = htmlspecialchars($rst['sTitle']);
			$rs['html'] = file_get_contents("tutorials/".$rst['filecont']);
	}
	echo json_encode($rs);
?>