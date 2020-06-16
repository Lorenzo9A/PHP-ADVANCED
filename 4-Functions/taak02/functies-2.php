<html>
    <head>
</head>
<body>

 <?php 
 function rekenUit($getal1, $getal2, $getal3){
    $totaal = $getal1 + $getal2 + $getal3;
    echo "als ik de getallen $getal1, $getal2, en $getal3 bijelkaar opreken krijg je $totaal";
    return $totaal; 
}

 rekenUit(6, 7, 10);
 echo "<br>";
 rekenUit(1, 3, 5);
 echo "<br>";
 rekenUit(10, 6, 8);


  ?>
</body>
</html>