<?php
    function nameTest(){
        if(isset($_POST['name'])){
            $itemName=$_POST['name'];
        if($name<A || $name<a || $name == ""){
          echo "Invalid!!";
        }
     }
    }

    function salaryTest(){
        if(isset($_POST['salary'])){
            $salary=$_POST['salary'];
        if($salary<1 || $salary == ""){
          echo "Invalid!!";
        }
     }
    }

    function emailTest(){
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        if($email == ""){
          echo "Invalid!!";
        }
     }
    }

     function positionTest(){
        if(isset($_POST['position'])){
            $position=$_POST['position'];
        if($position == ""){
          echo "Invalid!!";
        }
     }
    }

    function pictureTest(){
        if(isset($_POST['file'])){
            if(empty($_POST['file'])){
                echo "Invalid!!";
          }
       }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td colspan="3" width="900px"><h1>X HOTEL</h1>
      <ul align="right">
        <a href="../index.php">Home</a>
      </ul>
    </td>
  </tr>
  <tr>
  <td>
    <fieldset>
      <legend>Requirments For Manager</legend>
      <ul>
        <li>Bachelor’s degree in Hospitality, 
        Business Administration or relevant field.</li>
        <li>A minimum of 3 years’ experience in hotel management or similar role.</li>
        <li>Strong understanding of hotel management best practices and data entry software.</li>
        <li>Outstanding interpersonal communication and customer service skills.</li>
        <li>Exceptional leadership abilities with great attention to detail.</li>
        <li> Salary: Negotiable</li>
      </ul>
    </fieldset>
  </td>

   <td width="35%" height="400px">
    <fieldset>
      <legend>Requirments For Chef</legend>
      <ul>
        <li>High school diploma or equivalent
         (Certificate, associate and bachelor's degree)</li>
        <li>Professional kitchen experience minimum 1 year
        (or apprenticeships from any Hotel/Restaurant)</li>
        <li>Good communication , Flexibility , Creativity  </li>
        <li>Good in Business Sense and Ability Of Multitasking</li>
        <li> Salary: Negotiable</li>
      </ul>
    </fieldset>
   </td> 
  </tr>
  <tr>
   <td width="35%" height="400px">
    <fieldset>
      <legend>Requirments For Worker</legend>
      <ul>
        <li>High school diploma or equivalent
         (Certificate, associate and bachelor's degree)</li>
        <li>Professional working experience minimun 1 year</li>
        <li>Good communication , Flexibility , Friendly behaviour</li>
        <li>Ability of Multitasking</li>
        <li>Salary: Negotiable</li>
      </ul>
    </fieldset>
   </td>
  
  <td width="30%">
    <fieldset>
      <legend>Form</legend>
      <table width="100%">
         <tr>
            <td colspan="2" align="center"> 
              <input type="text" name="name" placeholder="Name"><?= nameTest();?>
         <!-- <hr> --><br>
       
                 <br> 
              <input type="text" name="email" placeholder="Email">
              <?= emailTest();?>
          <!-- <hr> --><br>
       
                 <br> 
              <select name="position">
                        <option></option>
                        <option>Manager</option>
                        <option>Staff</option>
                        <option>chef</option>
                    </select>
                    <?= positionTest();?>
          <!-- <hr> --><br>
       
                <br> 
              <input type="text" name="salary" placeholder="Expected Salary">
          <hr><br>
        CV Form :<input type="file" name="file"><?= fileTest();?>
      
      <input type="button" name="cv_insert" value="Submit" align="right">
      <br>
  </td>
  
  </tr>   
      </table>
    </fieldset>

  </tr>  
  <tr>
    <td colspan="3" align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>