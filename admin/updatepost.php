<?php
include_once 'includes/sidebar.inc.php';
/**
 * @var $conn;
 * @var $row;
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * Phone: +263772635973
 */
include_once 'includes/dbh.inc.php';
global $title;
global $content;
global $category;
global $status;
global $image;
global $tags;
global $credit;
global $link;
global $description;
?>

    <section id="content">
        <?php
        include_once 'includes/navbar.inc.php';
        ?>

        <main>
            <h1 class="title">Update Post</h1>
            <ul class="breadcrumbs">
                <li><a href="posts.php">Posts</a></li>
                <li class="divider">/</li>
                <li><a href="updatepost.php" class="active">Update Post</a></li>
            </ul>

            <!--        Tables -->
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Update Post</h3>
                    </div>
                    <div class="table-wrapper update-post">
                        <?php
                       if (isset($_GET['updateid'])) {
                           $id = $_GET['updateid'];
                           $res = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = '$id'");
                           $row = mysqli_fetch_assoc($res);
                            if ($row) {
                                $title = $row['title'];
                                $content = $row['body'];
                                $category_id = $row['category'];
                                $status = $row['status'];
                                $image = $row['image'];
                                $tags = $row['tags'];
                                $credit = $row['credit'];
                                $link = $row['credit_link'];
                                $description = $row['description'];
                            }

                       }?>
                        <form action="#" id="updatepost" enctype="multipart/form-data">
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" autocomplete="off" value="<?php echo $title; ?>">
                                </div>
                                <div class="input-flex-item">
                                    <label for="category">Category</label>
                                    <select name="category" id="category">
                                        <option value="">Select Category</option>
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="tags">Tags</label>
                                    <input type="text" name="tags" id="tags" autocomplete="off" value="<?php echo $tags; ?>">
                                </div>
                                <div class="input-flex-item">
                                    <label for="status">Status</label>
                                    <select name="status" id="status">
                                        <option value="">Select Status</option>
                                        <option value="published" <?php if ($status == 'published') {
                                            echo "selected";
                                        } ?>>Published
                                        </option>
                                        <option value="draft" <?php if ($status == 'draft') {
                                            echo "selected";
                                        } ?>>Draft
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <?php if ($image) { ?>
                                        <img src="../uploads/<?php echo $image; ?>" alt="<?php echo $image; ?>" width="100">
                                    <?php } ?>
                                    <input type="file" name="image" id="image" autocomplete="off">
                                </div>
                                <div class="input-flex-item">
                                    <label for="credit">Credit</label>
                                    <input type="text" name="credit" id="credit" autocomplete="off" value="<?php echo $credit; ?>">
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="credit-link">Credit Link</label>
                                    <input type="text" name="credit_link" id="credit-link" autocomplete="off" value="<?php echo $link; ?>">
                                </div>
                                <div class="input-flex-item">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" autocomplete="off" value="<?php echo $description; ?>">
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="body">Content</label>
                                    <textarea name="body" id="body"><?php echo strip_tags($content); ?></textarea>
                                </div>
                            </div>
                            <div class="button-flex-item updateBtn">
                                <button>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </section>


<!--<script src="https://cdn.tiny.cloud/1/2w56m1to00ruusce6d6kn0wmzeb3yd365nows00sivpsvdc2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<script src="js/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#body',
        plugins: 'a11ychecker advcode emoticons casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker code advlist',
        tinycomments_mode: 'embedded',
        toolbar_mode: 'floating',
        height : 300,
    });
</script>
<script src="js/createpost.js"></script>
<?php include 'includes/footer.inc.php'; ?>
