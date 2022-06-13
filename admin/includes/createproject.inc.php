<?php
/**
 * @var $conn;
 */
include_once '../includes/dbh.inc.php';

$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$linkOne = mysqli_real_escape_string($conn, $_POST['link_one']);
$linkTwo = mysqli_real_escape_string($conn, $_POST['link_two']);

if (!empty($title) && !empty($linkOne) && !empty($linkTwo) && !empty($description)) {
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
                  $sql = mysqli_query($conn, "INSERT INTO projects (title, image, link_one, link_two, description) VALUES ('$title', '$image', '$linkOne', '$linkTwo', '$description')");
                  if ($sql) {
                      echo "Project created successfully.";
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

