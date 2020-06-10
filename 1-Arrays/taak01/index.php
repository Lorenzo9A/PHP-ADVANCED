<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
     
    
    <?php 
  
 $studenten = array("Piet", "Muhammad", "Els");
$voornaam['Piet'] = "piet";
$voornaam['Muhammad'] = "Muhammad";
$voornaam['Els'] = "Els";

$achternaam['piet'] = "blok";
$achternaam['Muhammad'] = "achterhoef";
$achternaam['Els'] = "kast";

$leeftijd['Piet'] = 16;
$leeftijd['Muhammad'] = 18;
$leeftijd['Els'] = 20;

$klas['piet'] = 9;
$klas['Muhammad'] = 4;
$klas['Els'] = 6;

echo "voornaam: ". $voornaam['Muhammad'] . "<br>";
echo "achternaam: ". $achternaam['Muhammad'] . "<br>";
echo "leeftijd: ". $leeftijd['Muhammad'] . "<br>";
echo "klas: ". $klas['Muhammad'] . "<br>";
  
  
  ?>
    
  </body>

    
</html>