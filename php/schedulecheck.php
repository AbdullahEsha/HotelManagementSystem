<?php
	require_once('../php/session_header.php');
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$schedule = getAllSchedule($id);

		echo printAll($schedule);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $schedule) {
			$doc .= "<tr>".
            "<td>{$schedule['id']}</td>".
            "<td>{$schedule['date']}</td>".
            "<td>{$schedule['startTime']}</td>".
            "<td>{$schedule['endTime']}</td>".
            "<td>{$schedule['workingHour']}</td>".
        "</tr>";
		}
		return $doc;
	}
?>

