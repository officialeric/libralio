<?php
session_start();
include '../database/connection.php';

if(isset($_POST['login'])) {
    function validate($data) {
        htmlspecialchars($data);
        stripcslashes($data);
        trim($data);

        return $data;
    }


    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $checking_if_not_exist = "SELECT * FROM `staffs` WHERE `email`='$email'";
    $is_exist = mysqli_query($conn,$checking_if_not_exist);

    if($is_exist){
        if(mysqli_num_rows($is_exist) == 1){
            $staff = mysqli_fetch_assoc($is_exist);

            if($staff['password'] != $password) {
               echo 'incorrect password';
            }else{
                
                $_SESSION['staff_id'] = $staff['id'];
                $_SESSION['staff_username'] = $staff['username'];
                
                header("location: ../src/dist/pages/index.php");
            }

        }else{
            echo 'user not found';
        }
    }
}