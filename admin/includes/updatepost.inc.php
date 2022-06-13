<?php
/**
 * @var $conn;
 */
include_once '../includes/dbh.inc.php';
$post_id = $_POST['post_id'];
$sql = "SELECT * FROM posts WHERE post_id = '$post_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$content = $row['body'];
$category_id = $row['category'];
$status = $row['status'];
$image = $row['image'];
$tags = $row['tags'];
$credit = $row['credit'];
$link = $row['creditLink'];


$title = mysqli_real_escape_string($conn, $_POST['title']);
$category =mysqli_real_escape_string($conn, $_POST['category']);
$tags = mysqli_real_escape_string($conn, $_POST['tags']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$credit = mysqli_real_escape_string($conn, $_POST['credit']);
$creditLink = mysqli_real_escape_string($conn, $_POST['credit_link']);
$content = mysqli_real_escape_string($conn, $_POST['body']);
$date = date('Y-m-d');

if (!empty($title) && !empty($content) && !empty($category) && !empty($tags) && !empty($description)) {
    if (isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $file_explode = explode('.', $file_name);
        $file_ext = strtolower(end($file_explode));

        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === true) {
            if ($file_size < 2097152) {
                $time = time();
                $file_name_new = $time.$file_name;
                $image = $file_name_new;
                if (move_uploaded_file($file_tmp, "../../uploads/".$file_name_new)){
                    $sql = "UPDATE posts SET title = '$title', category = '$category', tags = '$tags', description = '$description', status = '$status', credit = '$credit', credit_link = '$creditLink', body = '$content', image = '$image', created_at = '$date' WHERE post_id = '$post_id'";
                    if ($sql) {
                        echo "Post created successfully.";
                    }
                } else {
                    echo "There was an error. Please try again.";
                }
            } else {
                echo 'File size must be less than 2 MB';
            }
        } else {
            echo "extension not allowed, please choose a JPEG or PNG file.";
        }
    } else {
        echo "Please select an image.";
    }

} else {
    echo "All fields are required";
}

