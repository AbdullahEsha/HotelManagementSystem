<?php
  require_once('../php/session_header.php');
  if (isset($_GET['error'])) {
    
    if($_GET['error'] == 'db_error'){
      echo "Something went wrong...please try again";
    }
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
  <script type="text/javascript" src="../asset/chef_staff_js/restoreInventory.js"></script>
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
    <div id="T1">
    <fieldset>
      <legend>RESTORE INVENTORY</legend>
    	<form action="../php/userController.php" method="post" onsubmit="return val()">
    		<table width="100%">
           <tr>
             <td>Product Name</td>
             <td><input type="text" id="product" name="product" size="40%" onkeyup="removerName()"></td>
             <td id="namemsg"></td>
             <td rowspan="4">
              <img src="" id="item_image" height="100px" width="120px">
             </td>
           </tr>
           <tr>
             <td>Amount in Unit</td>
             <td><input type="text" id="amount" name="amount" size="40%" onkeyup="removerAmount()"></td>
             <td id="amountmsg"></td>
           </tr>
           <tr>
             <td>Price</td>
             <td><input type="text" id="price" name="price" size="40%" onkeyup="removerPrice()"></td>
             <td id="pricemsg"></td>
           </tr>
           <tr>
             <td>Picture</td>
             <td><input type="file" id="picture" name="picture" onclick="removerPicture()" onchange="imgShow()" size="40%" ></td>
             <td id="picmsg"></td>
           </tr>
           <tr>
            <td colspan="4">
             <hr>
           </td>
           </tr>
           <tr>
             <td colspan="4" align="right">
               <input type="submit" name="restoreInventory" value="Restore">
               <a href="inventory.php"><b>Back<b></a>
             </td>
           </tr>
        </table>      
    	</form>
    </fieldset>
  </div>
	</td>
	<tr>
		<td colspan="2" align="center"  style="background-color: white">copyright@2017</td>
	</tr>
</table>
</body>
</html>