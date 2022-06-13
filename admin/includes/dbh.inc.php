<?php
$conn = mysqli_connect("localhost", "root", "selvigtech", "portfolio");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>