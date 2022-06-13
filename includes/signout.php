<?php
session_start();
session_destroy();
header('Location: ../index.php');

?>
<script>
    alert("You have been signed out");
    window.open("index.php", "_self");
</script>
