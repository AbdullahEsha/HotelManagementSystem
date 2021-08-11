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
  <style>
   * {
    margin: 0;
    box-sizing: border-box;
  }
  body {
    background-image: url(../img/14.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    opacity: 0.8;
  }

  ul {
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
  }
    
  li {
    float: left;
  }
    
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 15px 30px;
    text-decoration: none;
  }
    
  .active {
    background-color: #4CAF50;
  }
  a:hover{
    background-color: #008080;
  }
  #M1{
    color: white;
    text-align: center;
    background-color: #008080;
  }
  h1{
    color: white;
  }
  #LN1{
    background-color: #333;
    opacity: 0.8;
  }
  div{
    background-color: #FFFAFA;
  }
  .T1{
    color: white;
    background-color: #333;
  }
  .T2{
    color: white;
    background-color: #333;
  }
  #name{
    overflow: scroll;
  }

</style>
  <title></title>
  <!-- <script type="text/javascript" src="../asset/chef_staff_js/newrepository.js"></script> -->
</head>
<body>
  <table width="100%" height="125%">
 <tr >
    <td width="15%" id="M1">
        Menue
      </td>
    <td>
       <ul>
        <li><a class="active" href="#">X-Hotel</a></li>
        <li style="float: right"><a class="active" href="../php/logout.php">Logout</a></li>
        <li style="float: right"><a class="active" href="chef_page.php">Logged in as_<?=$_SESSION['name']?></a></li>
      </ul>
    </td>
  </tr>

  <tr>
  	<td  id="LN1" height="645px">
		<ul>
			<li><a href="my_recipe.php"> My Recipe </a></li>
      <li><a href="cook_book.php"> Cook-Book </a> </li>
      <li><a href="chef_order.php">Food Orders</a></li>
      <li><a href="inventory.php"> Inventory </a></li>
      <li><a href="chefwork_schedule.php">Chef Work-Schedule </a></li>
      <li><a href="chef_salary.php">Chef Details </a> </li>
      <li><a href="chef_feedback.php">Chef Feedback </a></li>
		</ul>
	</td>
	<td >
    <form action="../php/userController.php" method="post">
      <div id="T1">
      <fieldset>
      <legend>Take New Product(restore)</legend>
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
          <td><input type="text" id="newamount" name="newAmount"></td>
          <td id="newmsg"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$inventory['id']?>">
            <input type="hidden" name="amount" value="<?=$inventory['amount']?>">
            <input type="submit" name="newRestore" value="Confirm"> 
            <a href="inventory.php">Back</a>
          </td>
        </tr>
      </table>
    </fieldset>
  </div>
    </form>
	</td>
	<tr>
		<td colspan="2" align="center"  style="background-color: white">copyright@2017</td>
	</tr>
</table>
</body>
</html>