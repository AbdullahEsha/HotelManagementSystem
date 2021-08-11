<?php
	require_once('../php/session_header.php');
	require_once('../services/chef_staffservice.php');

	if (isset($_GET['id'])) {
		$recipe = getByRecipeID($_GET['id']);	
	}else{
		header('location: cook_book.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Recipe</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Recipe</legend>
			<table>
				
				<tr>
					<td>Ingredients</td>
					<td><input type="text" name="ingredients" value="<?=$recipe['ingredients']?>"></td>
				</tr>
				<tr>
					<td>Process</td>
					<td><input type="text" name="process" value="<?=$recipe['process']?>"></td>
				</tr>
				<tr>
					<td>ItemName</td>
					<td><input type="text" name="itemName" value="<?=$recipe['itemName']?>"></td>
				</tr>
				<tr>
					<td>Picture</td>
					<td><input type="file" name="picture" value="<?=$recipe['picture']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$recipe['id']?>">
						<input type="submit" name="editRecipe" value="Update"> 
						<a href="cook_book.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>