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

      if ($_FILES['wda_arzt_foto']['error'] > 0) {
        echo "<p>Fehler beim Upload des Bildes</p>";
      } else {
        $filename = get_uploaded_file($_FILES['wda_arzt_foto']['name'], $_FILES['wda_arzt_foto']['tmp_name']);
      }

        $sql = "INSERT INTO wda_arzt_adr
        (wda_arzt_vorname, 
        wda_arzt_nachname, 
        wda_arzt_strasse, 
        wda_arzt_ort, 
        wda_arzt_tel, 
        wda_arzt_email, wda_arzt_foto)
        VALUES 
        ('$wda_arzt_vorname', '$wda_arzt_nachname', '$wda_arzt_strasse', '$wda_arzt_ort', '$wda_arzt_tel', '$wda_arzt_email', '$filename');";
     }

     $result = mysqli_query($conn, $sql); 

     if ($result) {
       echo "Neuer Patient erfolgreich hinzugefügt";
     } else {
       echo "Fehler!";
     }
  }

  function get_uploaded_file($file, $tmp_file) {
    echo "<br>file: " . $file;
    echo "<br> tmp_file " . $tmp_file;

    $newName = time() . '_' . $file;
    $destination = 'img/' . $newName;
   
    if (move_uploaded_file($tmp_file, $destination)) {
      echo "<p>Die Datei wurde erfolgreich hochgeladen" . $newName;
    }

    return $newName;
  }

  ?>
</body>
</html>