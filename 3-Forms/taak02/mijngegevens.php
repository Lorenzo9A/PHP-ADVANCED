<html>
    <head>
    <style>
        body {
            background-color: <?php echo $_POST["kleur"];?>;
        }
    </style>
</head>
<body>

 <?php echo $_POST["naam"];
  echo $_POST["Achternaam"];
  echo"<br>";
  echo $_POST["man"];
  echo"<br>";
  echo $_POST["klas"]; 
  echo"<br>";
 echo $_POST["leeftijd"];
 echo"<br>"; 
 echo $_POST["adres"];
 echo"<br>";
  echo $_POST["plaatsnaam"];
  ?>
</body>
</html>