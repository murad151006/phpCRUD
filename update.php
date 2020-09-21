<?php
    require('connection.php');
    
    if(isset($_GET['edit-id'])){
        $id = $_GET['edit-id'];
        echo $id;
        $query = "SELECT * FROM `table1` WHERE id='$id'";
        
        $record = $con->query($query);
       
        if($record){
            echo 'goods';
        }
        else{
            echo "Error: " . $query . "<br>" . $con->error;
          }
    }

    if (isset($_POST['update'])) {
        $idup = $_POST['id'];
        $taskname = $_POST['task'];
        $duration = $_POST['duration'];
        $status = $_POST['status'];
        echo $id;
        $updatedRecord = "UPDATE `table1` SET `Task Name`='$taskname', `Duration`='$duration', `satus`='$status' WHERE id='$idup'";
        
        
        if ($con->query($updatedRecord) === TRUE) {
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
            Update your to do
        </h1>
        <form action="update.php" method="POST">
        <?php
        while($row = $record->fetch_assoc()){
            $taskname = $row["Task Name"];
            $duration = $row["Duration"];
            $status = $row['Satus'];
            $id1 = $row['id'];
        ?>
            <div class="form-group">
                <label for="name">Task Name</label>
                <input type="text" class="form-control" name= "task" value="<?php echo $taskname?>">

            </div>
            <div class="form-group">
            <label for="name">Duration</label>
                <input type="text" class="form-control" name= "duration" value="<?php echo $duration?>">
            </div>
            <div class="form-group">
                <label for="name">Staus</label>
                <input type="text" class="form-control" name= "status" value="<?php echo $status?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id1; ?>"/>
            <?php } ?>
            <button type="submit" class="btn btn-success" name="update">Update</button>
        </form>
      </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>