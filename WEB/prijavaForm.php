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
<div id="content">
    <div class="row">
        <div id="prijavaCard" class="col-xs-12 col-sm-8 col-md-6 col-xl-4">
            <div  class="card-panel white">
                <h5 class="black-text center">Prijava</h5>
                <div class="row">
                    <form action="../php/prijava.php" method="post" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="uporabniskoIme" name="uporabniskoIme" type="text" class="validate">
                                <label for="uporabniskoIme">Uporabniško ime</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="geslo" name="geslo" type="password" class="validate">
                                <label for="geslo">Geslo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 text-center">
                                <button id="posljiPrijavo" type="submit" class="waves-effect waves-purple lighten-4 btn-flat">Prijavi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
</body>
</html>




