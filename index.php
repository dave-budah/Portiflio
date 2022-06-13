<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * @var $conn;
 */
session_start();
include_once 'admin/includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <meta name="description" content="Selvigtech is a startup company that specialises in web, web app and mobile app development.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="Selvigtech home page">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.selvigtech.com">
    <meta property="og:description" content="We specialize in Web, Web Applications, and Mobile Applications development.">
    <meta property="og:image" content="image.png">
    <link rel="canonical" href="https://www.selvigtech.com/index.php" />

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


<section class="home flex-center" id="home">
    <div class="home-container">
        <div class="media-icons">
            <a href="https://www.facebook.com/selvigtech" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/in/selvigtech" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.twitter.com/selvigtech" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="info">
            <h2>Hi, I'm <span>Dave Budah</span></h2>
            <h3>I'm a <span>Full Stack Developer</span></h3>
            <p>I create stunning websites for all kinds of business. Making use of modern
                technology to meet the client's needs.</p>
            <a href="#about" class="btn">Contact Me <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <div class="home-img">
            <img src="images/hero.png" alt="">
        </div>
    </div>
    <a href="#about" class="scroll-down"><span><i class="fa fa-arrow-down"></i></span></a>
</section>

<section id="about" class="about section">
    <div class="container flex-center">
        <h1 class="section-title-01">About Me</h1>
        <h2 class="section-title-02">About Me</h2>
        <div class="content flex-center">
            <div class="about-img">
                <img src="images/dave.png" alt="">
            </div>
            <div class="about-info">
                <div class="description">
                    <h3>About Me</h3>
                    <h4>A <span>Full Stack Developer</span> based in <span>Harare, Zimbabwe</span></h4>
                    <p>I am a full stack developer with a passion for creating beautiful and
                        intuitive websites. I have a strong background in web development and
                        have worked with a variety of technologies. I am currently working on
                        improving my skills and expanding my knowledge in the field of cloud computing.</p>
                </div>
                <a href="cv/davebudah.pdf" download class="btn">Download CV <i class="fa fa-cloud-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="skills section" id="skills">
    <div class="container flex-center">
        <h1 class="section-title-01">Skills</h1>
        <h2 class="section-title-02">Skills</h2>
        <div class="content">
            <div class="skills-description">
                <h3>Education & Skills</h3>
                <p>I been in the programming business for more than 5 years, and with each of those years I have
                    been learning new technologies and skills that have helped me produce satisfactory results to my
                    clients and employers.</p>
            </div>
            <div class="skills-info education-all">
                <div class="education">
                    <h4><label>Education</label></h4>
                    <ul class="edu-list">
                        <li class="item">
                            <span class="year">2015</span>
                            <p><span>Android Development</span> - Team Treehouse America</p>
                        </li>
                        <li class="item">
                            <span class="year">2020 -2021</span>
                            <p><span>Associate Android Developer</span> - Andela Learning Community & Google</p>
                        </li>
                        <li class="item">
                            <span class="year">2022</span>
                            <p><span>Cloud Computing</span> - Andela Learning Community & Google</p>
                        </li>
                    </ul>
                </div>
                <div class="education">
                    <h4><label>Skills</label></h4>
                    <ul class="bars">
                        <li class="bar">
                            <div class="info">
                                <span>HTML & CSS</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                        </li>
                        <li class="bar">
                            <div class="info">
                                <span>Angular, React</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                        </li>
                        <li class="bar">
                            <div class="info">
                                <span>NodeJS, Spring Boot, Laravel</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                            <div class="line css"></div>
                        </li>
                        <li class="bar">
                            <div class="info">
                                <span>Javascript</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                        </li>
                        <li class="bar">
                            <div class="info">
                                <span>Kotlin, Flutter, Java,</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                        </li>
                        <li class="bar">
                            <div class="info">
                                <span>PHP</span>
                                <span><i class="fa fa-check-circle"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="education">
                    <h4><label>Awards</label></h4>
                    <ul class="edu-list">
                        <li class="item">
                            <span class="year">No information available yet</span>
                            <p>No information available yet</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="skills-description">
                <h3>Work & Experience</h3>
            </div>
            <div class="skills-info">
                <div class="experience-card">
                    <div class="upper">
                        <h3>Full Stack Developer</h3>
                        <h5>Full Time | Remote</h5>
                        <span>2020 - Present</span>
                    </div>
                    <div class="hr"></div>
                    <h4><label><a href="https://absp.online" target="_blank">ABSP</a></label></h4>
                    <p>I design and develop websites, CMSs, and web applications.</p>
                </div>
                <div class="experience-card">
                    <div class="upper">
                        <h3>Frontend Developer</h3>
                        <h5>Part Time | Remote</h5>
                        <span>2017 - Present</span>
                    </div>
                    <div class="hr"></div>
                    <h4><label><a href="https://primefocus.co.zw" target="_blank">Prime Focus</a></label></h4>
                    <p>I design and develop web applications and mobile applications, and integrate them
                        with APIs.</p>
                </div>
                <div class="experience-card">
                    <div class="upper">
                        <h3>Full Stack Developer</h3>
                        <h5>Full Time</h5>
                        <span>2016 - Present</span>
                    </div>
                    <div class="hr"></div>
                    <h4><label><a href="https://selvigtech.com/" target="_blank">Selvigtech</a></label></h4>
                    <p>I design and develop websites, web applications and mobile applications for my own clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services section" id="services">
    <div class="container flex-center">
        <h1 class="section-title-01">Services</h1>
        <h2 class="section-title-02">Services</h2>
        <div class="content">
            <div class="services-description">
                <h3>Services that I provide</h3>
            </div>
            <ul class="service-list">
                <li class="service-container">
                    <div class="service-card">
                        <span><i class="fa fa-pencil-ruler"></i></span>
                        <h3>UI/UX Consultancy</h3>
                        <div class="learn-more-btn">Learn More <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                    <div class="service-modal flex-center">
                        <div class="service-modal-body">
                            <span class="modal-close-btn"><i class="fas fa-times"></i></span>
                            <h3>UI/UX Consultancy</h3>
                            <h4>What is UX Consultancy?</h4>
                            <p>UX consultancy helps companies/individual improve their product's overall
                                usability and optimize experience by implementing the right UX processes, methods and
                                tools</p>
                            <h4></h4>
                            <ul>
                                <li><span><i class="fa fa-check-circle"></i></span> Establish the right UX processes.
                                </li>
                                <li><span><i class="fa fa-check-circle"></i></span> Create exceptional user experience
                                </li>
                                <li><span><i class="fa fa-check-circle"></i></span> Assist with Business branding.</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="service-container">
                    <div class="service-card">
                        <span><i class="fa fa-code"></i></span>
                        <h3>Web Development</h3>
                        <div class="learn-more-btn">Learn More <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                    <div class="service-modal flex-center">
                        <div class="service-modal-body">
                            <span class="modal-close-btn"><i class="fas fa-times"></i></span>
                            <h3>Web Development</h3>
                            <h4>What is Web Development?</h4>
                            <p>Web development refers in general to the tasks associated with developing websites for
                                hosting via intranet or internet. The web development process includes web design, web
                                content development, client-side/server-side scripting and network security
                                configuration, among other tasks.</p>
                            <ul>
                                <li><span><i class="fa fa-check-circle"></i></span> Create and test websites</li>
                                <li><span><i class="fa fa-check-circle"></i></span> Maintain and update websites</li>
                                <li><span><i class="fa fa-check-circle"></i></span> Monitor website traffic</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="service-container">
                    <div class="service-card">
                        <span><i class="fa fa-mobile-android"></i></span>
                        <h3>Mobile App Dev</h3>
                        <div class="learn-more-btn">Learn More <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                    <div class="service-modal flex-center">
                        <div class="service-modal-body">
                            <span class="modal-close-btn"><i class="fas fa-times"></i></span>
                            <h3>Mobile App Dev</h3>
                            <h4>What is Mobile App Dev?</h4>
                            <p>Mobile app development is the creation of software intended to run on mobile devices and
                                optimized to take advantage of those products’ unique features and hardware.</p>
                            <ul>
                                <li><span><i class="fa fa-check-circle"></i></span> Solving the issue of performance on
                                    any given device.
                                </li>
                                <li><span><i class="fa fa-check-circle"></i></span> Project budget quotation.</li>
                                <li><span><i class="fa fa-check-circle"></i></span> Market analysis of the application
                                    proposed.
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="service-container">
                    <div class="service-card">
                        <span><i class="fa fa-search-plus"></i></span>
                        <h3 style="margin-bottom: 3rem;">SEO</h3>
                        <div class="learn-more-btn">Learn More <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                    <div class="service-modal flex-center">
                        <div class="service-modal-body">
                            <span class="modal-close-btn"><i class="fas fa-times"></i></span>
                            <h3>Search Engine Optimization</h3>
                            <h4>What is Search Engine Optimization?</h4>
                            <p>Search engine optimization, is the process of optimizing websites so that they rank well
                                on search engines through organic (non paid) searches. This is one of the most crucial
                                marketing strategies for any business.</p>
                            <ul>
                                <li><span><i class="fa fa-check-circle"></i></span> Updating website meta tags.</li>
                                <li><span><i class="fa fa-check-circle"></i></span> URL optimization</li>
                                <li><span><i class="fa fa-check-circle"></i></span> Strategic content writing to improve
                                    website online visibility by search engines.
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="portfolio section" id="portfolio">
    <div class="container flex-center">
        <h1 class="section-title-01">Portfolio</h1>
        <h2 class="section-title-02">Portfolio</h2>
        <div class="content">
            <div class="portfolio-list">
                <?php
                  $sq = "SELECT * FROM projects ORDER BY project_id DESC LIMIT 6";
                  $result = mysqli_query($conn, $sq);
                  while($row = mysqli_fetch_assoc($result)){
                    $project_id = $row['project_id'];
                    $project_title = $row['title'];
                    $project_image = $row['image'];
                    $github_link = $row['link_one'];
                    $website_link = $row['link_two'];
                    $project_description =  substr($row['description'], 0, 50);

                    echo '<div class="img-card-container">
                    <div class="img-card">
                        <div class="overlay"></div>
                        <div class="info">
                            <h3>'.$row['title'].'</h3>
                            <a href="'.$row['link_one'].'" target="_blank">Github</a>
                            <a href="'.$row['link_two'].'" target="_blank">Visit Site</a>
                        </div>
                        <img src="uploads/'.$row['image'].'" alt="'.$row['title'].'">
                    </div>
                    <div class="portfolio-modal flex-center">
                        <div class="portfolio-modal-body">
                            <span class="portfolio-close-btn"><i class="fa fa-times"></i></span>
                            <h3>'.$row['title'].'</h3>
                            <img src="uploads/'.$row['image'].'" alt="">
                            <p>'.$row['description'].'</p>
                        </div>
                    </div>
                </div>';
                  }
                ?>

            </div>
        </div>
    </div>
