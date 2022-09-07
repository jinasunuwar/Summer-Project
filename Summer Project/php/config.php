<?php
    $con = mysqli_connect("localhost","root","","chatapp");
    if(!$con){
        echo "DB Connected!" . mysqli_connect_error();
    }
?>