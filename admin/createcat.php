
<?php
include_once 'includes/sidebar.inc.php';
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * Phone: +263772635973
 */
?>

<section id="content">
    <?php
    include_once 'includes/navbar.inc.php';
    ?>

    <main>
        <h1 class="title">Create Category</h1>
        <ul class="breadcrumbs">
            <li><a href="categories.php">Categories</a></li>
            <li class="divider">/</li>
            <li><a href="createpost.php" class="active">Create Category</a></li>
        </ul>

        <!--        Tables -->
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Create Post</h3>
                </div>
                <div class="table-wrapper">
                    <form action="" method="POST" id="createCategory">
                        <div class="input-flex">
                            <div class="input-flex-item">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Category Name" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="button-flex-item">
                            <button type="submit" name="submit">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</section>

<?php include 'includes/footer.inc.php'; ?>
