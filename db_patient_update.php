<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Patient geändert</title>
</head>
<body>


<?php
  include 'arzt_menu.php';
  ?>

<h2>Eintrag in der Datenbank wird geaendert</h2>

<?php
  include 'db_connect.php';

  if ($conn) {
    $adr_id = $_GET['id'];

    extract($_POST);

    $sql = "UPDATE wda_arzt_adr SET 
        wda_arzt_vorname = '" . $wda_arzt_vorname . "', 
        wda_arzt_nachname = '" . $wda_arzt_nachname . "', 
        wda_arzt_strasse = '" . $wda_arzt_strasse . "', 
        wda_arzt_ort = '" . $wda_arzt_ort . "', 
        wda_arzt_tel = '" . $wda_arzt_tel . "', 
        wda_arzt_email = '" . $wda_arzt_email . "' 
        WHERE wda_arzt_id = " . $adr_id;


    echo "meine id: " . $adr_id;

    $sql = 'DELETE FROM wda_arzt_adr WHERE wda_arzt_id ' = $adr_id;

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<p>Der Patient mit der nummer ' . $adr_id . ' wurde erfolgreich geloescht!</p>' ;
    } else {
      echo "<p>Fehler</p>";
    }
    }
  ?>


</body>
</html>