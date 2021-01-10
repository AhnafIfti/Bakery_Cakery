<?php
include ("includes/connection.php");

$error = '';
$name = '';
$semail = '';
$acontact = '';
$message = '';

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if(isset($_POST["send"]))
{
  if(empty($_POST["name"]))
  {
    $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
  }
  else
  {
    $name = clean_text($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
    }
  }
  if(empty($_POST["semail"]))
  {
    $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
  }
  else
  {
    $semail = clean_text($_POST["semail"]);
    if(!filter_var($semail, FILTER_VALIDATE_EMAIL))
    {
      $error .= '<p><label class="text-danger">Invalid email, check again!</label></p>';
    }
  }
  if(empty($_POST["acontact"]))
  {
    $error .= '<p><label class="text-danger">Contact is required</label></p>';
  }
  else
  {
    $acontact = clean_text($_POST["acontact"]);
    if(!filter_var($acontact, FILTER_SANITIZE_NUMBER_INT))
    {
      $error .= '<p><label class="text-danger">Invalid contact number, check again!</label></p>';
    }
  }
  if(empty($_POST["message"]))
  {
    $error .= '<p><label class="text-danger">Message is required</label></p>';
  }
  else
  {
    $message = clean_text($_POST["message"]);
  }
   

      
  
      $cinsert ="insert into contact(name,semail,acontact,date,message) values('$name','$semail','$acontact',NOW(),'$message')";
    
      $run_cinsert= mysqli_query($con ,$cinsert);

      if($run_cinsert){
        
        echo "<script>alert('Thank you for contacting us!')</script>";
       // echo "<script>window.open('home.php')</script>";
        
      }

     

    }

    
  

    ?>
<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
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
              <li><a href="index.php">Home</a></li>
              <li><a href="menu.php">Menu</a></li>
             
              <li><a href="login.php">Login</a></li>
              <li class="active"><a href="aboutus.php">Contact US</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Navigation Menu End -->

   <section class="bg-img">
      <div class="container"> 
        <div class="row text-center">
          <h1>Want To Send Us a Message?</h1>
          <h4><a href="">Contact: +8801821739415</a> || <a href="https://mail.google.com">email: abc@gmail.com</a></h4>

           <div class="col-md-8 col-md-offset-2">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-danger"><a href="register.html"> Sign Up</a></button>
                  </span>
                </div>
              </div>
              </div>
 
          
        </div>
      </div>
    </section>
    <!-- Background Image Section Start -->
<section class="blog-section">
      <div class="container">
        <div class="row">
        
           <div class="col-md-offset-3 col-md-6 col-md-offset-3 ">
           	  <h1 class="title text-center">Send Us a Message!</h1>
              
              <form method="post">
          
          <br />
          <?php echo $error; ?>
          <div class="form-group">
            <label>Enter Name</label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
          </div>
          <div class="form-group">
            <label>Enter Email</label>
            <input type="text" name="semail" class="form-control" placeholder="Enter Email" value="<?php echo $semail; ?>" />
          </div>
          <div class="form-group">
            <label>Enter Phone Number</label>
            <input type="text" name="acontact" class="form-control" placeholder="Enter Contact" value="<?php echo $acontact; ?>" />
          </div>
          <div class="form-group">
            <label>Enter Message</label>
            <textarea name="message" class="form-control" placeholder="Enter Message"><?php echo $message; ?></textarea>
          </div>
          <div class="form-group" align="center">
            <input type="submit" name="send" class="btn btn-primary" value="Submit" />
          </div>
        </form></div>
           
          </div>
        </div>
      </div>
    </section>

    <!--location starts-->


     <div >
				
			 	<div class="container map">
			 		<div class="col-md-12">
			 			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.538839500695!2d90.40469681468616!3d23.76381908458276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah+University+of+Science+and+Technology!5e0!3m2!1sen!2sbd!4v1533017114386" width="1110" height="300"  frameborder="0" style="border:0" allowfullscreen></iframe>

			 			
			 		</div>
			 	</div>	

	
  </div>
      
     
    
  


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