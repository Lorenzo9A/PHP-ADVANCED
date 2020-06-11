<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php
$beschrijving = ["voornaam", "achternaam", "klas","leeftijd","woonplaats"];
  $waarde = ["jan", "Janssen", "9A", 17, "Amstelveen"];

?>
        <table>
           
            <tr>
                <td><?php echo $beschrijving[0]; ?></td>
                <td><?php  echo $waarde[0]; ?> </td>
            </tr>
            <tr>
                <td><?php echo $beschrijving[1]; ?></td>
                <td><?php  echo $waarde[1]; ?> </td>
            </tr>
            <tr>
                <td><?php echo $beschrijving[2]; ?></td>
                <td><?php  echo $waarde[2]; ?> </td>
            </tr>
            <tr>
                <td><?php echo $beschrijving[3]; ?></td>
                <td><?php  echo $waarde[3]; ?> </td>
            </tr>
            <tr>
                <td><?php echo $beschrijving[4]; ?></td>
                <td><?php  echo $waarde[4]; ?> </td>
            </tr>
            </table>
   

</body>
