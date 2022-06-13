<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * @var $conn;
 */
include_once 'admin/includes/dbh.inc.php';
if (isset($_SESSION['unique_id'])) {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <meta name="description" content="Selvigtech is a startup company that specialises in web, web app and mobile app development.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="Selvigtech home page">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.selvigtech.com">
    <meta property="og:description" content="We specialize in Web, Web Applications, and Mobile Applications development.">
    <meta property="og:image" content="image.png">
    <link rel="canonical" href="https://www.selvigtech.com/login.php" />

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


<section class="section">
    <div class="container">
        <div class="login-form">
            <form action="" class="form">
                <h1 class="form_title">Sign In</h1>
                <div class="error-message"></div>

               <div class="field">
                   <label for="email" class="form_label">Email</label>
                   <input type="text" class="form_input" name="email" id="email" placeholder="" autocomplete="off">
               </div>

                <div class="field">
                    <label for="password" class="form_label">Password</label>
                    <input type="password" class="form_input" name="password" id="password" placeholder="" autocomplete="off">
                    <span><i class="fa fa-eye"></i></span>
                </div>
                <div class="button_div">
                    <button class="form_button">Login</button>
                </div>
                <p class="link">Dont have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </div>
</section>

<?php include "partials/footer.php"; ?>

<script src="js/jquery.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/login.js"></script>
<script src="js/password-toggle.js"></script>
<script src="js/fontawesome.all.min.js"></script>
</body>
</html>


