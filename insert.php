<?php
//function InsertUser(){
   //global $con;
  if(isset($_POST['submit']))
  { 

     // securing the table mysqli_real_escape_string();

    $firstname = mysqli_real_escape_string($con,$_POST['firstname']);

    $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
    $contact = mysqli_real_escape_string($con,$_POST['contact']);
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']); 
    
    $password = mysqli_real_escape_string($con,$_POST['password']);
       
      
    $city =mysqli_real_escape_string($con,$_POST['city']);

    $zip =mysqli_real_escape_string($con,$_POST['zip']);
    
    
    $status = "unverrified";   


       $address = mysqli_real_escape_string($_POST['address']);

       $get_email="select * from register where email ='$email'";
       $run_email=mysqli_query($con,$get_email);
       $check=mysqli_num_rows($run_email);


       if($check==1){
        
      echo "<script>alert('this email is already registered!')</script>" ;
      exit();
            }   
    else{

      $insert ="insert into register(firstname,lastname,contact,email,gender,registerDate,lastLogin,status,city,zip,password) values('$firstname','$lastname','$contact','$email','$gender',NOW(),NOW(),'$status','$city','$zip','$password')";
    
      $run_insert= mysqli_query($con ,$insert);

      if($run_insert){
      	$_SESSION['email']=$email;
        echo "<script>alert('Registration Successful!')</script>";
        echo "<script>window.open('success.php','_self')</script>";
      }

    }
   }

//}

?>