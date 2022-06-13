<header>
    <div class="navbar">
        <a href="index.php" class="logo">
            <img src="../images/logos/logo.png" alt="Selvigtech">
        </a>
        <div class="navigation">
            <div class="nav-items">
                <div class="nav-close-btn"></div>
                <a class="active" href="index.php#home">Home</a>
                <a href="index.phpabout">About</a>
                <a href="index.php#skills">Skills</a>
                <a href="index.php#services">Services</a>
                <a href="index.php#portfolio">Portfolio</a>
                <a href="index.php#blog">Blog</a>
                <a href="index.php#contact">Contact</a>
                <?php
                if (isset($_SESSION['unique_id']) && $_SESSION['role'] == 'administrator') { ?>
                    <a href="../admin/dashboard.php">Dashboard</a>
                    <a href="#" class="username">Hi: <?php echo $_SESSION['username'];?></a>
                    <a class="link" href="../includes/signout.php"><span id="logout" title="Logout"><i class="fas fa-sign-out-alt"></i></span> Logout</a>

                    <?php } else if (isset($_SESSION['unique_id']) && $_SESSION['role'] == 'subscriber') { ?>
                    <a href="profile.php"><?php echo $_SESSION['username'];?></a>
                    <a class="link" href="../includes/signout.php"><span id="logout" title="Logout"><i class="fas fa-sign-out-alt"></i></span> Logout</a>
                    <?php } else { ?>
                    <a href="login.php">Login</a>
                <?php } ?>

            </div>
        </div>
        <div class="nav-menu-btn">
        </div>
    </div>
</header>
