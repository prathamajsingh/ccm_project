<?php
    if(isset($_POST['firstname'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("connection to this database failed due to ". mysqli_connect_error());
        
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email_id = $_POST['email_id'];
    $city = $_POST['city'];
    $feedback = $_POST['feedback'];
    //echo "success connecting to db";
    $sql = "INSERT INTO `enquiry_details`.`registration` (`firstname`, `lastname`, `email_id`, `city`, `feedback`) VALUES ('$firstname',
    '$lastname', '$email_id', '$city', '$feedback');";
    echo $sql;
    
    if($con->query($sql)==TRUE)
    {
        echo "successfully inserted. ";
    }
    else
    {
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="enquiry.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div id="header">
        <div class="main_logo">
            <a href="homepage.html"><img src="ccmlogo.png" height="150px" width=auto ></a>
        </div>
        <div class="sub_logo">
            <img src="ccmlogo2.jpg" height="150px" width=100%>
        </div>
    </div>
    <div id="header2">
    <div class="topnav">
        <a  href="homepage.html">Home</a>
        <a href="about_us.html">About Us</a>
        <a href="loginpage.html">Login</a>
        <a  class="active" href="enquiry.php">Contact Us</a>
        <input type="text" placeholder="Search..">
    </div>
    <div id="mySidenav" class="sidenav" style= "width:0px;">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>    
    <div class="sb">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#9776;</span>
    </div>

    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>
    </div>
    <div class="main_div">
      <div class="upper_main_div">
        <img src="groundfloor2.png" height="400px" width="100%" alt="">
        <div class="contact_us_logo">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="lower_main_div">
        <div class="lower_main_div_left">
          <div class="lower_main_div_left_content">
            <div class="lower_main_div_left_content_first">
              <p>Address: <br>Untwadi Rd, Lavate Nagar, <br>
                Parijat Nagar, Nashik, <br>
                Maharashtra 422002</p>
                <br>
              <p>
                T: 09225129632<br>
                E: helpdesk.ccmnashik@sarda.co.in
              </p>
             
            </div>
            <div class="lower_main_div_left_content_second">
              <p>For leasing: </p>
              <p>Mr. Sachin Laddha,<br>
                 T: +919225126691<br>
                 E: sachin.laddha@sarda.co.in </p>
                 <p>For Branding, Promotions or other inquiry: <br>
                  E: helpdesk.ccmnashik@sarda.co.in 
                  </p>
            </div>
            <div class="lower_main_div_left_content_third">
              <p>
              Mall Timings:<br>
                  Everyday: 11 AM to 10 PM <br>
                  <br>
                  Customer Care: <br>
                  T: +919225129632
                </p>
            </div>
          </div>
        </div>
        <div class="lower_main_div_right">
          <div class="lower_main_div_right_content">
            <div class="lower_main_div_right_content_upper">
              <h3>Enquiry Form</h3>
            </div>
            <div class="container">
              <form action="enquiry.php" method="POST">
            
                <label for="fname"><h5>First Name </h5></label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
                <label for="lname"><h5>Last Name </h5></label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
                <label for="email_id"><h5>Email </h5></label>
                <input type="email" id="email_id" name="email_id" placeholder="Your email id..">
            
                <label for="city"><h5>City </h5></label>
                <input type="text" id="city" name="city" placeholder="Your city.." >

                <label for="feedback"><h5>Feedback </h5></label>
                <textarea id="feedback" name="feedback" placeholder="message.." style="height:200px ;width:545px; border-radius: 10px; background-color: #ffffff;padding: 5px ;font-family: 'Playfair Display', serif;
                -webkit-font-smoothing: antialiased;font-size: 16px;"></textarea>
                <br><br>
                <div class="submit_button">
                <input type="submit" value="Submit">
                </div>
            
              </form>
            </div>


          </div>
        </div>
      </div>
      </div>
    <footer id="footer">
        <div id="upper">
          <div id="upper_left">
            <div class="upper_left_content">
              <h5>Sign up for our newsletter</h5>
            </div>
          </div>
          <div id="upper_right">
            <form>
              <label for="email__id"></label>
              <input type="email" name="email" id="email__id" placeholder="Email..">
              </input>
              
              <input type="submit" value="Submit" id="submit"></input>
            </form>
            </div>
          </div>
        <div id="line">
          <hr style="color: #25282A;">
        </div>  
        <div id="lower"> 
          <div class="lower_first" >
            <p>Untwadi Rd, Lavate Nagar, <br>
              Parijat Nagar, Nashik, <br>
              Maharashtra 422002</p>
              <br>
              <br>
            <p>
              T: 09225129632<br>
            </p>
            <p id="p1">E: helpdesk.ccmnashik@sarda.co.in</p>
          </div>
          <div class="lower_second">
            <p>
              EXPLORE
            </p>
            
            <br>
            <ul>
              <li>
                <a href="">Shop</a>
              </li>
              <li>
                <a href="">Dine in</a>
              </li>
              <li>
                <a href="">Entertainment</a>
              </li>
            </ul>
          </div>
          <div class="lower_third">
            <p>
              INFORMATION
            </p>
            
            <br>
            <ul>
              <li>
                <a href="">About</a>
              </li>
              <li>
                <a href="">Safety</a>
              </li>
              <li>
                <a href="">Health Safety Policy</a>
              </li>
              <li>
                <a href="">Awards</a>
              </li>
              <li>
                <a href="">Events</a>
              </li>
              <li>
                <a href="">News</a>
              </li>
            </ul>
          </div>
          <div class="lower_fourth">
            <p>
              LEGAL
            </p>
            
            <br>
            <ul>
              <li>
                <a href="">Privacy Policy</a>
              </li>
            </ul>
          </div>
          
        </div>
      </footer>
  
      
      
  
      
      
          
  </body>
  </html>