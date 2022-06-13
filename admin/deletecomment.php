<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * Phone: +263772635973
 * @var $conn;
 */

include_once 'includes/dbh.inc.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $res = mysqli_query($conn, "SELECT * FROM comments WHERE comment_id = '$id'");
    $query = "DELETE FROM comments WHERE comment_id = ".$_GET['deleteid'];
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: comments.php?deleted");
    } else {
        header("Location: comments.php?error");
    }
}
