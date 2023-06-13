<?php
// Functie: ---
// Auteur: Younes Et-Talby   

// Initialisatie
#include 'functions.php';
require_once('functions.php');

// Main


// Print ---
echo '<h1> Verwijder Bier </h1>';

if(isset($_GET['biercode'])){
    echo '<br> Data uit het vorige formulier: <br>';
    // Haal alle info van de betreffende biercode $_GET['biercode']
    $biercode = $_GET['biercode'];
    $row = GetBier($biercode);
    echo '<table border = 1px>';
        echo '<tr>';
            foreach ($row as  $value) {
                echo '<td>' . $value . '</td>';
            } 
        echo '</tr>';
    echo '</table>';
} else {
    echo 'Geen biercode opgegeven';
}

// Test of er op de wijzig-knop is gedrukt
if(isset($_POST) && isset($_POST['submit'])){
    DeleteBier($biercode);
    
    header("location:crud_bieren.php"); 

    //header("location:update.php?$_POST[NR]"); 
}

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
        <!--<label for="0">Biercode: </label>--><input type="number" name="biercode" value="<?php echo $_GET['biercode']?>" id="0" hidden required><br>
        <input type="submit" name="submit" value="Verwijder" id="submit">
        <a href="crud_bieren.php">Terug naar overzicht</a>
    </form>    
</body>
</html>
