<?php
include_once 'includes/sidebar.inc.php';
?>

<section id="content">
    <?php
    include_once 'includes/navbar.inc.php';
    ?>

    <main>
        <h1 class="title">Comments</h1>
        <ul class="breadcrumbs">
            <li><a href="">Home</a></li>
            <li class="divider">/</li>
            <li><a href="" class="active">Comments</a></li>
        </ul>

        <!--        Tables -->
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Comments</h3>
                    <div class="menu">
                        <span class="icon"><i class="fa fa-ellipsis"></i></span>
                        <ul class="menu-link">
                            <li><a href="createpost.php">Create Comment</a></li>
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
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Post ID</th>
                            <th scope="col">Comment</th>
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
                        $sql = "SELECT * FROM comments";
                        $result = mysqli_query($conn, $sql);
                        if ($result){
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['comment_id'];
                                $username = $row['comment_author'];
                                $email = $row['comment_email'];
                                $post = $row['post_id'];
                                $status = $row['status'];
                                $comment = substr($row['comment_body'], 0, 50);
                                $created_at = $row['comment_date'];

                                echo '<tr>';
                                echo '<td>' . $id . '</td>';
                                echo '<td>' . $username . '</td>';
                                echo '<td>' . $email . '</td>';
                                echo '<td>' . $post . '</td>';
                                echo '<td>' . $comment . '</td>';
                                echo '<td>' . $status . '</td>';
                                echo '<td>' . date("d M Y", strtotime( $created_at)) . '</td>';
                                echo '<td><a href="updatecomment.php?updateid=' . $id . '">Edit</a> |
                                <a href="deletecomment.php?deleteid=' . $id . '">Delete</a></td>';
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

