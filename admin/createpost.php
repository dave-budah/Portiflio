
<?php
include_once 'includes/sidebar.inc.php';
/**
 * @var $conn;
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
            <h1 class="title">Create Post</h1>
            <ul class="breadcrumbs">
                <li><a href="posts.php">Posts</a></li>
                <li class="divider">/</li>
                <li><a href="createpost.php" class="active">Create Post</a></li>
            </ul>

            <!--        Tables -->
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Create Post</h3>
                    </div>
                    <div class="table-wrapper create-post">
                      <form action="#" id="createpost" enctype="multipart/form-data">
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" placeholder="Title" autocomplete="off">
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
                                    <input type="text" name="tags" id="tags" autocomplete="off" placeholder="Tags">
                                </div>
                                <div class="input-flex-item">
                                    <label for="status">Status</label>
                                    <select name="status" id="status">
                                        <option value="">Select Status</option>
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" autocomplete="off">
                                </div>
                                <div class="input-flex-item">
                                    <label for="credit">Credit</label>
                                    <input type="text" name="credit" id="credit" autocomplete="off">
                                </div>
                            </div>
                          <div class="input-flex">
                              <div class="input-flex-item">
                                  <label for="credit-link">Credit Link</label>
                                  <input type="text" name="credit_link" id="credit-link" autocomplete="off">
                              </div>
                              <div class="input-flex-item">
                                  <label for="description">Description</label>
                                  <input type="text" name="description" id="description" autocomplete="off">
                              </div>
                          </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="body">Content</label>
                                    <textarea name="body" id="body"></textarea>
                                </div>
                            </div>
                          <div class="button-flex-item submitBtn">
                              <button>Create</button>
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
