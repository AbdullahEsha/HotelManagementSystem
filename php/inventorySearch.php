<?php
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['name'])){
		
		$name = $_POST['name'];

		$inventory = getSearchInventory($name);

		echo printAll($inventory);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $inventory) {
			$cost = $inventory['price'] * $inventory['amount'];
			$doc .= "<tr>".
            "<td>{$inventory['id']}</td>".
            "<td>{$inventory['product']}</td>".
            "<td>{$inventory['amount']}</td>".
            "<td>{$inventory['price']}</td>".
            "<td>".$cost."</td>".
            "<td width='128px'><img src='../img/{$inventory['picture']}'  height='60px' width='128px'></td>".
        "</tr>";
		}
		return $doc;
	}
?>