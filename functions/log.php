<?php 
  session_start();

  include("includes/connection.php");

  if(isset($_POST['login']))
  { 

     // securing the table mysqli_real_escape_string();

    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $get_user="select * from register where email ='$email' AND password ='$password'";
    $run_user=mysqli_query($con,$get_user);
    $check=mysqli_num_rows($run_user);


    if(check==1){

      $_SESSION['email'] = $email;
      echo "<script>window.open('home.php', '_self')</script>";
    }
    else {
      echo "<script>alert('Password or email is not correct!') </script>";
    }

  }
?>
