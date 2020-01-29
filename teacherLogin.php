<?php include 'teacherLoginL.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>login form</title>
  <style type="text/css">
 
    .container{
      background-color:#51b5a4;
      width: 350px;
      height: 400px;
      margin-top: 0px;
      border-radius: 10px;
       border: 2px solid blue
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
  </head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <h4 style="color: white; margin-top: 10px;padding-top: 5px;margin-left: 5px;letter-spacing: 1px; "> Teacher Login</h4>
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
  <br>
    <h4 style="color: white;">Teacher Login</h4>

<hr>

    <form action="teacherlogin.php" method="post">
    <div class="form-group">
    
      <label for="Email" style="color: white;">Email</label><br>

      
              <input style="width: 250px;height: 30px; border-radius:5px;" type="email" required="required" class ="form" name="email">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: white;">Password</label>
<input style="width: 250px;height: 30px; border-radius: 5px;" type="password" required="required" class ="form" name="password">
    </div>




 <button type="submit" name="login_teacher" class="btn btn-primary ">Login</button>
   </form>


    <p style="margin-top: 20px; color: white;">Forget password?Click here to <a style="color: blue;"  href="forget.php">Reset password</a></p>

    <p style="margin-top: 15px; color: white;">Dont have an account ?Click here to <a style="color: blue;" href="teacherReg.php">Signup</a></p>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>
</html>
