
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
        <h1 class="title">projects</h1>
        <ul class="breadcrumbs">
            <li><a href="">Home</a></li>
            <li class="divider">/</li>
            <li><a href="" class="active">projects</a></li>
        </ul>

        <!--        Tables -->
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Projects</h3>
                    <div class="menu">
                        <span class="icon"><i class="fa fa-ellipsis"></i></span>
                        <ul class="menu-link">
                            <li><a href="createproject.php">Create project</a></li>
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
                            <th scope="col">Description</th>
                            <th scope="col">Github Link</th>
                            <th scope="col">Hosting URL</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * @var $conn;
                         */
                        $sql = "SELECT * FROM projects";
                        $result = mysqli_query($conn, $sql);
                        if ($result){
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['project_id'];
                                $title = $row['title'];
                                $description = substr($row['description'], 0, 50);
                                $link_one = $row['link_one'];
                                $link_two = $row['link_two'];




                                echo '<tr>';
                                echo '<td style="text-align:left;">' . $id . '</td>';
                                echo '<td style="text-align:left;">' . $title . '</td>';
                                echo '<td style="text-align:left;">' . $description . '</td>';
                                echo '<td style="text-align:left;">' . $link_one . '</td>';
                                echo '<td style="text-align:left;">' . $link_two . '</td>';
                                echo '<td style="text-align:left;"><a href="updateproject.php?updateid=' . $id . '">Edit</a> |
                                <a href="deleteproject.php?deleteid=' . $id . '">Delete</a></td>';
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


