<?php
	require_once('../db/config.php');

	

	function getByRecipeID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from cookbook where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByFoodOrderID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from foodOrder where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByInventoryID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM `inventory` WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByRoomServiceID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM `roomservice` WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	


	function getAllRecipe(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM cookbook WHERE status='accepted'";
		$result = mysqli_query($conn, $sql);
		$recipe = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($recipe, $row);
		}

		return $recipe;
	}

	function getAllFoodOrder(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM foodOrder WHERE status='Ordered'";
		$result = mysqli_query($conn, $sql);
		$foodOrder = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($foodOrder, $row);
		}

		return $foodOrder;
	}

	function getAllInventory(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM inventory WHERE status='Accepted'";
		$result = mysqli_query($conn, $sql);
		$inventory = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($inventory, $row);
		}

		return $inventory;
	}

	function getAllSchedule($empId){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM empschedule WHERE empId='$empId'";
		$result = mysqli_query($conn, $sql);
		$schedule = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($schedule, $row);
		}

		return $schedule;
	}

	function getAllSalary($user_id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM employee_details WHERE user_id='$user_id'";
		$result = mysqli_query($conn, $sql);
		$details = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($details, $row);
		}

		return $details;
	}

	function getAllfeedback($empId){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM empfeedback WHERE empId='$empId'";
		$result = mysqli_query($conn, $sql);
		$feedback = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($feedback, $row);
		}

		return $feedback;
	}



	function getAllRoomService(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM roomservice";
		$result = mysqli_query($conn, $sql);
		$roomservice = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($roomservice, $row);
		}

		return $roomservice;
	}



	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return $user;
		}else{
			return $user;
		}
	}

	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO `users` VALUES ('','{$user['email']}','{$user['name']}','{$user['password']}','{$user['phone']}','{$user['picture']}','{$user['userType']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getSearchInventory($name){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM inventory WHERE product like '$name%'";
		$result = mysqli_query($conn, $sql);
		$search = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($search, $row);
		}

		return $search;
	}

	function insertCV($CV){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO `job_application` VALUES ('','{$CV['name']}','{$CV['email']}','{$CV['position']}','{$CV['file']}','{$CV['salary']}')";

		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function checkEmail($email)
	{
		$conn = dbConnection();
		$sql = "select * from users where email='{$email}'";
		if(mysqli_query($conn, $sql)){
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user))
			{
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}

	}



	function insertRecipe($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO `cookbook` VALUES ('','{$user['ingredient']}','{$user['process']}','{$user['picture']}','{$user['itemName']}','{$user['chefId']}','requested')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function insertInventory($inventory){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		$sql = "INSERT INTO inventory VALUES('', '{$inventory['product']}',{$inventory['amount']}, {$inventory['price']},'{$inventory['picture']}','Requested')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}




	function updateRecipe($recipe){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE cookbook SET ingredients ='{$recipe['ingredients']}', process='{$recipe['process']}', picture ='{$recipe['picture']}', itemName ='{$recipe['itemName']}' WHERE id={$recipe['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateAcceptFoodOrder($foodOrder){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE foodOrder SET status ='processing' WHERE id={$foodOrder['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function newRestoreInventory($newrestore){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE inventory SET amount ='{$newrestore['newAmount']}' WHERE id={$newrestore['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	

	function deleteRecipe($recipe){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM cookbook WHERE id='{$recipe['id']}'";
		echo $sql;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>