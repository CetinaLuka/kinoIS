<?php
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
<head>
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
        if(@$_SESSION["prijavljen"]==true)
            if(@$_SESSION["uporabnik"]=="Luka")
                echo @$_SESSION["uporabnik"]." je zelo kul oseba ";
            elseif(@$_SESSION["uporabnik"]=="David")
                echo "O, ".@$_SESSION["uporabnik"].", a ste kej slabi?";
        elseif(@isset($_POST["ime"])){
            echo "prijava ni uspela";
        }
    ?>
</div>
<script>
    function naloziPrijavo(){
        $("#content").load("prijava.html");
    }

    function odjava(){
        //$("html").load("index.html?odjavi=true");
        $.ajax({url: "index.php?odjavi=true", success: function(result){
            $("body").html(result);
        }});
    }
    function naloziRegistracijo(){
        $("#content").load("registracija.html");
    }
    mdc.ripple.MDCRipple.attachTo(document.querySelector('button'));
    mdc.ripple.MDCRipple.attachTo(document.querySelector('a'));
</script>
</body>
</html>