<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
  


   <?php
$leeftijd= 0;

while($leeftijd < 18) {
  echo "Ik ben $leeftijd jaar oud, ik mag nog niet stemmen <br>";
  $leeftijd++;
  if($leeftijd == 18){

    echo"Ik ben $leeftijd jaar oud, ik heb stemrecht";
  }
}


    

?>

</body>