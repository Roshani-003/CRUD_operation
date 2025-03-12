<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `employee` WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo 'deleted successful';
        header('location:display.php');

    }else{
        die(mysqli_error($con));
    }


}



?>