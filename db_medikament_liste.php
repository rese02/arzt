<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Arztverwaltung</title>
</head>
<body>
  <?php include'arzt_menu.php'; ?>

  <h2>Medikamente</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Milliliter</th>
      <th>Preis</th>
      <th>Stück</th>
    </tr>

    <?php 
    
      include 'db_connect.php';

      if ($conn) {
        $sql = "SELECT * FROM wda_arzt_medi;";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            extract($row);

            echo '<tr>';
            echo '<td>' . $wda_medi_011 . '</td>';
            echo '<td>' . $wda_medi_012 . '</td>';
            echo '<td>' . $wda_medi_013 . '</td>';
            echo '<td>' . $wda_medi_014 . '</td>';
            echo '</tr>';

            

          }
        }

      }

    ?>

  </table>

</body>
</html>