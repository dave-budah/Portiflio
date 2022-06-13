
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
        <h1 class="title">Edit Comment</h1>
        <ul class="breadcrumbs">
            <li><a href="comments.php">Comments</a></li>
            <li class="divider">/</li>
            <li><a href="updatecomment.php" class="active">Edit Comment</a></li>
        </ul>

        <!--        Tables -->
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Edit Comment</h3>
                </div>
                <div class="table-wrapper updatecomment">
                    <?php
                    if (isset($_GET['updateid'])) {
                        $id = $_GET['updateid'];
                        $res = mysqli_query($conn, "SELECT * FROM comments WHERE comment_id = '$id'");
                        $result = mysqli_fetch_assoc($res);
                         if ($result) {
                                $comment_id = $result['comment_id'];
                                $comment_post_id = $result['post_id'];
                                $comment_author = $result['comment_author'];
                                $comment_email = $result['comment_email'];
                                $comment_content = $result['comment_body'];
                                $comment_status = $result['status'];

                                echo  '
                                <form action="" method="POST">
                                    <div class="input-flex">
                                        <div class="input-flex-item">
                                            <label for="comment_id">Comment ID</label>
                                            <input type="text" name="comment_id" value="'.$comment_id.'" readonly>
                                        </div>
                                        <div class="input-flex-item">
                                            <label for="comment_post_id">Post ID</label>
                                            <input type="text" name="post_id" value="'.$comment_post_id.'" readonly>
                                        </div>
                                    </div>
                                   <div class="input-flex">
                                        <div class="input-flex-item">
                                            <label for="comment_author">Author</label>
                                            <input type="text" name="comment_author" value="'.$comment_author.'" readonly>
                                        </div>
                                        <div class="input-flex-item">
                                            <label for="comment_email">Email</label>
                                            <input type="text" name="comment_email" value="'.$comment_email.'" readonly>
                                        </div>
                                    </div>
                                    <div class="input-flex">
                                     <div class="input-flex-item">
                                        <label for="comment_status">Status</label>
                                        <select name="status" id="comment_status">
                                            <option value="'.$comment_status.'">'.$comment_status.'</option>
                                            <option value="approved">Approved</option>
                                            <option value="unapproved">Unapproved</option>
                                            <option value="banned">Banned</option>
                                        </select>
                                    </div>
                                    </div>
                                   <div class="input-flex">
                                    <div class="input-flex-item">
                                        <label for="comment_content">Content</label>
                                        <textarea name="comment_body" id="comment_content">'.$comment_content.'</textarea>
                                    </div>
                                    </div>
                                   
                                    <div class="button-flex-item updatecommentBtn">
                                      <button type="submit">Update</button>
                                    </div>
                                </form>';
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</section>




<script src="js/updatecomment.js"></script>
<?php include 'includes/footer.inc.php'; ?>
