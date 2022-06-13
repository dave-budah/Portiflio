<?php
/**
 * Created by Dave Budah.
 * User: Dave Budah
 * Date: 01/06/2022
 * Time: 08:03
 * Blog: https://selviltech.com
 * Email: selvigtech@gmail.com
 * @var $conn;
 */

global $postid;
// configuration
include './admin/includes/dbh.inc.php';


$row = $_POST['row'];
$postid = $_POST['postid'];
$rowsperpage = 3;


// selecting posts
$query = "SELECT * FROM comments WHERE post_id = '$postid' AND status = 'approved' ORDER BY post_id DESC LIMIT " . $row . ", " . $rowsperpage;
$result = mysqli_query($conn, $query);

$html = '';

while ($row = mysqli_fetch_array($result)) {
    $comment_id = $row['comment_id'];
    $comment_body = $row['comment_body'];
    $comment_author = $row['comment_author'];
    $comment_date = $row['comment_date'];
    $comment_date = date("d M Y - H:ia", strtotime($comment_date));
    $html .= ' <div class="comment">
                    <div class="comment_author">
                       <div class="profile">
                            <img src="images/placeholder.png" alt="">
                        </div>
                       <div class="author_info">
                        <h5>' . $comment_author . '</h5>
                        <p>' . $comment_date . '</p>
                    </div>
                    </div>
                    <div class="comment_body">
                        <p>' . $comment_body . '</p>
                    </div>
                </div>
                ';
}

echo $html;
