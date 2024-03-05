<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Patienten</title>
</head>
<body>
  <?php include'arzt_menu.php'; ?>

  <h2>Patienten</h2>


    <?php 
    
      include 'db_connect.php';

      if ($conn) {
        $sql = "SELECT * FROM wda_arzt_adr;";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            extract($row);

            ?>

            <div>
              <div>
                <p>Wohnhaft in:</p>
                <p><?php echo $wda_arzt_ort; ?></p>
              </div>
            </div>

            <div>
              <div>
                <img src=<?php echo 'img/' . $wda_arzt_foto; ?> style='max-width: 100px;'>
              </div>
            </div>

            <div>
              <div>
                <a href=<?php echo 'db_patient.delete.php?id=' . $wda_arzt_id; ?> >Loeschen</a>
              </div>
            </div>

            <div>
              <div>
                <a href=<?php echo 'db_patient.edit.php?id=' . $wda_arzt_id; ?> >Aendern</a>
              </div>
            </div>

            <hr>
            <?php 
          }
        }

      }
      ?>

</body>
</html>