<?php
	require_once('../php/session_header.php');
	require_once('../services/chef_staffservice.php');

	if (isset($_GET['id'])) {
		$serviceOrder = getByRoomServiceID($_GET['id']);	
	}else{
		header('location: room_service.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accept Room-Service Order</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Accept Service Order</legend>
			<table align="center">
				<tr align="center">
					<td>Room Number</td>
					<td><?=$serviceOrder['roomNumber']?></td>
				</tr>
				<tr align="center">
					<td>Service</td>
					<td><?=$serviceOrder['service']?></td>
				</tr>

				<tr align="center">
					<td></td>
					<td>
						<font size="3" color="red">Are you sure that you want to Accept the row!!</font><br>
						<input type="hidden" name="id" value="<?=$serviceOrder['id']?>">
						<input type="submit" name="acceptOrder" value="Confirm"> 
						<a href="room_service.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>