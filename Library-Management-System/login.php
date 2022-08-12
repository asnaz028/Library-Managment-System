<?php

  include("conn.php");
  $error="";

  session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }

else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admin.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}


 
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Online Library Management System</title>
</head>
    
<style>
body{
  background: url(N2.jpg);
  width: 100%;
               
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
}
  
 

.five{
  padding:10px 0px 10px 10px;
  margin-top: 80px;
  margin-left: 450px;
  border-radius:12px;
  margin-right: 450px;
  box-shadow:0px 0px 15px lightgreen;
  font-size:25px;
 

}
   .five input[type="submit"]
          {

		    font-size:20px;
		    text-align:center;
			border:5px solid black;
			height:40px;
			margin-left:90% ;
            margin-top: 20px;
			background:#EA9C5A;
			
			border-radius:10px;
			}


</style>


<body>
  
    <br>
    <br>

    <form method="post" action="">
      

        <fieldset align="center" style="  background:rgba(0,0,0,0.38);color:white;" class="five" class="one">
          <div class="boxfour" >
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;border-radius:12px;margin-top:-13px;margin-left:-12px;height:40px">Please Login Here</h3>


          </div>

        <table style="font-size:16pt;width:300px;height:50px;" align="center">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:white">Username:</label></td>
            <td><input type="text" name="username" placeholder="username"  style="color:red"></td>
          </tr>

          <tr>
            <td><label style="color:white">Password:</label></td>
            <td><input type="password" name="password" placeholder="**********"  style="color:red"></td>
          </tr>
          <tr>
            <td align="center" style="margin-left:200px"><input type="submit" name="submit" value="LOGIN"></td>
          </tr>
         
          <p style="color:red;font-weight:bold;font-size:17px;text-align:center;background:rgba(255, 255, 255, 0.8)"><?php echo $error ?>
          </p>
         
          <tr>
            <td style="font-size:15px">Don't Have an Acoount?</td>


            <td style="font-size:20px"><a href="registration.php" style="color:white">Register Now</a></td>
          </tr>
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
      </fieldset>
      </div >
    </form>


  
