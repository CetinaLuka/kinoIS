<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head id="head">
        <meta charset="UTF-8">
        <?php
            include "include/import.html";
        ?>
        <title>Kino IS</title>
    </head>
    <body>
        <?php
            include "include/header.php";
        ?>
        <main>
            <div id="content">
                <?php
                if(@$_SESSION["prijavljen"]==true){
                    echo "<h4>Dobrodosli ".@$_SESSION["uporabniskoIme"]."</h4>";
                }
                include "contentFilmi.php";
                ?>
            </div>
        </main>
        <?php
        include "include/footer.php";
        ?>
        <script>
        </script>
    </body>
</html>