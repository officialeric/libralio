<?php
session_start();
include '../database/connection.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    $sql = "DELETE FROM $table WHERE id=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: ../src/dist/pages/" . $table .".php");
    }else{
        echo 'something went wrong';
    }
}