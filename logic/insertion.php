<?php
session_start();
include '../database/connection.php';

//addBook
if(isset($_POST['addBook'])){
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $copy = $_POST['copy'];

    $creating_book = "INSERT INTO `books` (`name`, `author`, `publisher`, `year`, `copy`) 
                      VALUES ('$name', '$author', '$publisher', '$year', '$copy');";
    $is_created = mysqli_query($conn,$creating_book);

    if($is_created){
        header("location: ../src/dist/pages/books.php");
    }else{
        echo 'something went wrong';
    }

}
//addMember
if(isset($_POST['addMember'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $creating_user = "INSERT INTO `members` (`name`, `phone`) 
                      VALUES ('$name', '$phone');";
    $is_created = mysqli_query($conn,$creating_user);

    if($is_created){
        header("location: ../src/dist/pages/members.php");
    }else{
        echo 'something went wrong';
    }
   
}
//addLoan
if(isset($_POST['addLoan'])){
    $member = $_POST['member'];
    $book = $_POST['book'];
    $staff = $_SESSION['staff_id'];
    $dateIssued = $_POST['dateIssued'];
    $dueDate = $_POST['dueDate'];

    $creating_loan = "INSERT INTO `loans` (`member_id`, `book_id`, `issued_by`, `issued_date`, `due_date`) VALUES ('$member', '$book', '$staff', '$dateIssued', '$dueDate')";
    $is_created = mysqli_query($conn,$creating_loan);

    if($is_created){
        header("location: ../src/dist/pages/loans.php");
    }else{
        echo 'something went wrong';
    }
}
