<?php
session_start();
require('dbcon.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
           
    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>student edit
                            <a href="index.php" class ="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                          $student_id= mysqli_real_escape_string($con,$_GET['id']);
                          $query = "SELECT * FROM students WHERE id = '$student_id'";
                          $query_run = mysqli_query($con,$query);
                          if(mysqli_num_rows($query_run) > 0)
                          {
                            $student = mysqli_fetch_array($query_run);

                            
                          ?>


                          
                        <form action="code.php" method="POST">
                          <input type="hidden" name ="student_id" value = "<?= $student['id']; ?>">
                            <div class="mb-3">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name = "name" value ="<?=$student['name'];?>">
                            </div>
                            <div class="mb-3">
                               <label for="">mobile</label>
                               <input type="number" class="form-control" name = "mobile" value ="<?=$student['mobile'];?>">
                            </div>
                            <div class="mb-3">
                               <label for="">Email</label>
                               <input type="text" class="form-control" name = "email" value ="<?=$student['email'];?>">
                            </div>
                            <div class="mb-3">
                               <label for="">Whatsapp no</label>
                               <input type="number" class="form-control" name = "whatsapp" value ="<?=$student['whatsapp'];?>">
                            </div>
                            <div class="mb-3">
                               <label for="">Delhi Address</label>
                               <input type="text" class="form-control" name = "delhi_address" value ="<?=$student['delhi_address'];?>">
                            </div>
                            <div class="mb-3">
                               <label for="">Permanent Address</label>
                               <input type="text" class="form-control" name = "par_address" value ="<?=$student['par_address'];?>">
                            </div>
                            <div class="mb-3">
                                <button type= "submit" name = "update_student" class = "btn btn-primary">update_student</button>
                            </div>
                           
                        </form>
                        <?php

                          }
                          else{
                            echo "<h4>no such id </h4>";
                          }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>