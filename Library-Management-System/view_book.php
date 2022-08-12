<?php
  $msg="";
include("conn.php");
session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$id=$_GET['id'];


$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$book_name=$ros['booksname'];
$auth_name=$ros['authorname'];
$avl_cpy=$ros['avl_cpy'];


if($avl_cpy>0){




if(isset($_POST['sub'])){
    
$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$path=$ros['path'];
header('content-Disposition: attachment;filename = '.$id.'');
header('content-type:application/pdf');
header('content-length='.filesize($path));
readfile($path);

}





if(isset($_POST['rqst'])){
    
    
    $query="select * from student_book where `student_book`.`emailid`= '$email'";
    $query1=mysqli_query($conn,$query);
    $ros=mysqli_fetch_array($query1);
    
    
    
    
if ($ros[0]!="")
   {
         
        $book2=$ros['book_2'];
    
        if($book2=="")
        {
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            
            $sql="UPDATE `student_book` SET". "`book_2_id` ='$id',"."`book_2` = '$book_name',"."`recive_date_2` = '$recive',". "`submisson_date_2` = '$submit'"." WHERE `student_book`.`emailid` ="."'$email'";
          
              $data=mysqli_query($conn,$sql); 
             $cur=$avl_cpy-1;
            
            $sql2="UPDATE `book` SET". "`avl_cpy` ='$cur'"." WHERE `book`.`b_id` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Book Requested..!!<br>Communicate With Librarian.";
              }
              else{
                  $msg="Something Went Wrong";
                  
                   }
           }
    
    
        else{
            $msg="You Can't Request Books.<br>Please Return Previous Books.";
             }
        }
    
    
    
    //2nd condition=====>>
    
        if($ros[0]==""){
            
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            $insert="INSERT INTO `student_book`(`emailid`,`book_1_id`,`book_1`,`recive_date_1`,`submisson_date_1`) VALUES('".$email."','".$id."','".$book_name."','".$recive."','".$submit."')";
            
           
              $data=mysqli_query($conn,$insert); 
            
            $cur=$avl_cpy-1;
            
            $sql2="UPDATE `book` SET". "`avl_cpy` ='$cur'"." WHERE `book`.`b_id` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Book Requested..!!<br>Communicate With Librarian.";
              }
              else{
                  $msg="Something Went Wrong";
                  
                   }
            
            }
}
}

else{
    $msg="Not Enough book";
}

?>

<html>
<head><title>View Book</title>
    
<style>
body{
  width: 100%;
                background: url(N2.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
}
#table1{
		width: 70%;
		text-align: center;
		height: 40px;
    margin-left: 15%;
    font-size: 20px;
   
	}
	#table2{
		color: white;
	
	}
	.td1{
		padding: 1px;
		background-color: #EA9C5A;
		
	}
	.td1:hover{
		background: #E05D1E;
	}
	.td2{
		padding: 5px;
	}
	a{
		text-decoration: none;
		color: white;
		
	}
 

.five{
  padding:10px 0px 10px 10px;
	width: 500PX;
  margin-top: 20px;
  margin-left: 23%;
  height:300px;
  border-radius:12px;
  margin-right: 5%;
  box-shadow:0px 0px 15px lightgreen;
  font-size:22px;


}
   .five input[type="submit"]
          {

		    font-size:15px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:40% ;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}
    
    .td3{
        font-size: 13px;
        font-family: cambria;
        color: bisque;
        font-weight: bold;
    }
</style>
</head>

<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center"  >
    
      <tr>
        <td  align="center"><b><i>
        <mark style="background-color:maroon;color:white">VIEW BOOK PAGE</mark></i></b></td>
      </tr>
    </table>
  </div>
   
   <table id="table1">
	<tr>
		<td class="td1">
			<a href="sdb.php">HOME</a>
		</td>
		<td class="td1">
			<a href="sbooks.php">YOUR BOOKS INFO</a>
		</td>
		<td class="td1">
			<a href="">ABOUT US</a>
		</td>
		<td class="td1">
			<a href="index.php">LOG OUT</a>
		</td>
	</tr>
</table>
    <br>
    <br>

   <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:1000px; height:360px; margin-left:13%;background-color:white">

        <fieldset style="background:rgba(0,0,0,0.38)" class="five">
            <form method="post">
		
<table  id="table2">
	<tr>
		<td  class="td2">
		BOOK NAME :
		</td>
		<td class="td3">
            <?php echo $book_name; ?>
			
		</td>
	</tr>
	<tr>
		<td class="td2">
	    AUTHOR NAME :
	    </td>
		<td class="td3">
            <?php echo $auth_name; ?>
			
		</td>
	</tr>
	<tr>
		<td class="td2">
		ID :
		</td>
		<td class="td3">
			<?php echo $id; ?>
		</td>
	</tr>
	<tr>
		<td class="td2">
		AVAILABLE COPY(S) :
		</td>
		<td class="td3">
			<?php echo $avl_cpy; ?>
		</td>
	</tr>
	<tr>
		<td class="td2">
		E-BOOK :
		</td>
		<td class="td2">
            
			<input type="submit" name="sub" value="DOWNLOAD"> 
		</td>
	</tr>
	<tr>
		<td style="padding-top: 40px;padding-left: 95px">
		<input type="submit" value="Get The Book" name="rqst" style="background: #461705;border-radius: 2px;height: 30px;border: none;font-weight: bold;color: white" >
		</td>
        
        <td style="color:yellow;font-weight:bold;text-align:center;padding-top:30px;padding-left:50px"><?php echo $msg; ?></td>
	</tr>
</table>
                </form>
      </fieldset>
      </div >

     

  </body>
</html>