<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| Online Library Management System |</title>
        <style>
            body {
                width: 100%;
                background: url(N2.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

                line-height: 1;
                margin: auto;
                padding: auto;
            }

            html, body {
    width: 100%;
     height: 100%;
      overflow: hidden;
    }

    a:link {
    text-decoration: none;
    }
 
 .intro {
    position: absolute;
     left: 0;
     top:20%;
     padding: 0 20px;
     width: 100%;
     text-align: center; 
   }
 
   h1 {
     color: black;
     text-transform: uppercase;
     font-size: 100px;
     font-weight: 700;
     letter-spacing: 0.015em;
   }
   
   h1::after {
     content: '';
     width: 200px;
     display: block;
     background: #ffee58;
     height: 6px;
     margin: 30px auto;
     line-height: 1.1;
   }
 
   .btn {
     display: inline-block;
     padding: 15px 30px;
     border: 2px solid black;
     text-transform: uppercase;
     letter-spacing: 0.015em;
     font-size: 18px;
     font-weight: 600;
     line-height: 1;
     color: black;
     text-decoration: none;
     -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
          -o-transition: all 0.4s;
             transition: all 0.4s;
   }
   
   .btn:hover {
     color: #000;
     border-color: black;
     background-color: #607d8b;
   }
 
   
   @media only screen and (max-width: 1000px) {
     h1 {
       font-size: 70px;
     }
   }
   
   @media only screen and (max-width: 800px) {
     h1 {
       font-size: 48px;
     }
     h1::after {
       height: 8px;
     }
   }
   @media only screen and (max-width: 550px) {
     .btn {
     display: inline-block;
     padding: 5px 15px;
     border: 2px solid black;
     text-transform: uppercase;
     letter-spacing: 0.009em;
     font-size: 13px;
     font-weight: 400;
     line-height: 1;
     color:black;
     text-decoration: none;
     -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
          -o-transition: all 0.4s;
             transition: all 0.4s;
     }
   }
   
   @media only screen and (max-width: 430px) {
     .btn {
     display: inline-block;
     padding: 5px 10px;
     border: 1px solid black;
     text-transform: uppercase;
     letter-spacing: 0.005em;
     font-size: 10px;
     font-weight: 400;
     line-height: 1;
     color: black;
     text-decoration: none;
     -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
          -o-transition: all 0.4s;
             transition: all 0.4s;
     }
   }
   
   @media only screen and (max-width: 568px) {
     .intro {
       padding: 0 10px;
     }
     h1 {
       font-size: 30px;
     }
     h1::after {
       height: 6px;
     }
     p {
       font-size: 18px;
     }
     .btn {
       font-size: 16px;
     }
   }
   
   @media only screen and (max-width: 320px) {
     h1 {
       font-size: 28px;
     }
     h1::after {
       height: 4px;
     }
   }
        </style>
    </head>
    <body>
        <center>
            <div class="intro">
                <h1 style="color: white;">  library management system </h1>
                <a style="color: white; border-color: black;"href="login.php" class="btn"> login </a> &emsp;
                <a style="color: white; border-color: black; "href="registration.php" class="btn"> register </a>
            </div>
        </center>
    </body>
</html>