<?php
    //Started Connection
    require('connection.php');

    // Get data from my database table
    $query = "SELECT * FROM `table1`";

    //Stored data in result variable
    $result = $con->query($query);


    // if($result){
    //   echo 'good';
    // }
    // else{
    //   echo "Error: " . $query . "<br>" . $con->error;
    // }
    
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
          <a class="navbar-brand" href="#">PHP CRUD Operation</a>
          <ul class="navbar-nav">
          <li class="nav-item">
            <a href="insert.php" class="nav-link">Add Todos</a>
          </li>
          </ul>
        </div>
          
        </nav>


      <div class="container my-2">
        <div class="jumbotron bg-warning text-white">
            <h1 class="display-7">My Todos</h1>
            <p class="lead text-dark">This CRUD operation is made by PHP and MySQL</p>
                
        </div>

        <table class="table table-dark">
          <thead>
            <tr class="text-center">
             
              <th>Task Name</th>
              <th>Duration</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
    <tbody>


    <?php

    //Showing my data dynamically

    //Making my non string data into string
      while($row = $result->fetch_assoc()){

        $taskname = $row["Task Name"];
        $duration = $row["Duration"];
        $status = $row['Satus'];
        $id = $row['id'];
      
    ?>
      <tr class="text-center">
        <!-- Printing Data  -->
        <td><?php echo $taskname?></td>
        <td><?php echo $duration?></td>
        <td><?php echo $status?></td>
        <td>

        <!-- Set Action for Edit and Delete -->
          <a href="update.php?edit-id=<?php echo $id; ?>"><button class="btn btn-primary">Update</button></a>
          <a href="delete.php?delete-id=<?php echo $id; ?>"><button class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

        
      </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>