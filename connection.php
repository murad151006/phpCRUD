<?php

    // Make conncention
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mydb = 'todos';

    $con = new mysqli($servername, $username, $password, $mydb);

    // if(!$con){
    //     die('connection failed'. $conn->connect_error);
    // }
    // echo 'conenction succesful';

    
    
?>