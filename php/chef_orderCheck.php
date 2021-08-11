<?php
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['get'])){
		$getBook = getAllFoodOrder();

		echo printAll($getBook);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $item) {
			$doc .= "<tr align='center'>".
					    "<td>{$item['id']}</td>".
					    "<td>{$item['itemName']}</td>".
					    "<td>{$item['quantity']}</td>".
					    "<td width='128px'><img src='{$item['picture']}'  height='60px' width='128px'></td>".
					    "<td>".
					        "<a href='acceptOrder.php?id={$item['id']}'>Accept</a>".
					    "</td>".
					"</tr>";
		}
		return $doc;
	}
?>