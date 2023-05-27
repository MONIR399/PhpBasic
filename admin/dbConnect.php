<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="admin";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connect fail.".$conn->connect_error);
    }

?>