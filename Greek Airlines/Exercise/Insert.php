<style>

  h1 {text-align: center;font-size:40pt; font-family:Georgia; color:#33AEFF; background-color:#FDFDFD;
  letter-spacing:2.5pt}

  h2 {text-align: center;font-size:18pt; font-family:Georgia;}

  h3 {text-align: left;font-size:18pt; font-family:Georgia;}

</style>

<?php

$cn = pg_connect("host=localhost port=5432 dbname=Personal_1 user=postgres password=1204");
if ($cn) {
    echo "<hr><br>";
    echo  "\n <h2>Successful connect to database</h2> ";
    echo "<hr><br>";
} else {
    die("<br><h2>Failed, reason: check db configurations.</h2>");
}
$fn = $_POST["firstname1"];
$sn = $_POST["Surname1"];
$adr = $_POST["Address1"];
$em = $_POST["Email1"];
$pass = $_POST["Password1"];
$c = $_POST["Country1"];
$zip = $_POST["ZipCode1"];
$tel = $_POST["Telephone1"];
$card = $_POST["CardNumber1"];
$ct = $_POST["CardType1"];
$sex = $_POST["payment"];


if($fn and $sn and $adr and $em and $pass and $c and $zip and $tel and $card and $ct and $sex){
    $rq = "INSERT INTO me(name, surname, address, email, password, country,zip_code,telephone,card_number,card_type,gender)
	     VALUES ('$fn', '$sn','$adr','$em','$pass','$c','$zip','$tel','$card','$ct','$sex') ; ";
    $rq_result = pg_query($cn,$rq) or die("Something wrong.. ");
    $rq_final = pg_fetch_assoc($rq_result);
    echo "<h2>Data saved to Base!</h2>";
  }
pg_close($cn);
?>
