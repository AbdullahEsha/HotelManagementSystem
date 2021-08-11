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
    background-image: url(../img/18.jpg);
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

</style>
  <title></title>
  <script type="text/javascript" src="../assets/chef_staff_js/workSchedule.js"></script>
</head>
<body onload="scheduleData();">
  <table  width="100%" height="125%">
    <tr >
      <td width="13%" id="M1">
        Menue
      </td>
    <td > 
       <ul  id="UL1">
         <li><a class="active" href="#">X-Hotel</a></li>
         <li style="float: right;"><a class="active" href="../php/logout.php">Logout</a></li>
         <li style="float: right;"><a class="active" href="staff_page.php">Logged in as_<?=$_SESSION['name']?></a></li>
      </ul>
    </td>
  </tr>

  <tr>
  	<td id="LN1" height="645px">
		<ul>
			<li><a href="staffwork_schedule.php">Staff Work Schedule </a></li>
      <li><a href="room_service.php"> Room-Service List </a></li>
      <li><a href="staff_salary.php">Staff Details </a> </li>
      <li><a href="staff_feedback.php"> Feedback </a></li>
		</ul>
	</td>
	<td >
     <div id="T1">
    <fieldset>
      <legend>My Schedule</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="5" width="95%">
           <tr>
              <td>Id</td>
              <td>Date</td>
              <td>Start Time</td>
              <td>End Time</td>
              <td>Working Hour</td>
          </tr>
           <tbody id="schedule">
             
           </tbody>
        </table>      
    	</form>
    </fieldset>
  </div>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>