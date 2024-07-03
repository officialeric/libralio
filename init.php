<?php

include 'database/connection.php';

// all books
$selecting_books = 'SELECT * FROM books';
$books = mysqli_query($conn,$selecting_books);

// all books
$selecting_staffs = 'SELECT * FROM staffs';
$staffs = mysqli_query($conn,$selecting_staffs);

// all books
$selecting_members = 'SELECT * FROM members';
$members = mysqli_query($conn,$selecting_members);

// all books
$selecting_loans = 'SELECT * FROM loans';
$loans = mysqli_query($conn,$selecting_loans);

//specific item
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $table = $_GET['table'];

    $selecting_a_book = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($conn,$selecting_a_book);

    if(mysqli_num_rows($result) > 0){
        $entity = mysqli_fetch_assoc($result);
    }
}