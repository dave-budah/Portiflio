<?php
/**
 * @var $conn;
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * Phone: +263772635973
 */

include_once 'includes/dbh.inc.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $res = mysqli_query($conn, "SELECT * FROM projects WHERE project_id = '$id'");
    while ($row = mysqli_fetch_array($res)) {
        $project_image = $row['image'];
    }
    unlink("../uploads/".$project_image);
    $query = "DELETE FROM projects WHERE project_id = ".$_GET['deleteid'];
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: projects.php?deleted");
    } else {
        header("Location: projects.php?error");
    }
}
