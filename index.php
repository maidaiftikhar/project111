<!DOCTYPE html>
<html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
.col-container {
  display: flex;
  width: 100%;
}
.col {
  flex: 1;
  padding: 16px;
}
body {
  margin: 0;
    font-family: Arial;
  font-size: 17px;
}

/* Style the header */
.header {
  background-color:     #F0F8FF;
  height: 43px;
  text-align: left;
}




 .button {
    height: 40px;
    width: 100px;
    background-color:   #C0C0C0;
    color: white;
    font-weight: bold;
    border: none;
    margin-left: 92%;
    margin-top: 2px;

   }


.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: left;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 96%;
  padding: 20px;

}
.mySlides {display:none;}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:  #51b5a4;
   color: white;
   text-align: center;
}

nav {
  background: #51b5a4;
  height: 100px;
  z-index: 1;

}

nav #menu {
  float: left;
  left: 80%;
  border-left: 5px;
  position: relative;
}

nav #menu li {
  
  /*border: 2px solid white;*/
  display: inline-block;
  padding: 0px 10px;
  cursor: pointer;
  line-height: 30px;
  position: relative;
  transition: all 0.3s ease-out;

}

nav #menu li a {
  color: #fff;
}

nav #menu li:hover {
  background: #333;
}





</style>

</head>

<body>



<nav>
  
     
  <img src="./images/logo.jpeg" style="height: 90px; width: 200px;margin-top: 5px;float: left;">
  
  </nav>



<div class="header">
  <a href="createpro.php"><button class="button" > <span class="glyphicon glyphicon-log-in"></span>&nbsp LOGIN</button></a>

</div>
<div class="container">
  <img src="./images/img6.jpeg" alt="Notebook" style="width:100%;">

  <div class="content">
    <h2>STUDENT PORTAL</h2>
    <p> This portal contain all the stuff related to your class and departement.You can get all the stuff like slides,books,tutorials and scholarship details from this site by enrolling yourself</p>
  </div>
</div>
<h2> Services we provide </h2>

<div class="col-container">
  <div class="col" style="background:lightgreen">
    <h2>COURSE MATERIAL</h2>
    <p>All the course books/slides are avalaible in soft form</p>
  </div>

  <div class="col" style="background:lightblue">
    <h2>SCHOLARSHIP</h2>
    <p>All the scholarship details were also provided to the students</p>

  </div>

  <div class="col" style="background:pink">
    <h2>OTHER STUFF</h2>
    <p>Links of course relared tutorials and ppt/pdf links of the related search are provided</p>

  </div>
</div>



   
  <p>Contact information:</p>
  

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



