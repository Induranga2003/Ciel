<?php 

include 'database.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
      //   $insertQuery="INSERT INTO users(firstName, lastName, email, password)
      //                  VALUES ('$firstName','$lastName','$email','$password')";
      //       if($conn->query($insertQuery)==TRUE){
      //           header("location: index.php");
      //       }
      //       else{
      //           echo "Error:".$conn->error;
      //       }
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
      //   echo "Email Address Already Exists !";
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
// $sql="SELECT * FROM users WHERE firstName='$firstName' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    // $_SESSION['firstName']=$row['firstName'];
    header("Location: homepage.php"); 
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>