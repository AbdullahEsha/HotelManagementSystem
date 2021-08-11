<?php
  require_once('../php/session_header.php');
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
    background-image: url(../img/4.jpg);
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

</style>
  <title></title>
</head>
<body>
  <table width="100%" height="125%">
  <tr >
     <td width="15%" id="M1">
        Menue
      </td>
    <td ><!-- colspan="2" width="900px" class="active" id="M1"><h2>Xcompany</h2>  -->
      <ul>
        <li><a class="active" href="#">X-Hotel</a></li>
        <li style="float: right"><a class="active" href="../php/logout.php">Logout</a></li>
        <li style="float: right"><a class="active" href="chef_page.php">Logged in as_<?=$_SESSION['name']?></a></li>
      </ul>
    </td>
  </tr>

  <tr height="300px" align="center">
  	<td id="LN1" height="645px">
		<ul>
			<li><a href="my_recipe.php"> My Recipe </a></li>
      <li><a href="cook_book.php"> Cook-Book </a> </li>
      <li><a href="chef_order.php">Food Orders</a></li>
      <li><a href="inventory.php"> Inventory </a></li>
      <li><a href="chefwork_schedule.php"> Work-Schedule </a></li>
      <li><a href="chef_salary.php"> Chef Details </a> </li>
      <li><a href="chef_feedback.php"> Feedback </a></li>
		</ul>
	</td>
  <td align="center">
        <h1>
          Welcome To Chef Page!!
        </h1>
      </td>
    </tr>
	
	<tr>
		<td colspan="2" align="center" style="background-color: white">copyright@2017</td>
	</tr>
</table>

</body>
</html>
