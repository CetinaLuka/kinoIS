<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    session_start();
    if(@isset($_POST["ime"]) && @!isset($_SESSION["uporabnik"])){
        if(($_POST["ime"]=="Luka" && $_POST["geslo"]=="123")||($_POST["ime"]=="David" && $_POST["geslo"]=="123")){
            $_SESSION["uporabnik"] = $_POST["ime"];
            $_SESSION["prijavljen"] = true;
        }
    }
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
<div id="content">
    <?php
        if(@$_SESSION["prijavljen"]==true){
            /*if(@$_SESSION["uporabnik"]=="Luka")
                echo @$_SESSION["uporabnik"]." je zelo kul oseba ";
            elseif(@$_SESSION["uporabnik"]=="David"){
                echo "O, ".@$_SESSION["uporabnik"].", a ste kej slabi?";
            }*/
        }
        elseif(@isset($_POST["ime"])){
            echo "prijava ni uspela";
        }
        include "zacetnaStran.php";
    ?>
</div>
<script>
    function naloziPrijavo(){
        $("#content").load("prijava.html");
    }

    function odjava(){
        $.ajax({url: "odjava.php", success: function(result){

        }});
    }
    function naloziRegistracijo(){
        $("#content").load("registracija.html");
    }
</script>
</body>
</html>