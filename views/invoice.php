<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
      *{
      margin: 0;
    box-sizing: border-box;
    padding: 0;    
      }
      #ber{
          background-color: #333;
          margin: 0;
          padding: 0;
      }
      body{
          opacity: 0.8;
          background-image: url('../img/2.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
      }
      .nav{
      text-decoration: none;
      background-color: #008080;    
      display: block;
    color: white;
    text-align: center;
    padding: 32px 50px;
    
      }
      #sber{
          background-color: #333;
          opacity: 0.8;
      }
      .nav1{
          text-decoration: none;    
          display: block;
        color: white;
        text-align: center;
        padding: 5px 48px;
      }
      a:hover{
          background-color:#008B8B;
      }
  </style>
  <script type="text/javascript" src="../managerAsset/JS/invoice.js"></script>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0"  width="100%" height="100%">
  <tr >
    <td colspan="2" ><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr >
  	<td>
		<ul>
			<li><a href="check_in_out.php"> Check IN/OUT </a></li>
      <li><a href="invoice.php"> Invoice Management </a></li>
      <li><a href="booking.php"> Bookings </a></li>
      <li><a href="order.php"> Order </a></li>
      <li><a href="cars.php"> Parking / Resurvations</a></li>
      <li><a href="complain.php"> Complains From Customer </a></li>
      <li><a href="manager_page.php">Home </a></li>
		</ul>
	</td>
    
	<td width="80%">
    <fieldset>
      <legend>INVOICE MANAGEMENT</legend><br>
      <div align="right">
        <input type="text" name="customerId" id="customerId" placeholder="Customer ID..." onkeyup="invoiceData()">
      </div>
      <br>
      <br>
    		<table border="1" cellspacing="0" cellpadding="5" width="100%" >
           <tr>
            <td>ID</td>
             <td>Services</td>
             <td>Bill ($)</td>
             <td>Action</td>
           </tr>
           <tbody id="invoice">
             
           </tbody>
        </table>
    </fieldset>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>