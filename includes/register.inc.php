<?php
/**
 * @var $conn;
 */
session_start();
date_default_timezone_set('Africa/Harare');
include_once '../admin/includes/dbh.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword =  $_POST['confirmPassword'];

if (!empty($name) && !empty($email) && !empty($password) && !empty($cpassword)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($password === $cpassword) {
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
             echo "$email already exists";
            } else if (strlen($password) >= 6 && strlen($password) <= 18) {
                $password = preg_match('/[A-Z]/', $password) ? preg_replace('/[A-Z]/', '', $password) : $password;
                $random_id = uniqid('ST', true);
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $password = $hashedPwd;
                $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, name, email, password, role)
                VALUES ('{$random_id}', '{$name}', '{$email}', '{$password}', 'subscriber')");
                if ($sql2) {
                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql3) > 0){
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['username'] = $row['name'];
                        echo "You are now registered";
                    }
                } else {
                    echo 'There was an error. Please try again later.';
                    exit();
                }
            } else {
                echo "Password must be at least 6 characters & at most 20 characters";
                exit();
            }
        } else {
            echo 'Passwords do not match.';
            exit();
        }
    } else {
       echo 'Invalid email format.';
        exit();
    }
} else {
    echo 'All fields are required.';
    exit();
}
