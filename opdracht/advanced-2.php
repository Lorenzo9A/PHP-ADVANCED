<html>
    <head>
    <style>
        body {
            background-color: <?php echo $_POST["kleur"];?>;
            color: <?php echo $_POST["textkleur"];?>;
        }
    </style>
</head>
<body>
 <?php 
function toonTekst(){
  $mijzelf = array("Naam"=>" Lorenzo", "Achternaam"=>" Breedveld","Leeftijd"=> " 17", "Woonplaats"=>" Amsterdam", "Klas"=> " 9A");
  foreach($mijzelf as $ik => $gegevens){
    echo  $ik , $gegevens ; 
    echo "<br>";
    }
} 

?>
<table>   
           <tr>
               <?php toonTekst();?>
           </tr>
</table>
</body>
</html>