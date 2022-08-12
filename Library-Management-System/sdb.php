<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);

?>

<!DOCTYPE html>
<html>
<style>
    
    
    
    body{
      width: 100%;
                background: url(N2.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
}

ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: #EA9C5A;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: #E05D1E;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;

}
.nav{
  padding-left:13%;

}
.box-cnt{

  box-shadow: 0px 0px 15px lightgreen;
  background:rgba(0,0,0,0.38);
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:white;
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#660000;
        border-radius:12px;
        
    }

    .box-table{
        color: black;
        text-align: center;
        border-collapse: collapse;
        margin:1%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid black;
    }
    
    a{
        color: black;
    }
    
    
    </style>
    
    
    
    
  
    
    
    
<head><title>Student_DashBoard</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
     
      <tr>
        <td ><mark style="color:white;background-color:maroon";> &nbsp;Welcome 
            
            <?php if($gender=="m")
                {
                    echo "Mr. ";
                } 
               else{
                echo "Ms. ";
               }
            ?><b><?php echo $namecap; ?> &nbsp;</b></mark></td>
      </tr>
    </table>
  </div>

  <div class="nav">
    <ul>
      <li><a style="background-color: #E05D1E" href="sdb.php">HOME</a></li>
      <li><a href="sbooks.php">YOUR BOOKS INFO</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="index.php">LOGOUT</a></li>
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:900px; margin-left:13%;margin-top:10px;background-color:white">
      
      
      
      
    <div class="box-cnt">
      <h3 class="box-cnt-h">COMPUTER SCIENCE</h3>
         <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="cse"){
                        echo "<tr>";
                          $bookid_cse=NULL;
                          $bookid_cse=$row["b_id"];
                          $lg1="<a href='view_book.php?id=$bookid_cse'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cse=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">TEXTILE</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="tt"){
                        echo "<tr>";
                          $bookid_tt=NULL;
                          $bookid_tt=$row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_tt'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_tt=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
      
    
    
      <br/clear="all">

    <div class="box-cnt">
      <h3 class="box-cnt-h">ELECTRICAL</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="ee"){
                        echo "<tr>";
                          $bookid_ee=NULL;
                          $bookid_ee=$row["b_id"];
                          $lg3="<a href='view_book.php?id=$bookid_ee'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg3"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_ee=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">MECHANICAL</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="me"){
                        echo "<tr>";
                          $bookid_me=NULL;
                          $bookid_me=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_me'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_me=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
          </br/clear>


  </div>


     

</body>
<html>
