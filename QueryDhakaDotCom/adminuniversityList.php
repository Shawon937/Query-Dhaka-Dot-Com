<?php
session_start();
if(!isset($_SESSION['adminname'])){
    header('location:adminindex.php');
}

$admin = $_SESSION['adminname'];

 include_once('dbcon.php');


?>





<!DOCTYPE html>
<html>
	<head>
		<title>University</title>

		<style type="text/css">
			
			* {
				margin: 0;
				padding: 0;
			}
                        html{
                           background:url('query16.jpg') no-repeat center fixed;
                           -webkit-background-size:cover;
                           -moz-background-size:cover;
                           -o-background-size:cover;
                            background-size:cover;


                        }
			body {
				font-family: "Comic Sans MS", cursive, sans-serif;
                                font-size:20px;
			}
			.background-wrap {
				position: fixed;
				z-index: -1000;
				width: 100%;
				height: 100%;
				overflow: hidden;
				top: 0;
				left: 0;
			}
			
			#video-bg-elem {
				position: absolute;
				top: 0;
				left: 0;
				min-height: 100%;
				min-width: 100%;
			}
			.content {
				position: absolute;
				width: 100%;
				min-height: 100%;
				z-index: 1000;
				background-color: rgba(0,0,0,0.7);
			}
			.content h1 {
				text-align: center;
				font-size: 65px;
				text-transform: uppercase;
				font-weight: 300;
				color: #fff;
				padding-top: 15%;
				margin-bottom: 10px;
			}
			.content p {
				text-align: center;
				font-size: 20px;
				letter-spacing: 3px;
				color: #aaa;
			}

                       

                   

/* define a fixed width for the entire menu */
.navigation {
  width: 300px;
  
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  background-color: #FAF59E;
  text-decoration: none;
  padding: 10px;
  color: #000;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #C5C5C5;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color: #999;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: #666;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

  partTwo{

     
      
      
     
      font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
      font-size:20px;

  }

           

             partOne{

                     height:40%;
                     width:15%;
                     margin: 20px;

              }

    

  img {
    display: block;
    margin: auto;
    
}

             table{
                    border-collapse: collapse;
                    width : 80%;
                    font-size: 15px;

              }
               
              table,th,td{

                      border:1px solid rgb(25,51,153);

              }
              th{
                       background : rgba(9, 16, 33,0.7);
                       color: white;

              }
               tr:nth-child(odd){
                       background : rgba(242, 242, 234,0.7);
                       color: black;
                       height:70px;
              }
              tr:nth-child(even){
                       background : rgba(214, 255, 221,0.7);
                       color: black;
                       height:70px;
              }

   

                         
			
		</style>
		
		
	</head>
	<body>

		
		
		

		


		<div class="content">    

                       
                      
                              <img src="query1.png">
                              <img src="query14.png">
                      
                       <br>


                <secO>
    
                        <partOne style="float:left;">
                               <ul class="mainmenu">
                                   <li style="width:90px;padding:10px;"><a href="adminhome.php">Back</a></li>
                               </ul>
                       </partOne>
                    

                       

                  <partTwo>

                            

                             <table style="text-align:center;">

                      <tr><th>Serial</th><th>Name</th><th>Address</th><th>Phone No.</th></tr>

                      <?php

                         $con=mysqli_connect("127.0.0.1","root","","testapp");

                         $query="Select * from universityList";

                         $result= mysqli_query($con,$query);

                         while($row = mysqli_fetch_array($result)){
                          
                         echo "<tr><td>".$row["Serial"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["PhoneNo"]."</td></tr>";
                         }

                        ?>

                   </table>

                  

                    <br>
                    <br>
                    </partTwo>

          

        </secO>     
			 

                       
		</div>

		
		

	</body>
</html>