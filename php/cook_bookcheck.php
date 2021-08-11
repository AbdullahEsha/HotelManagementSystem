<?php
	require_once("../services/chef_staffservice.php");
	if(isset($_POST['get'])){
		$getBook = getAllRecipe();

		echo printAll($getBook);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $recipe) {
			$doc .= "<tr>".
            "<td>{$recipe['id']}</td>".
            "<td>{$recipe['ingredients']}</td>".
            "<td>{$recipe['process']}</td>".
            "<td width='128px'><img src='../img/{$recipe['picture']}'  height='60px' width='128px'></td>".
            "<td>{$recipe['itemName']}</td>".
            "<td>{$recipe['chefId']}</td>".
            "<td>".
                "<a href='editRecipe.php?id={$recipe['id']}'>Edit</a> |".
                "<a href='deleteRecipe.php?id={$recipe['id']}'>Delete</a> ".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
