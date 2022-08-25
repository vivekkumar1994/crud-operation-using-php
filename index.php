<?php
session_start();
require('dbcon.php')





?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cruid operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php 
      include('message.php');
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>student detail</h4>
              <a href="student-create.php" class="btn btn-primary float-end">Add student</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped" >
                <thead>
                  <tr>
                      <td>id</td>
                      <td>student_name</td>
                      <td>mobile</td>
                      <td>Email</td>
                      <td>What app number</td>
                      <td>Delhi address</td>
                      <td>Permanent address</td>
                      <td>Action</td>
                     

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM students";
                  $query_run =mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $student)
                    {
                      // echo $student['name'];
                      ?>
                       <tr>
                       <td><?=$student['id']; ?></td>
                       <td><?=$student['name']; ?></td>
                       <td><?=$student['mobile']; ?></td>
                       <td><?=$student['email']; ?></td>
                       <td><?=$student['whatsapp']; ?></td>
                       <td><?=$student['delhi_address']; ?></td>
                       <td><?=$student['par_address']; ?></td>
                       <td>
                       <a href="student-view.php?id=<?=$student['id']; ?>" class = "btn btn-info btn-sm">view</a>
                       <a href="student-edit.php?id=<?=$student['id']; ?>" class = "btn btn-success btn-sm">Edit</a>
                       <form action="code.php" method="POST" class = "d-inline">
                           <button type = "submit" name = "delete_student"  value = <?= $student['id'];?> class = "btn btn-danger btn-sm">Delete</button>
                        </form>
                     </td>
                   </tr>
                   <?php
                    }
                  }
                  else{
                    echo '<h3>No record found</h3>';
                  }
                  
                  
                   ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>