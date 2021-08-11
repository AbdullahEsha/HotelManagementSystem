<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../services/chef_staffservice.php');


	//add recipe
	if(isset($_POST['myRecipe'])){
		$picture 	= $_POST['picture'];
		$itemName 	= $_POST['itemName'];
		$ingredient = $_POST['ingredient'];
		$process 	= $_POST['process'];
		$chefId 	= $_POST['chefId'];

		if(empty($picture) || empty($itemName) || empty($ingredient) || empty($process) || empty($chefId)){
			header('location: ../views/my_recipe.php?error=null_value');
		}else{

			$recipe = [
				'picture'   => $picture,
				'itemName'  => $itemName,
				'ingredient'=> $ingredient,
				'process'   => $process,
				'chefId'    => $chefId
			];

			$status = insertRecipe($recipe);

			if($status){
				header('location: ../views/cook_book.php?success=done');
			}else{
				header('location: ../views/my_recipe.php?error=db_error');
			}
		}
	}

	//Inventory
	if(isset($_POST['restoreInventory'])){
		$product 	= $_POST['product'];
		$amount 	= $_POST['amount'];
		$price      = $_POST['price'];
		$picture 	= $_POST['picture'];

		if(empty($product) || empty($amount) || empty($price) || empty($picture)){
			header('location: ../views/restoreInventory.php?error=null_value');
		}else{

			$inventory = [
				'product'   => $product,
				'amount'    => $amount,
				'price'     => $price,
				'picture'   => $picture
			];

			$status = insertInventory($inventory);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/restoreInventory.php?error=db_error');
			}
		}
	}
	
	if(isset($_POST['cv_insert'])){
		$name 	   = $_POST['name'];
		$email 	   = $_POST['email'];
		$position = $_POST['position'];
		$salary    = $_POST['salary'];
		$file 	   = $_POST['file'];

		if(empty($name) || empty($email) || empty($position) || empty($salary) || empty($file)){
			header('location: ../views/cv_page.php?error=null_value');
		}else{

			$CV = [
				'name'     => $name,
				'email'    => $email,
				'position'=> $position,
				'salary'   => $salary,
				'file'     => $file
			];

			$status = insertCV($CV);

			if($status){
				header('location: ../index.php?success=done');
			}else{
				header('location: ../views/cv_page.php?error=db_error');
			}
		}
	}
		

	//update Recipe
	if(isset($_POST['editRecipe'])){
		$ingredients = $_POST['ingredients'];
		$process     = $_POST['process'];
		$itemName 	 = $_POST['itemName'];
		$picture 	 = $_POST['picture'];
		$id          = $_POST['id'];

		if(empty($ingredients) || empty($process) || empty($itemName) || empty($picture) ){
			header('location: ../views/editRecipe.php?id={$id}');
		}else{

			$recipe = [
				'ingredients'=> $ingredients,
				'process'    => $process,
				'itemName'   => $itemName,
				'picture'    => $picture,
				'id'         => $id
			];

			$status = updateRecipe($recipe);

			if($status){
				header('location: ../views/cook_book.php?success=done');
			}else{
				header('location: ../views/editRecipe.php?id={$id}');
			}
		}
	}
	
	//update Order
	if(isset($_POST['acceptOrder'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/editRecipe.php?id={$id}');
		}else{

			$foodOrder = [
				
				'id' => $id
			];

			$status = updateAcceptFoodOrder($foodOrder);

			if($status){
				header('location: ../views/chef_order.php?success=done');
			}else{
				header('location: ../views/acceptOrder.php?id={$id}');
			}
		}
	}

	if(isset($_POST['newRestore'])){

		$amount 	= $_POST['amount'];
		$newAmount 	= ($_POST['newAmount']+$_POST['amount']);
		$id 		= $_POST['id'];

		if(empty($newAmount) || empty($amount) || empty($id)){
			header('location: ../views/newRestore.php?id={$id}');
		}else{

			$newrestore = [
				'newAmount'=> $newAmount,
				'id'=> $id
			];

			$status = newRestoreInventory($newrestore);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/newRestore.php?id={$id}');
			}
		}
	}

	if(isset($_POST['takeProduct'])){

		$amount 	= $_POST['amount'];
		$newAmount 	= ($_POST['amount']-$_POST['newAmount']);
		$id 		= $_POST['id'];

		if(empty($newAmount) || empty($amount) || empty($id)){
			header('location: ../views/takeProduct.php?id={$id}');
		}
		else{

			$newrestore = [
				'newAmount'=> $newAmount,
				'id'=> $id
			];

			$status = newRestoreInventory($newrestore);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/takeProduct.php?id={$id}');
			}
		}
	}

	

	if(isset($_POST['deleteRecipe'])){
		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/delete_com.php?id={$id}');
		}else{

			$recipe = [
				
				'id'=> $id
			];

			$status = deleteRecipe($recipe);

			if($status){
				header('location: ../views/cook_book.php?success=done');
			}else{
				header('location: ../views/deleteRecipe.php?id={$id}');
			}
		}
	}

?>