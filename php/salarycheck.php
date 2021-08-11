<?php
    require_once('../php/session_header.php');
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$details = getAllSalary($id);

		echo printAll($details);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $details) {
			$doc .= "<tr align='center'>".
			 			"<td>{$details['id']}</td>".
					    "<td>{$details['balance']}</td>".
					    "<td>{$details['bonus']}</td>".
					    "<td>{$details['rating']}</td>".
					    "<td>{$details['role']}</td>".
					    "<td>{$details['salary']}</td>".
					    "<td>{$details['user_id']}</td>".
					"</tr>";
		}
		return $doc;
	}
?>

