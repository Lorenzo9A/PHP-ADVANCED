<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
  
<form>
  <label for="klas">Ik zit in klas:</label><br>
  <select name = "klassen">
  <option value= "8A">8A</option>
  <option value= "8B">8B</option>
  <option value= "8C">8C</option>
  <option value= "8D">8D</option>
  <option value= "8E">8E</option>
  <option value= "9A">9A</option>
  <option value= "9B">9B</option>
  <option value= "9C">9C</option>
  <option value= "9D">9D</option>
  <option value= "9E">9E</option>
  </select>
  <input type="submit" value="verzend">
</form>

   <?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach($klassen as $klas) {
    echo"<br>";
}

    

?>

</body>