<?php
/**
 * @var $conn;
 *
 */
session_start();
include './admin/includes/dbh.inc.php';



    $postid = mysqli_real_escape_string($conn, $_POST['postid']);
    $name =  mysqli_real_escape_string($conn, $_POST['comment_author']);
    $email =  mysqli_real_escape_string($conn, $_POST['comment_email']);
    $comment =  mysqli_real_escape_string($conn, $_POST['comment_body']);


    if (!empty($name) && !empty($email) && !empty($comment)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $query = mysqli_query($conn,"SELECT * FROM comments WHERE post_id = '$postid' AND comment_email = '$email' AND comment_body = '$comment'");
            if(mysqli_num_rows($query) > 0){
               echo "Duplicate comment, write a new one";
           } else {
                $sql = mysqli_query($conn, "INSERT INTO comments (post_id, comment_author, comment_email, comment_body)
                VALUES ('{$postid}', '{$name}', '{$email}', '{$comment}')");
                if ($sql) {
                     echo "Comment posted successfully";
                } else {
                     echo "There was an error. Please try again later.";
                }
            }

        } else {
            echo "Please enter a valid email address";
//            header("Location: ../article.php?id=" . $postid);
        }
    } else {
        echo "Please fill in all fields";
//        header("Location: ../article.php?id=" . $postid);
    }

