<?php
  require_once('../php/session_header.php');
  require_once('../services/chef_staffservice.php');
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

  #D{
    overflow: scroll;
    /*padding: 100px;*/
    /*display: none;*/
  }

</style>
  <title></title>
  <script type="text/javascript" src="../asset/chef_staff_js/inventory.js"></script>
</head>
<body onload="inventoryData();">
  
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
  	<td id="LN1" height="645px">
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
  <input type="text" name="name" id="name" placeholder="Search..." align="right" onkeyup="searchInventory()">
            <div id="D">
              <table border="1" id="search1" style="display: none;">
                 <tr>
                    <td>ID</td>
                     <td>Product</td>
                     <td>Amount In Unit</td>
                     <td>Unit Price</td>
                     <td>Total Cost</td>
                     <td>Picture</td>
                </tr>
                <tbody id="search">
                  
                </tbody>

              </table>
            </div>
            <br>
            <br>

    <div id="T1">
    <fieldset>
      <legend>INVENTORY</legend>
    	<form>

    		<table border="1" width="100%">
           <tr>
            <td>ID</td>
             <td>Product</td>
             <td>Amount In Unit</td>
             <td>Unit Price</td>
             <td>Total Cost</td>
             <td>Picture</td>
             <td>Action</td>
           </tr>
            <tbody id="inventory">
            </tbody>
            <tr>
              <td colspan="7" align="right" height="30px">
                <a href="restoreInventory.php" style="background-color: grey;text-decoration: none; color:black;padding: 7px 8px ">Restore New Iteam</a>
              </td>
            </tr> 
        </table>      
    	</form>
    </fieldset>
  </div>
	</td>
	<tr>
		<td colspan="2" align="center" style="background-color: white">copyright@2017</td>
	</tr>
</table>
</body>
</html
