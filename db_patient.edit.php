<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Patienten aendern</title>
</head>
<body>
  <?php include'arzt_menu.php'; ?>
  <h2>Patienten aendern</h2>

  <?php
  include 'db_connect.php';

  if ($conn) {
    $adr_id = $_GET['id'];
    
    $sql = "SELECT * FROM wda_arzt_adr WHERE wda_arzt_id = " . $adr_id;

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    extract($row);

    mysqli_close($conn);

  }

  ?>
  <form method="post" action="db_patient_update.php?id=<?php echo $wda_adr_id; ?>" enctype="multipart/form-data">
    <label for="wda_arzt_vorname">Vorname</label>
    <input type="text" id="wda_arzt_vorname" name="wda_arzt_vorname" required="" value="<?php echo htmlspecialchars($wda_arzt_vorname); ?>">
    <br>
    <label for="wda_arzt_nachname">Nachname</label>
    <input type="text" id="wda_arzt_nachname" name="wda_arzt_nachname" required="" value="<?php echo htmlspecialchars($wda_arzt_nachname); ?>">
    <br>
    <label for="wda_arzt_strasse">Straße</label>
    <input type="text" id="wda_arzt_strasse" name="wda_arzt_strasse" required="" value="<?php echo htmlspecialchars($wda_arzt_strasse); ?>">
    <br>
    <label for="wda_arzt_ort">Ort</label>
    <input type="text" id="wda_arzt_ort" name="wda_arzt_ort" required="" value="<?php echo htmlspecialchars($wda_arzt_ort); ?>">
    <br>
    <label for="wda_arzt_tel">Telefonnummer</label>
    <input type="text" id="wda_arzt_tel" name="wda_arzt_tel" required="" value="<?php echo htmlspecialchars($wda_arzt_tel); ?>">
    <br>
    <label for="wda_arzt_email">Email</label>
    <input type="text" id="wda_arzt_email" name="wda_arzt_email" required="" value="<?php echo htmlspecialchars($wda_arzt_email); ?>">
    <br>
    <label for="wda_arzt_foto">Foto</label>
    <input type="text" id="wda_arzt_foto" name="wda_arzt_foto" value="<?php echo htmlspecialchars($wda_arzt_foto); ?>">
    <button type="submit" value="Submit" name="submit">Änderungen speichern</button>
</form>
</body>
</html>