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
        <div class="row">
            <div id="prijavaCard" class="col-xs-12 col-md-4">
                <div  class="card-panel white">
                    <h5 class="black-text center">Registracija</h5>
                    <div class="row">
                        <form action="../php/registracija.php" method="post" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="ime" name="ime" type="text" class="validate">
                                    <label for="ime">Ime</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="priimek" name="priimek"type="text" class="validate">
                                    <label for="priimek">Priimek</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="uporabniskoIme" name="uporabniskoIme"type="text" class="validate">
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
                                <div class="input-field col s12">
                                    <input id="email" name="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 text-center">
                                    <button id="posljiPrijavo" type="submit" class="waves-effect waves-purple lighten-4 btn-flat">Pošlji</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "include/footer.php";
?>
<script>
</script>
</body>
</html>
