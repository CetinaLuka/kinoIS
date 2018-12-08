<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../WEB/index.php");
die();
?>