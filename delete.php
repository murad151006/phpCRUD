<?php
    require_once('connection.php');
    if(isset($_GET['delete-id'])){
        $id = $_GET['delete-id'];
        
        $query = "DELETE FROM `table1` WHERE id='$id'";
        
        $delete = $con->query($query);
       
        if($delete){
            header('location: index.php');
        }
        else{
            echo "Error: " . $query . "<br>" . $con->error;
          }
    }
?>