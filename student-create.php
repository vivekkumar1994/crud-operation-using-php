<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
           
    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>student add
                            <a href="index.html" class ="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                               <label for="">Name</label>
                               <input type="text" class="form-control" name = "name">
                            </div>
                            <div class="mb-3">
                               <label for="">mobile</label>
                               <input type="number" class="form-control" name = "mobile">
                            </div>
                            <div class="mb-3">
                               <label for="">Email</label>
                               <input type="text" class="form-control" name = "email">
                            </div>
                            <div class="mb-3">
                               <label for="">Whatsapp no</label>
                               <input type="number" class="form-control" name = "whatsapp">
                            </div>
                            <div class="mb-3">
                               <label for="">Delhi Address</label>
                               <input type="text" class="form-control" name = "delhi_address">
                            </div>
                            <div class="mb-3">
                               <label for="">Permanent Address</label>
                               <input type="text" class="form-control" name = "par_address">
                            </div>
                            <div class="mb-3">
                                <button type= "submit" name = "save_student" class = "btn btn-primary">Save student</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>