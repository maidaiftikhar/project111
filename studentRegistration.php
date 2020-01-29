<?php include('studentRegistrationL.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Portal</title>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<style> 



 .Register-box{

  border: 2px solid blue; margin-left: 350px; margin-top: 3px; padding-left: 50px;padding-right: 50px;  background-color:  #51b5a4 ;  height: 530px; width: 440px; border-radius: 10px 10px 10px 10px;">
}

  .navbar {
    margin-bottom: 0;
    background-color: #51b5a4;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    height: 40px; 


   
  }
  
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    margin-top: 3px;
    height: 45px;


  }



  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #51b5a4 !important;
    background-color: #fff !important;



  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;


  }


  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }

    
  }

</style>

 <body>
 
   

<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<h4 style="color: white; margin-top: 10px;padding-top: 5px;margin-left: 5px;letter-spacing: 1px; "> Student Registeration</h4>    
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right nav-pills">
                 <li><a href="studenthome1.php">HOME</a></li>



        <li><a href="scholarpageO1.php">SCHOLARSHIP</a></li>

           
        <li><a href="cntc12.php">CONTACT</a></li>
                

        <li><a href="aboutus1.php">ABOUT</a></li>
     
      </ul>
    </div>
  
</nav>
</div>
<br>

      
       <img src="./images/logo.jpeg" style="height: 200px; width: 250px; margin-left: 40%;margin-top: 0px;">

     <div class="container">
      <div class="Register-box"> 


      <form  action="studentRegistration.php" method="POST">
               <?php include('error.php'); ?> 


     
       <br>
       

      <div><h4 style="color: white;">Student Registration</h4></div>

    <hr>
     <div class="form-group">
      
      <label for="username">Name</label>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <input  type= "name" class="form-group" required="required"  placeholder="Enter username " name="name">
      
      
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>


     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <input  type="email" class="form-group" required="required"  placeholder="Enter Email Address" name="email">
     
    </div>

    <div class="form-group">
      <label for="pwd">Password</label>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

       <input  type="Password" class="form-group" required="required" placeholder="Enter your password" name="password1">
      
    </div>

     <div class="form-group">
      <label for="confirmpassword">Confirm Password</label>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

       <input  type="Password" class="form-group" required="required" placeholder="Confirm your password" name="password2">
      
    </div>   
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I Agree the Terms & Conditions
      </label>
    </div>
       <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Submit</button>
    
  </form>

</div>
</div>

</div>
<br>
<footer class="page-footer font-small indigo" style="background-color: #51b5a4;
  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 style="color: white;" class="font-weight-bold text-uppercase mt-3 mb-4">Contact Developers</h5>

        <ul class="list-unstyled">
          <li>
            <p style="color: white;">Contact Dev Team</p>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 style="color: white;" class="font-weight-bold text-uppercase mt-3 mb-4">Email</h5>

        <ul class="list-unstyled">
         <li>
            <p style="color: white;">maidaiftikhar5@gmail.com</p>
          </li>


          <li>
            <p style=" color: white;">sumeethassan4@gmail.com</p>
          </li>
          <li>
            <p style="color: white;">hadiqakhan566@gmail.com</p>
          </li>
          <li>
            <p style="color: white;">primekhan555@gmail.com</p>
          </li>
        </ul>

      </div>
      </div>
      </div>


    </div>


  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 ">
    <p style="color: white;"> © 2019 Copyright <br>Student Portal 2019</p>
  </div>
  <!-- Copyright -->

</footer>

</body>
</html>