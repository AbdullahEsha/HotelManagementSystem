<?php
  require_once('../php/session_header.php');
  require_once('../services/chef_staffservice.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../asset/chef_staff_js/feedback.js"></script>
</head>
<body onload="feedbackData();">
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
<tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="chef_page.php"><?=$_SESSION['name']?></a>|
        <a href="../php/chef_staff_php/logout.php">Logout</a>
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
   <fieldset>
    <legend><b>CHEF FEEDBACK</b></legend>
    <form>
        <br/>
        <table border="1" width="100%">
        <tr>
          <td>Id</td>
          <td>Comments</td>
          <td>Rating</td>
        </tr>
        <tbody id="feedback">
          
        </tbody>
      </table>
    </form>
  </fieldset>
  </td>
  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
</body>
</html>
