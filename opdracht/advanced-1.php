<html>
    <head>
</head>
<body>
<h3>Form</h3>
    <form action="advanced-2.php" method="POST">
        TabelrandDikte px: <input type="text" name="border"><br><br>
        cel-padding px: <input type="text" name="padding"><br><br>
        <label for="kleur">Achtergrond kleur:</label>
        <select name="kleur" id="kleur">
        <?php 
          $kleuren = array("red","blue","green","yellow","purple");
          foreach($kleuren as $kleur): ?>
          
            <option value="<?php echo $kleur ?>"><?php echo $kleur ?></option>

          <?php endforeach ?>
        </select>
        <br><br>
        <label for="kleur">Tekst kleur:</label>
        <select name="textkleur" id="textKleur">
            <?php 
          $kleuren = array("red","blue","green","yellow","purple");
          foreach($kleuren as $textkleur): ?>
          
            <option value="<?php echo $textkleur ?>"><?php echo $textkleur ?></option>

          <?php endforeach ?>
        </select>
        <br><br>
        <input type="submit" value="verzend">
</body>
</html>