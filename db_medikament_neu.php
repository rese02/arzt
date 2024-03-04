<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Medikament Neu</title>
</head>
<body>
  <?php include'arzt_menu.php'; ?>
  <h2>Neuen Medikamente erfassen</h2>
  <form method="post "action="db_patient_insert.php">
    <label for="wda_medi_011">Name</label>
    <input type="text" id="wda_medi_011" name="wda_medi_011" required="">
    <br>
    <label for="wda_medi_012">Milliliter</label>
    <input type="text" id="wda_medi_012" name="wda_medi_012" required="">
    <br>
    <label for="wda_medi_013">Preis</label>
    <input type="text" id="wda_medi_013" name="wda_medi_013" required="">
    <br>
    <label for="wda_medi_014">Stück</label>
    <input type="text" id="wda_medi_014" name="wda_medi_014" required="">
    <button type="submit" form="wda_arzt_form" value="Submit" name="submit">Neue Medikamente hinzufuegen</button>
  </form>
</body>
</html>