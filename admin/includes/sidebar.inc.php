<?php
  include 'dbh.inc.php';
/**
 * @var $conn;
 */
session_start();
if (!(isset($_SESSION['unique_id']) && $_SESSION['unique_id'] != '')) {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <meta name="description" content="A Selvigtech dashboard">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="A Selvigtech dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.selvigtech.com">
    <meta property="og:description" content="A Selvigtech dashboard">
    <meta property="og:image" content="image.png">

    <link rel="icon" href="/favicon.png">
    <link rel="icon" href="/favicon.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.all.min.css">

</head>
<body>
<section id="sidebar">
    <a href="../index.php" class="brand">
        <img src="logos/logo.png" alt="">
    </a>
    <ul class="side-menu">
        <li><a href="dashboard.php" class="active"><span class="icon"><i class="fa-solid fa-border-all"></i></span> Dashboard</a></li>
        <li class="divider" data-text="main">Blogs</li>

        <li><a href="posts.php"><span class="icon"><i class="fa-solid fa-cloud-arrow-up"></i></span> Posts</a></li>
        <li><a href="comments.php"><span class="icon"><i class="fa-solid fa-comments"></i></span> Comments</a></li>
        <li><a href="categories.php"><span class="icon"><i class="fa-solid fa-tags"></i></span> Categories</a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-hands-clapping"></i></span> Reactions</a></li>
        <li class="divider" data-text="other">Projects</li>
        <li><a href="projects.php"><span class="icon"><i class="fa fa-briefcase"></i></span> Projects</a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-hands-clapping"></i></span> Reactions</a></li>


        <li class="divider" data-text="other">Moderation</li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-user-check"></i></span> Approved</a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-user-large-slash"></i></span> Suspended</a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-user-clock"></i></span> Pending</a></li>
    </ul>
    <div class="ads">
        <div class="wrapper">
            <a href="" class="btn-upgrade">Upgrade</a>
            <p>Upgrade <span>Package</span> and unlock <span>All Features</span></p>
        </div>
    </div>
</section>
