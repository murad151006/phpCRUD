<?php

    //Start Connection
    require_once('connection.php');


    // When we click submit button ('done' is the name of button)
    if(isset($_POST['done'])){

      // Inserting input value in a varibale
        $task = $_POST['task'];
        $duration = $_POST['duration'];
        $status = $_POST['status'];

        // Push data inside database
        $sql = "INSERT INTO table1 (`Task Name`, `Duration`, `Satus`) VALUES ('$task', '$duration', '$status')";


        if ($con->query($sql) === TRUE) {
            header('location: index.php');
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }

    }
   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>
      <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">PHP CRUD Operation</a>
          <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link active">Add Todos</a>
          </li>
          </ul>
        </div>
          
        </nav>


      <div class="container my-2">
        

        <h1 class="text-danger my-4 text-center">
            Add New To do
        </h1>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="name">Task Name</label>
                <input type="text" class="form-control" name= "task">

            </div>
            <div class="form-group">
            <label for="name">Duration</label>
                <input type="text" class="form-control" name= "duration">
            </div>
            <div class="form-group">
                <label for="name">Staus</label>
                <input type="text" class="form-control" name= "status">
            </div>
            <button type="submit" class="btn btn-success" name="done">Submit</button>
        </form>
      </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>