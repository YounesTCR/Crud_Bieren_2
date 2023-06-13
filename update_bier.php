<?php
// Functie: ---
// Auteur: Younes Et-Talby

// Initialisatie
#include 'functions.php';
require_once('functions.php');


echo '<h1> Update Bier </h1>';

if(isset($_POST) && isset($_POST['submit'])){
    UpdateBier($row);
}

if(isset($_GET['biercode'])){
    echo '<br> Data uit het vorige formulier: <br>';
    // Haal alle info van de betreffende biercode $_GET['biercode']
     $biercode = $_GET['biercode'];
     $row = GetBier($biercode);



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="biercode" value="<?php echo $_GET['biercode']?>" id="0" hidden required><br>
        <label for="1">Biernaam: </label><input type="text" name="biernaam" value="<?=$row['naam']?>" id="1" required><br>
        <label for="2">Soort: </label><input type="text" name="soort" value="<?=$row['soort']?>" id="2" required><br>
        <label for="3">Stijl: </label><input type="text" name="stijl" value="<?=$row['stijl']?>" id="3" required><br>
        <label for="4">Alcohol %: </label><input type="number" name="alcohol" value="<?=$row['alcohol']?>" id="4" required><br>
        <?php 
            dropDown('brouwcode', GetData('brouwer', '',), '');
        ?>
        <input type="submit" name="submit" value="Wijzigen" id="submit">
</form>
    <a href="crud_bieren.php">Terug naar crud bieren</a>
    <?php
    } else {
        echo 'Geen biercode opgegeven';
    }
    ?>
</body>
</html>
