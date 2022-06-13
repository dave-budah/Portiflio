<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * @var $conn;
 */
session_start();
include_once 'admin/includes/dbh.inc.php';
if (isset($_GET['postid'])) {
    $id = $_GET['postid'];
    $sql = "SELECT * FROM posts WHERE post_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $content = $row['body'];
    $tags = $row['tags'];
    $date = $row['created_at'];
    $image = $row['image'];
}

global $image;
global $title;
global $content;
global $tags;
global $postid;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $id = $_GET['postid'];
    $url = basename($_SERVER['REQUEST_URI']);
    $metaquery = "SELECT * FROM posts WHERE post_id = '$id'";
    $meta = mysqli_query($conn, $metaquery);
    $metarow = mysqli_fetch_assoc($meta);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $metarow['title']; ?></title>
    <meta name="description" content="<?php echo substr($metarow['body'], 0, 150); ?>" />
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="<?php echo $metarow['title']; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>">
    <meta property="og:description" content="<?php echo substr($metarow['body'], 0, 100); ?>">
    <meta property="og:image" content="<?php echo $metarow['image']; ?>">
    <meta name="keywords" content="<?php echo $metarow['title']; ?>"
    <link rel="canonical" href="https://www.selvigtech.com/login.php?postid=<?php echo $metarow['post_id']; ?>"/>



    <link rel="icon" href="/favicon.png">
    <link rel="icon" href="/favicon.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.all.min.css">
    <script src="js/scroll-reveal.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="/loadmore.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include 'partials/navbar.php';
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


<section class="article_hero flex-center" id="article">
<div class="article_hero_img">
    <img src="uploads/<?php echo $image; ?>" alt="">
</div>
<div class="article_hero_content">
    <h1><?php echo $title; ?></h1>
    <p><?php echo date("d M Y", strtotime($date)) ?></p>
</div>
</section>
<section class="article_content section" id="article">
    <div class="article_content_container">
        <div class="article_content_text">
            <?php echo strip_tags($row['body']); ?>
        </div>

        <div class="tags">
    <!--            https://www.selvigtech.com/article.php?postid=--><?php //echo $row['post_id']; ?>
            <h4>Tags</h4>
            <?php
            $tags = explode(",", $row['tags']);
            foreach ($tags as $tag) {
                echo '<a href="tag.php?tag=' . $tag . '" class="tag_class">' . $tag . '</a>';
            }
            ?>
        </div>

        <hr style="margin-top: 20px;">
        <div class="share_links">
            <h4 class="share_links_title">Share this article</h4>
            <div class="share_links_icons">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/intent/tweet?url=https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>&text=<?php echo $metarow['title']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>&title=<?php echo $metarow['title']; ?>&summary=<?php echo substr($metarow['body'], 0, 100); ?>&source=https://www.selvigtech.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/?text=https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://t.me/share/url?url=https://www.selvigtech.com/article.php?postid=<?php echo $metarow['post_id']; ?>&text=<?php echo $metarow['title']; ?>" target="_blank"><i class="fab fa-telegram-plane"></i></a>
            </div>

        </div>

    </div>

    <div class="comments">
        <h4 class="comments_title">Comments  <?php
            $count = mysqli_query($conn, "SELECT * FROM comments WHERE post_id = '$id' AND status = 'approved'");
            $count = mysqli_num_rows($count);
            if ($count == 0) {
                echo '(0)';
            } else {
                echo '(' . $count . ')';
            }
            ?></h4>
        <div class="comments_container">
            <?php
            /**
             * @var $allcount;
             */
             $postid = $row['post_id'];
             $rowsperpage = 3;

             $allcount_query = "SELECT count(*) as allcount FROM comments WHERE post_id = '$postid' AND status = 'approved'";
             $allcount_result = mysqli_query($conn, $allcount_query);
             $allcount_fetch = mysqli_fetch_array($allcount_result);
             $allcount = $allcount_fetch['allcount'];

             $query = "SELECT * FROM comments WHERE post_id = '$postid' AND status = 'approved' ORDER BY comment_id DESC LIMIT 0, $rowsperpage";
             $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    $comment_id = $row['comment_id'];
                    $comment_body = $row['comment_body'];
                    $comment_author = $row['comment_author'];
                    $comment_date = $row['comment_date'];
                    $comment_date = date("d M Y - H:ia", strtotime($comment_date));
                    echo '
                <div class="comment">
                    <div class="comment_author">
                       <div class="profile">
                            <img src="images/placeholder.png" alt="">
                        </div>
                       <div class="author_info">
                        <h5>'.$comment_author.'</h5>
                        <p>'.$comment_date.'</p>
                    </div>
                    </div>
                    <div class="comment_body">
                        <p>'.$comment_body.'</p>
                    </div>
                </div>
                ';
                }
            } else {
                echo '<p>No comments yet</p>';
            }

            ?>

            <button class="load-more">Load More</button>
            <input type="hidden" id="row" value="0">
            <input type="hidden" id="postid" name="postid" value="<?php echo $postid; ?>">
            <input type="hidden" id="all" value="<?php echo $allcount; ?>">
        </div>


        <div class="comment_form">
            <h4 class="comment_form_title">Leave a comment</h4>
            <form action="" id="comment_form">
                <input type="hidden" name="postid" value="<?php echo $postid; ?>">
               <input type="text" name="comment_author" placeholder="Your name">
               <input type="text" name="comment_email" placeholder="Your email">
                <span>NB* Your email will never be published.</span>
               <textarea name="comment_body" placeholder="Your comment"></textarea>
                <div class="submitBtn">
                    <button name="comment_submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</section>
<section class="related_articles section">
    <div class="container">
        <h4 class="related_articles_title">Related Articles</h4>
        <div class="related_articles_container">
            <?php
            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 0, 3";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    $post_id = $row['post_id'];
                    $post_title = $row['title'];
                    $post_date = $row['created_at'];
                    $post_date = date("d M Y", strtotime($post_date));
                    $post_image = $row['image'];
                    $post_content = $row['body'];
                    $post_content = substr($post_content, 0, 100);
                    echo '
                    <a href="article.php?postid='. $post_id .'" class="related_article">
                        <div class="related_article_image">
                            <img src="uploads/'.$post_image.'" alt="">
                        </div>
                        <div class="related_article_info">
                            <h4>'.$post_title.'</h4>
                            <p>'.$post_content.'</p>
                            <small>'.$post_date.'</small>
                        </div>
                    </a>
                    ';
                }
            }
            ?>
        </div>
</section>




<?php include "partials/footer.php"; ?>


<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/comment.js"></script>
<script src="js/fontawesome.all.min.js"></script>
</body>
</html>
