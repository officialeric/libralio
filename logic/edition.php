<?php
session_start();
include '../database/connection.php';

//editBook
if(isset($_POST['editBook'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $copy = $_POST['copy'];

    $sql = "UPDATE `books` SET `name` = '$name', `author` = '$author', `publisher` = '$publisher', `year` = '$year', `copy` = '$copy' WHERE `id` = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: ../src/dist/pages/books.php");
    }
}

//editMember
if(isset($_POST['editMember'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `members` SET `name`='$name' , `phone`='$phone' WHERE `id`=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: ../src/dist/pages/members.php");
    }
}
