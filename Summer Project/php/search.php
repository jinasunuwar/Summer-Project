<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);
    
    $sql = mysqli_query($con, "SELECT * FROM users WHERE  NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    $output = "";

    if(mysqli_num_rows($sql) > 0){
        include_once "data.php";
    }else {
        $output .= "No users found.";
    }
    echo $output;
?>