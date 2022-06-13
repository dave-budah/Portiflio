<?php
/**
 * @var $conn;
 */
session_start();
date_default_timezone_set('Africa/Harare');
include '../admin/includes/dbh.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    if(mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $hashedPwdCheck = password_verify($password, $row['password']);
        if (!$hashedPwdCheck) {
            echo 'Incorrect password';
            exit();
        }

        if ($hashedPwdCheck == true) {
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['username'] = $row['name'];
            echo 'You are now logged in';
            exit();
        }
    } else {
        echo 'User does not exist';
        exit();
    }
} else {
    echo 'All fields are required';
}
