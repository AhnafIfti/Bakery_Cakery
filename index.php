<!doctype html>
<?php
session_start();
include ("includes/connection.php");
include ("functions/log.php");
?>
<html lang="en">
  <head>
    <title>Bakery Cakery!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Theme CSS File -->
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">
    
  </head>
  <body>

    <!-- Navigation Menu Start -->
    <header>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive" alt="Bakery Cakery!"></a>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="home.php">Home</a></li>
              <li><a href="menu.php">Menu</a></li>
         
              <li><a href="login.php">Login</a></li>
              <li><a href="aboutus.php">Contact US</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Navigation Menu End -->

    <!--Sign in section starts --> 
  <section class="container reg">
    <center><h1>REGISTER TO ORDER!</h1></center>
      <form action="" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                </div><div class="form-row">
                <div class="form-group col-md-6">
                  <label for="contact">Contact</label>
                  <input type="text" class="form-control" name="contact" placeholder="Contact">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
              </div>

              </div>
              
              
             
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="city">City</label>
                   <select name="city" class="form-control">                   
                    <option>Dhaka</option>
                    <option>Chittagong</option>
                    <option>Sylhet</option>
                    <option>Khulna</option>
                    <option>Barisal</option>
                    <option>Rajshahi</option>
                    <option>Rangpur</option>
                    <option>Mymensighn</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="gender">Gender</label>
                  <select name="gender" class="form-control">                   
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="zip">Postal Code</label>
                  <input type="text" class="form-control" name="zip" placeholder="Postal Code">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              
              <center><button type="submit" name="submit"class="btn btn-primary">Register</button></center>
      </form>
      <?php include ("insert.php");?>
    
  </section>

    <!--Sign in section ends -->


    <!-- Footer Section Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul>
              <li><i class="fa fa-facebook-square" aria-hidden="true"></i><a href="https://facebook.com">Facebook</a></li>
              <li><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="https://twitter.com/">Twitter</a></li>
              <li><i class="fa fa-youtube-square" aria-hidden="true"></i><a href="https://www.youtube.com/">YouTube</a></li>
              <li><i class="fa fa-linkedin-square" aria-hidden="true"></i><a href="https://www.linkedin.com/">LinkedIn</a></li>
              
            </ul>
          </div>

          
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->


    <section class="footer-bg">
      <div class="newsletter-opacity">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <p class="text-center">&copy; 2018 All Rights Reserved || AUST CSE - 3.1 (Spring-18)</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Library JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS File -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>