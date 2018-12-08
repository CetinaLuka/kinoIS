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
if(isset($_POST["uporabniskoIme"]) && isset($_POST["geslo"])){
    $uporabniskoIme = $_POST["uporabniskoIme"];
    $query = "select geslo from uporabnik where uporabniskoIme = '$uporabniskoIme'";

    if ($stmt = $con->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($geslo);

        while ($stmt->fetch()) {
            if($geslo==$_POST["geslo"]){
                $_SESSION["uporabniskoIme"] = $uporabniskoIme;
                $_SESSION["prijavljen"] = true;
                $hashgeslo = password_hash($geslo, PASSWORD_DEFAULT);
                print "Hashgeslo : ".$hashgeslo;
                echo "Verify: ".password_verify($geslo, $hashgeslo);
                header("Location: ../WEB/index.php");
                die();
            }
        }
        $stmt->close();
    }
}
header("Location: ../WEB/prijavaForm.php");
die();

?>