<?php
  require_once('../php/session_header.php');
  require_once('../services/chef_staffservice.php');

  if (isset($_GET['id'])) {
    $inventory = getByInventoryID($_GET['id']); 
  }else{
    header('location: inventory.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
 <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="chef_page.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
    <td>
    <ul>
      <p><a href="my_recipe.php"> My Recipe </a></p>
      <p><a href="cook_book.php"> Cook-Book </a> </p>
      <p><a href="chef_order.php">Food Orders</a>
      <p><a href="inventory.php"> Inventory </a></p>
      <p><a href="chefwork_schedule.php">Chef Work-Schedule </a></p>
      <p><a href="chef_salary.php">Chef Details </a> </p>
      <p><a href="chef_feedback.php">Chef Feedback </a></p>
    </ul>
  </td>
  <td width="60%">
    <form action="../php/userController.php" method="post">
      <fieldset>
      <legend>Take Product</legend>
      <table width="630px">
        <tr>
          <td width="200px">Product Name</td>
          <td><?=$inventory['product']?></td>
          <td rowspan="3" width="180px"><img height="100px" width="180px" src=" <?=$inventory['picture']?> "></td>
        </tr>
        <tr>
          <td>Total</td>
          <td><?=$inventory['amount']?></td>
        </tr>
        <tr>
          <td>Amount of product to restore</td>
          <td><input type="text" name="newAmount"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$inventory['id']?>">
            <input type="hidden" name="amount" value="<?=$inventory['amount']?>">
            <input type="submit" name="takeProduct" value="Confirm"> 
            <a href="inventory.php">Back</a>
          </td>
        </tr>
      </table>
    </fieldset>
    </form>
  </td>
  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
</body>
</html>