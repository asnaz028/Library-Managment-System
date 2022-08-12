<?php include("conn.php");

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $dept=$_POST['department'];
  $year=$_POST['year'];
  $email=$_POST['email'];
  $password=$_POST['password'];
    
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;
    
    
    
    if($name!="" && $roll!="" && $dept!="" && $year!="" && $email!="" && $password!="" )
  { 
        $insert="INSERT INTO `student_registration`(`roll`,`gender`,`name`,`dept`,`year`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$dept."','".$year."','".$email."','".$password."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
          header("Location:thnk.php"); 
	  }
        else
        {
            echo "Error! Please Try Again";
        }
        
    }
    else{
        echo "Fields Should Not Be Empty..!!";
    }
}


?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
  background: url("N2.jpg");
  width: 100%;
               
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
}

.title h2{
           background:#660000;
       border:none;
       margin-left:-10px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:120px;
      border-radius:15px;
      width:77.2%;
      color:white;
           }
.one{
  margin-top:80px;
  margin-left:450px;
  margin-right:450px;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  height:320px;
  background:rgba(0,0,0,0.5);
}

.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
   border:5px solid black;
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#EA9C5A;
			
			border-radius:10px;
   }

</style>




<head><title>REGISTRATION</title></head>
<body>

  

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>YOUR DETAILS</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white;font-size:13pt">
	  <tr>
			<td>NAME:</td>
 <td ><input type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> Male
<input type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>UNIVERSITY ROLL NO.:</td>
 <td><input type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select required name="department">
  <option value="cse">Computer Science Engineering</option>
  <option value="tt">Textile Technology</option>
  <option value="me">Mechanical Engineering</option>
  <option value="ee">Electrical Engineering</option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select required name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
     <option value="4th_year">4th Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td><br></tr>

 <tr>
   <td></td>
  <td><input type="submit" name="submit"
   value="REGISTER"style="background:blueviolet" size="24" ></td>
</tr>
 </table>
</form>
 </fieldset>
</div>



  

 </body>
</html>
