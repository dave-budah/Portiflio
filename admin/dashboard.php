
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
 * @var $conn;
 */

?>

<section id="content">
    <?php
    include_once 'includes/navbar.inc.php';
    ?>

    <main>
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="">Home</a></li>
            <li class="divider">/</li>
            <li><a href="" class="active">Dashboard</a></li>
        </ul>

        <div class="info-data">
            <div class="card">
                <div class="head">
                    <div>
                        <?php
                        $count = mysqli_query($conn, "SELECT * FROM posts");
                        $count = mysqli_num_rows($count);
                        if ($count == 0) {
                            echo '<h2>0</h2>';
                        } else {
                            echo '<h2>' . $count . '</h2>';
                        }
                        ?>
                        <p>Total Blog Posts</p>
                    </div>
                    <span><i class="fa fa-cloud-upload"></i></span>
                </div>
                <div class="card-footer">
                    <p>Last Updated on: <?php echo date( 'd M Y', ) ?></p>
                </div>
            </div>

            <div class="card">
                <div class="head">
                    <div>
                        <?php
                          $count = mysqli_query($conn, "SELECT * FROM comments");
                          $count = mysqli_num_rows($count);
                          if ($count == 0) {
                              echo '<h2>0</h2>';
                          } else {
                              echo '<h2>' . $count . '</h2>';
                          }
                        ?>
                        <p>Total Comments</p>
                    </div>
                    <span><i class="fa fa-comments"></i></span>
                </div>
                <div class="card-footer">
                    <p>Last Updated on: <?php echo date( 'd M Y', ) ?></p>
                </div>
            </div>

            <div class="card">
                <div class="head">
                    <div>
                        <?php
                        $count = mysqli_query($conn, "SELECT * FROM users WHERE role = 'superuser'");
                        $count = mysqli_num_rows($count);
                        if ($count == 0) {
                            echo '<h2>0</h2>';
                        } else {
                            echo '<h2>' . $count . '</h2>';
                        }
                        ?>
                        <p>Total Subscribers</p>
                    </div>
                    <span><i class="fa fa-pie-chart"></i></span>
                </div>
                <div class="card-footer">
                    <p>Last Updated on:<?php echo date( 'd M Y', ) ?></p>
                </div>
            </div>

            <div class="card">
                <div class="head">
                    <div>
                        <?php
                        $count = mysqli_query($conn, "SELECT * FROM users WHERE role = 'administrator'");
                        $count = mysqli_num_rows($count);
                        if ($count == 0) {
                            echo '<h2>0</h2>';
                        } else {
                            echo '<h2>' . $count . '</h2>';
                        }
                        ?>
                        <p>Total Admins</p>
                    </div>
                    <span><i class="fa fa-users"></i></span>
                </div>
                <div class="card-footer">
                    <p>Last Updated on: <?php echo date( 'd M Y', ) ?></p>
                </div>
            </div>
        </div>

<!--        Tables -->
        <div class="data">
            <div class="content-data">
                 <div class="head">
                     <h3>Users</h3>
                     <div class="menu">
                         <span class="icon"><i class="fa fa-ellipsis"></i></span>
                         <ul class="menu-link">
                             <li><a href="">Edit</a></li>
                             <li><a href="">Save</a></li>
                             <li><a href="">Delete</a></li>
                         </ul>
                     </div>
                 </div>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $created_at = $row['created_at'];


                                echo '<tr>';
                                echo '<td style="text-align:left;">' . $row['unique_id'] . '</td>';
                                echo '<td style="text-align:left;">' . $row['name'] . '</td>';
                                echo '<td style="text-align:left;">' . $row['email'] . '</td>';
                                echo '<td style="text-align:left;">' . $row['role'] . '</td>';
                                echo '<td style="text-align:left;">' . date('d M Y', strtotime($created_at)) . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr>';
                            echo '<td colspan="5">No Data</td>';
                            echo '</tr>';
                        }
                        ?>
                        <tbody>
                    </table>
                </div>
            </div>
            <div class="content-data">
                <div class="head">
                    <h3>Posts</h3>
                    <div class="menu">
                        <span class="icon"><i class="fa fa-ellipsis"></i></span>
                        <ul class="menu-link">
                            <li><a href="">Edit</a></li>
                            <li><a href="">Save</a></li>
                            <li><a href="">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>Status</th>
                            <th>Created Date</th>
                        </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM posts";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $description = substr($row['description'], 0, 20);
                                $created_at = $row['created_at'];


                                echo '<tr>';
                                echo '<td style="text-align:left;">' . $row['title'] . '</td>';
                                echo '<td style="text-align:left;">' . substr($row['description'], 0, 20) . '</td>';
                                echo '<td style="text-align:left;">' . $row['status'] . '</td>';
                                echo '<td style="text-align:left;">' . date("d M Y", strtotime( $created_at))  . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr>';
                            echo '<td colspan="5">No Data</td>';
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
