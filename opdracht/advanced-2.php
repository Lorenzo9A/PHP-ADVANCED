<html>

<head>
</head>

<body>
  <style>
    body {
      background-color: <?php echo $_POST["kleur"]; ?>;
      color: <?php echo $_POST["textkleur"]; ?>;
    }

    table,
    tr,
    td {
      border: <?php echo $_POST["border"]; ?> solid black;
      padding: <?php echo $_POST["padding"]; ?>
    }
  </style>
  <?php
  $mijzelf = array(

    "Naam"       => " Lorenzo",
    "Achternaam" => " Breedveld",
    "Leeftijd"   => " 17",
    "Woonplaats" => " Amsterdam",
    "Klas"       => " 9A"
  );

  function maakRij($mijzelf, $table = true)
  {
    foreach ($mijzelf as $ik => $gegevens) {
      echo "<tr>", "<td>" . $ik .   $gegevens .  "<tr>", "</td>";
      echo "<br>";
    }
  }
  ?>
  <table>
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php maakRij($mijzelf);
        ?>
      </tr>
    </tbody>
  </table>



</body>

</html>