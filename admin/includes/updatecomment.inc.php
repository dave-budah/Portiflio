<?php
/**
 * @var $conn;
 */
include_once 'dbh.inc.php';
// Update comment.inc.php


$id = $_POST['comment_id'];
$status = $_POST['status'];
$content = $_POST['comment_body'];
$email = $_POST['comment_email'];


$query = "SELECT * FROM comments WHERE comment_id = '$id'";

if (!empty($status) && !empty($content) && !empty($email)) {
    $sql = "UPDATE `comments` SET comment_id = '$id', status = '$status', comment_body = '$content', comment_email = '$email' WHERE comment_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Comment updated successfully";

    } else {
        echo "Comment not updated";
    }
} else {
    echo "All fields are required";
}

