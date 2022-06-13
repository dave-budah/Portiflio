<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * @var $conn ;
 */
session_start();
include_once 'admin/includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tags</title>
    <meta name="description"
          content="Selvigtech is a startup company that specialises in web, web app and mobile app development.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="Selvigtech home page">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.selvigtech.com/tag.php">
    <meta property="og:description"
          content="We specialize in Web, Web Applications, and Mobile Applications development.">
    <meta property="og:image" content="image.png">
    <link rel="canonical" href="https://www.selvigtech.com/index.php"/>

    <link rel="icon" href="/favicon.png">
    <link rel="icon" href="/favicon.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.all.min.css">
    <script src="js/scroll-reveal.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include 'partials/navbar.php';
include 'partials/spinner.php';
?>

<!-- Scroll to top -->
<div class="scrollToTop-btn flex-center">
    <span class="scrollToTop-btn-link">
        <i class="fas fa-arrow-up"></i>
    </span>
</div>

<!-- Theme Button -->
<div class="theme-btn flex-center">
    <span class="theme-switcher">
        <i class="fas fa-sun"></i>
        <i class="fas fa-moon"></i>
    </span>
</div>
<div class="whatsapp-btn flex-center">
    <span class="whatsapp-link">
        <a href="https://wa.link/m7j46r" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </span>
</div>

<section class="related_articles section" style="min-height: 60vh;">
    <div class="container">
        <h4 class="related_articles_title">Related Articles</h4>
        <?php
        global $conn;
        if (isset($_POST['tag'])) {
            $tag = $_POST['tag'];
            $tag = preg_replace('/[^a-zA-Z0-9\-_]/', '', $tag);
            $tag = strtolower($tag);
            $tag = preg_replace('/\-{2,}/', '-', $tag);
            $tag = trim($tag, '-');
            $tag = preg_replace('/[\-]{2,}/', '-', $tag);
            $tag = preg_replace('/[^a-zA-Z0-9\-_]/', '', $tag);

            $query = mysqli_query($conn, "SELECT * FROM posts WHERE tags = '$tag' status = 'published' ORDER BY post_id DESC LIMIT 3");
            $count = mysqli_num_rows($query);
            if ($count == 0) {
                echo '<h1 class="related_articles_title">No posts found</h1>';
            } else {
                while ($row = mysqli_fetch_array($query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['title'];
                    $post_date = $row['created_at'];
                    $post_date = date("d M Y", strtotime($post_date));
                    $post_image = $row['image'];
                    $post_content = $row['body'];
                    $post_content = substr($post_content, 0, 100);
                    $post_tag = $row['tags'];

                    echo '<a href="article.php?postid=' . $post_id . '" class="related_article">
                        <div class="related_article_image">
                            <img src="uploads/' . $post_image . '" alt="">
                        </div>
                        <div class="related_article_info">
                            <h4>' . $post_title . '</h4>
                            <p>' . $post_content . '</p>
                            <small>' . $post_date . '</small>
                        </div>
                    </a>
                    ';
                }
            }
        }
        ?>
    </div>
</section>

<?php include "partials/footer.php"; ?>

<script src="js/jquery.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/contact.js"></script>
<script src="js/fontawesome.all.min.js"></script>
</body>
</html>