<?php
/**
 * @var $conn;
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * @var $conn;
 */

include_once 'includes/dbh.inc.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $res = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = '$id'");
    while ($row = mysqli_fetch_array($res)) {
        $post_image = $row['image'];
    }
    unlink("../uploads/".$post_image);
    $query = "DELETE FROM posts WHERE post_id = ".$_GET['deleteid'];
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: posts.php?deleted");
    } else {
        header("Location: posts.php?error");
    }
}
