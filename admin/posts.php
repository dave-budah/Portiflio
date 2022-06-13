
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
        <h1 class="title">Posts</h1>
        <ul class="breadcrumbs">
            <li><a href="">Home</a></li>
            <li class="divider">/</li>
            <li><a href="" class="active">Posts</a></li>
        </ul>

        <!--        Tables -->
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Posts</h3>
                    <div class="menu">
                        <span class="icon"><i class="fa fa-ellipsis"></i></span>
                        <ul class="menu-link">
                            <li><a href="createpost.php">Create Post</a></li>
                            <li><a href="">Save</a></li>
                            <li><a href="">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * @var $conn;
                         */
                        $sql = "SELECT * FROM posts";
                        $result = mysqli_query($conn, $sql);
                        if ($result){
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['post_id'];
                                $title = $row['title'];
                                $category = $row['category'];
                                $status = $row['status'];
                                $tags = $row['tags'];
                                $description = substr($row['description'], 0, 50);
                                $created_at = $row['created_at'];

                                echo '<tr>';
                                echo '<td>' . $id . '</td>';
                                echo '<td>' . $title . '</td>';
                                echo '<td>' . $category . '</td>';
                                echo '<td>' . $tags . '</td>';
                                echo '<td>' . $description . '</td>';
                                echo '<td>' . $status . '</td>';
                                echo '<td>' . date("d M Y", strtotime( $created_at)) . '</td>';
                                echo '<td><a href="updatepost.php?updateid=' . $id . '">Edit</a> |
                                <a href="deletepost.php?deleteid=' . $id . '">Delete</a></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '<td>' . 'No Data' . '</td>';
                            echo '</tr>';
                        }
                        ?>


                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</section>

<?php include 'includes/footer.inc.php'; ?>

