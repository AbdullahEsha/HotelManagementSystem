<?php
	require_once('../php/session_header.php');
	require_once('../services/chef_staffservice.php');

	if (isset($_GET['id'])) {
		$foodOrder = getByFoodOrderID($_GET['id']);	
	}else{
		header('location: Chef_Order.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accept FoodOrder</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Accept FoodOrder</legend>
			<table align="center">
				<tr align="center">
					<td>Item Name</td>
					<td><?=$foodOrder['itemName']?></td>
					<td width="128px" rowspan="2">
						<img height="60px" width="128px" src="../img/<?=$foodOrder['industry']?>">
					</td>
				</tr>
				<tr align="center">
					<td>Quantity</td>
					<td><?=$foodOrder['quantity']?></td>
				</tr>

				<tr align="center">
					<td></td>
					<td>
						<font size="3" color="red">Are you sure that you want to Accept the row!!</font><br>
						<input type="hidden" name="id" value="<?=$foodOrder['id']?>">
						<input type="submit" name="acceptOrder" value="Confirm"> 
						<a href="chef_order.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>