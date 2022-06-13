
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
            <h1 class="title">Create Project</h1>
            <ul class="breadcrumbs">
                <li><a href="projects.php">Projects</a></li>
                <li class="divider">/</li>
                <li><a href="createproject.php" class="active">Create Project</a></li>
            </ul>

            <!--        Tables -->
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Create Project</h3>
                    </div>
                    <div class="table-wrapper create-project">
                      <form action="#" id="createpost" enctype="multipart/form-data">
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" placeholder="Title" autocomplete="off">
                                </div>
                                <div class="input-flex-item">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" autocomplete="off">
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="link_two">Github</label>
                                    <input type="text" name="link_one" id="link_two" autocomplete="off" placeholder="Github">
                                </div>
                                <div class="input-flex-item">
                                    <label for="link_two">Hosting URL</label>
                                    <input type="text" name="link_two" id="link_two" autocomplete="off" placeholder="Hosting Link">
                                </div>
                            </div>
                            <div class="input-flex">
                                <div class="input-flex-item">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                          <div class="button-flex-item projectBtn">
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
        selector: '#description',
        plugins: 'a11ychecker advcode emoticons casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker code advlist',
        tinycomments_mode: 'embedded',
        toolbar_mode: 'floating',
        height : 300,
    });
</script>
<script src="js/createproject.js"></script>
<?php include 'includes/footer.inc.php'; ?>