</section>

<div class="get-in-touch sub-section">
    <div class="container">
        <div class="content flex-center">
            <div class="contact-card flex-center">
                <div class="title">
                    <h4>Do You</h4>
                    <h3>Have A</h3>
                    <h2>Project For Me</h2>
                </div>
                <div class="contact-btn">
                    <a href="#contact" class="btn">Get In Touch <i class="fa fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section blog" id="blog">
    <div class="our-articles sub-section">
        <div class="container flex-center">
            <h1 class="section-title-01">Articles</h1>
            <h2 class="section-title-02">Articles</h2>
            <div class="content">
                <div class="swiper blog-swiper">
                    <div class="swiper-wrapper">
                        <?php


                        $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";
                        $select_all_posts_query = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                            $post_id = $row['post_id'];
                            $post_title = $row['title'];
//                            $post_author = $row['author'];
                            $post_date = $row['created_at'];
                            $post_image = $row['image'];
                            $post_content = substr($row['body'], 0, 150);
                            ?>
                            <a href="article.php?postid=<?php echo $post_id; ?>" class="swiper-slide flex-center">
                                <div class="blog-img">
                                    <img src="uploads/<?php echo $post_image; ?>" alt="<?php echo $post_title; ?>">
                                </div>
                                <div class="blog-details">
                                    <p><?php echo strip_tags($post_content); ?></p>
                                    <h3><?php echo $post_title; ?></h3>
                                    <span>Schmidt <span class="spacer"></span> <?php echo date("d M Y", strtotime($post_date)) ?></span>
                                </div>
                            </a>
                        <?php } ?>


                    </div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact section" id="contact">
        <div class="container flex-center">
            <h1 class="section-title-01">Contact Me</h1>
            <h2 class="section-title-02">Contact Me</h2>
            <div class="content">
                <div class="content-left">
                    <h2>Get in touch</h2>
                    <ul class="contact-list">
                        <li>
                            <h3 class="item-title"><span><i class="fas fa-phone"></i></span> Phone</h3>
                            <span><a href="tel:263772635973">+263 772 635 973</a></span>
                        </li>
                        <li>
                            <h3 class="item-title"><span><i class="fas fa-envelope"></i></span> Email Address</h3>
                            <span><a href="mailto:selvigtech@gmail.com">selvigtech@gmail.com</a></span>
                        </li>
                        <li>
                            <h3 class="item-title"><span><i class="fas fa-map-marker-alt"></i></span> Office Address</h3>
                            <span>No information available yet</span>
                        </li>
                    </ul>
                </div>
                <div class="contact-right">
                    <p>Your message will be replied in the shortest possible time.</p>
                    <form action="" class="contact-form">
                        <div class="first-row">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="first-row">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="first-row">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="third-row">
                            <textarea name="message" id="" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group button-area">
                            <button class="btn" type="submit" name="submit">Send Message <i class="fa fa-paper-plane"></i></button>
                            <p>The message is being sent...</p>
                        </div>
                    </form>
                </div>
            </div>
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
