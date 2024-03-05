<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Patient Neu</title>
</head>
<body>
  <?php include'arzt_menu.php'; ?>
  <h2>Neuen Patienten erfassen</h2>
  <form method="post" action="db_patient_insert.php" enctype="multipart/form-data">
    <label for="wda_arzt_vorname">Vorname</label>
    <input type="text" id="wda_arzt_vorname" name="wda_arzt_vorname" required="">
    <br>
    <label for="wda_arzt_nachname">Nachname</label>
    <input type="text" id="wda_arzt_nachname" name="wda_arzt_nachname" required="">
    <br>
    <label for="wda_arzt_strasse">Strasse</label>
    <input type="text" id="wda_arzt_strasse" name="wda_arzt_strasse" required="">
    <br>
    <label for="wda_arzt_ort">Ort</label>
    <input type="text" id="wda_arzt_ort" name="wda_arzt_ort" required="">
    <br>
    <label for="wda_arzt_tel">Telefonnummer</label>
    <input type="text" id="wda_arzt_tel" name="wda_arzt_tel" required="">
    <br>
    <label for="wda_arzt_email">Email</label>
    <input type="text" id="wda_arzt_email" name="wda_arzt_email" required="">
    <br>
    <label for="wda_arzt_foto">Foto</label>
    <input type="file" id="wda_arzt_foto" name="wda_arzt_foto" accept="image/*">
    <button type="submit" value="Submit" name="submit">Neue Patienten hinzufuegen</button>
  </form>
</body>
</html>