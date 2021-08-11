<?php
  require_once('../php/session_header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  * {
    margin: 0;
    box-sizing: border-box;
  }
  body{
      opacity: 0.8;
      background-image: url('../img/1.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%;
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
    text-align: left;
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
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center" width="100%">
   <tr >
    <td colspan="2" id="M1"><h2>X-HOTEL</h2> 
      <ul style="float: right" align="right"> Logged in as-
        <a style="float: right" href="../php/logout.php" class="active">Logout</a>
        <a style="float: right" href="empDetail.php" class="active"><?=$_SESSION['name']?> || </a>
      </ul>
    </td>
  </tr>

  <tr height="645px">
    <td id="LN1" align="center" width="18%">
    <ul>
      <li><a href="check_in_out.php"> Check IN/OUT </a></li>
      <li><a href="invoice.php"> Invoice Management </a></li>
      <li><a href="booking.php"> Bookings </a></li>
      <li><a href="order.php"> Order </a></li>
      <li><a href="cars.php"> Parking / Resurvations</a></li>
      <li><a href="complain.php"> Complains </a></li>
      <li><a href="manager_page.php">Home </a></li>
    </ul>
  </td>
  <td>
    <h1>
      Wecome to manager Page!
    </h1>
   
  </td>
  <tr>
  <tr>
    <td colspan="2" align="center" style="background-color: white">copyright@2017</td>
  </tr>
</table>

</body>
</html>