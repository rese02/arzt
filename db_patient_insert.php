<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Arztverwaltung</title>
</head>
<body>
<?php
  include 'arzt_menu.php';

  if (isset($_POST['submit'])) { 
    extract($_POST);

     include 'db_connect.php';

     if ($conn) {

        $sql = "INSERT INTO arzt_adressen
        (arzt_adr_vorname, 
        arzt_adr_nachname, 
        arzt_adr_strasse, 
        arzt_adr_ort, 
        arzt_adr_telefonnummer, 
        arzt_adr_email)
        VALUES ($arzt_adr_vorname, $arzt_adr_nachname, $arzt_adr_strasse, $arzt_adr_ort, $arzt_adr_telefonnummer, $arzt_adr_email)";
     }

     $result = mysqli_query($conn, $sql); 

     echo $sql;

     if ($result) {
       echo "Neuer Patient erfolgreich hinzugefügt";
     } else {
       echo "Fehler!";
     }
  }

  ?>
</body>
</html>