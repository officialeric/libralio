<?php

$server = 'localhost' ;
$username = 'root';
$pass = '';
$db = 'libralio';

//establishing a database connection

$conn = mysqli_connect($server,$username,$pass,$db);

if(!$conn) {
    echo 'Error - Database ' . $db . ' is not connected';
}
