<?php
    include "conn.php";

    $client = $_GET['client'];
    if(!isset($client)){
        header("location: ../index.php");
    }
    $delete = mysqli_query($conn, "DELETE FROM `data` WHERE `crud_id` = '$client'");

    
    if($delete){
        header("location: ../index.php");
    }

?>