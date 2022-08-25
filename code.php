<?php
session_start();
 require 'dbcon.php';


 if(isset($_POST['delete_student']))
 {
   $student_id = mysqli_real_escape_string($con,$_POST['delete_student']);
   $query = "DELETE FROM students WHERE  id ='$student_id'";
   $query_run =- mysqli_query($con,$query);


   if($query_run)
   {
    $_SESSION['message'] = 'employee_data deleted Successfully';
    header("Location:index.php");
    exit(0);
   }

   else
   {
    $_SESSION['message'] = 'employee_data not deleted Successfully';
    header("Location:index.php");
    exit(0);

   }
 }


 if(isset($_POST['update_student']))
 {
   $student_id = mysqli_real_escape_string($con,$_POST['student_id']);
   $name= mysqli_real_escape_string($con,$_POST['name']);
   $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
   $email = mysqli_real_escape_string($con,$_POST['email']);
   $whatsapp= mysqli_real_escape_string($con,$_POST['whatsapp']);
   $delhi_address = mysqli_real_escape_string($con,$_POST['delhi_address']);
   $par_address = mysqli_real_escape_string($con,$_POST['par_address']);

   $query = "UPDATE students SET  name = '$name',mobile = '$mobile', email = '$email',whatsapp = '$whatsapp',delhi_address= '$delhi_address',par_address = '$par_address' WHERE id = '$student_id'";
    
   $query_run = mysqli_query($con,$query);
   if($query_run){
    $_SESSION['message'] = 'employee_data Successfully';
    header("Location:index.php");
    exit(0);
   }
   else
   {
    $_SEESION['message'] = 'employee_data not updated Successfully';
    header("Location:index.php");
    exit(0); 
   }
 }

 if(isset($_POST['save_student'])){
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $whatsapp= mysqli_real_escape_string($con,$_POST['whatsapp']);
    $delhi_address = mysqli_real_escape_string($con,$_POST['delhi_address']);
    $par_address = mysqli_real_escape_string($con,$_POST['par_address']);

    $query = "INSERT INTO students(name,mobile,email,whatsapp,delhi_address,par_address) VALUES ('$name', '$mobile','$email',
    '$whatsapp','$delhi_address','$par_address')";

    $query_run =mysqli_query($con,$query);

    if($query_run){
      $_SESSION['message'] = 'employee_data updated Successfully';
      header("Location:index.php");
      exit(0);
    }
    else{
      $_SEESION['message'] = 'employee_data not updated Successfully';
      header("Location:index.php");
      exit(0);
    }
    
 }



?>