<?php
/**
 * @var $conn;
 *
 */
include './admin/includes/dbh.inc.php';



    $postid = mysqli_real_escape_string($conn, $_POST['postid']);
    $name =  mysqli_real_escape_string($conn, $_POST['comment_author']);
    $email =  mysqli_real_escape_string($conn, $_POST['comment_email']);
    $comment =  mysqli_real_escape_string($conn, $_POST['comment_body']);

    if (!empty($name) && !empty($email) && !empty($comment)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO comments (comment_body, comment_author, comment_email, post_id, status) VALUES ('$comment', '$name', '$email', '$postid','unapproved')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Comment submitted successfully";
            } else {
                echo "Comment submission failed";
            }
        } else {
            echo "Please enter a valid email.";
        }
    } else {
        echo "All fields are required.";
    }

