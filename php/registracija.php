<?php
session_start();
$host="127.0.0.1";
$port=3306;
$socket="";
$user="luka";
$password="kinoIS";
$dbname="kinois";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());
if(isset($_POST["uporabniskoIme"]) && isset($_POST["geslo"]) && isset($_POST["ime"]) && isset($_POST["priimek"]) && isset($_POST["email"])){
    $idUporabnik = 2;
    $uporabniskoIme = $_POST["uporabniskoIme"];
    $geslo = $_POST["geslo"];
    $ime = $_POST["ime"];
    $priimek = $_POST["priimek"];
    $email = $_POST["email"];

    $sql = "INSERT INTO uporabnik (idUporabnik,ime,priimek,email,geslo,uporabniskoIme) VALUES ('$idUporabnik','$ime','$priimek','$email','$geslo','$uporabniskoIme')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        $_SESSION["uporabniskoIme"] = $uporabniskoIme;
        $_SESSION["prijavljen"] = true;
        header("Location: ../WEB/index.php");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        header("Location: ../WEB/registracijaForm.php");
        die();
    }
}
?>