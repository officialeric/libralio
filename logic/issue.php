<?php
session_start();
include '../database/connection.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE `loans` SET `status`='checked' WHERE `id`=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: ../src/dist/pages/loans.php");
    }else{
        echo 'something went wrong';
    }

}