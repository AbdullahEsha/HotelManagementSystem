<?php
    require_once('../php/session_header.php');
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$feedback = getAllfeedback($id);

		echo printAll($feedback);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $feedback) {
			$doc .= "<tr align='center'>".
					    "<td>{$feedback['id']}</td>".
					    "<td>{$feedback['comment']}</td>".
					    "<td>{$feedback['rating']}</td>".
					"</tr>";
		}
		return $doc;
	}
?>

 